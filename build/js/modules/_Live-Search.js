class Search {

	// Describe and create object
	constructor() {
		this.add_search_html();
		this.open_button = $('.navbar-nav-search');
		this.close_button = $('.live-search__close');
		this.search_overlay = $('.live-search');
		this.search_field = $('#search-term');
		this.events();
		this.is_overlay_open = false;
		this.is_spinning = false;
		this.typing_timer;
		this.previous_value;
		this.results_container = $('#live-search__results');
	}

	// List events
	events() {
		this.open_button.on( 'click', this.open_overlay.bind(this) );
		this.close_button.on( 'click', this.close_overlay.bind(this) );
		$(document).on('keyup', this.key_press.bind(this));
		this.search_field.on('keyup', this.typing_logic.bind(this));
	}

	// Methods
	open_overlay() {
		this.search_overlay.addClass('live-search-active');
		$('body').addClass('search-no-scroll');
		$('header, section').addClass('blur');
		setTimeout( () => {this.search_field.focus()}, 300);
		this.is_overlay_open = true;
	}

	close_overlay() {
		this.search_overlay.removeClass('live-search-active');
		$('body').removeClass('search-no-scroll');
		$('header, section').removeClass('blur');
		this.search_field.val('');
		this.results_container.html('');
		this.is_overlay_open = false;
	}

	key_press(e) {

		if ( e.keyCode === 83 && !this.is_overlay_open && !$('input, textarea').is(':focus') ) {
			this.open_overlay();
		}

		if ( e.keyCode === 27 && this.is_overlay_open ) {
			this.close_overlay();
		}

	}

	typing_logic() {

		if ( this.search_field.val() != this.previous_value ) {

			clearTimeout( this.typing_timer );

			if ( this.search_field.val() ) {

				if ( !this.is_spinning ) {
					this.results_container.html('<div class="spinner-loader"></div>');
					this.is_spinning = true;
				}

				this.typing_timer = setTimeout( this.get_results.bind(this), 750);

			} else {

				this.results_container.html('');
				this.is_spinning = false;

			}
		}

		this.previous_value = this.search_field.val();
	}

	get_results() {

		var url = sc_data.root_url + '/wp-json/sc/v1/search?term=' + this.search_field.val();

		$.getJSON(url, (data) => {
			this.results_container.html(`
				<div class="results-container">
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1">
							${data.length ? '<ul class="link-list min-list">' : '<p>No Information matches that search</p>' }
								${data.map( item => `<div class="relative">
														<a href="${item.permalink}">
															<li class="link-list-item relative">
																${item.title}
																<ul>
																	<li class="link-list-item-type">
																		${item.post_type} - ${item.title}
																	</li>
																</ul>
															</li>
															<div class="link-list-arrow absolute"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></div>
														</a>
													</div>
								`).join('')}
							${data.length ? '</ul>' : ''}
						</div>
					</div>
				</div>
			`);
			this.is_spinning = false;
		});
	}

	add_search_html() {
		$('body').append(`
			<div class="live-search">
				<div class="container">
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1">
							<div class="live-search-container relative">
								<div class="live-search__top mb40">
									<div class="row">
										<div class="col-sm-1 col-xs-2">
											<span class="glyphicon glyphicon-search live-search__icon" aria-hidden="true"></span>
										</div>
										<div class="col-sm-9 col-xs-9">
											<div class="row">
												<input type="text" class="search-term" placeholder="What are you looking for?" id="search-term">
											</div>
										</div>
										<div class="col-sm-2 col-xs-1">
											<div class="nav-sc live-search__close relative">
												<button type="button" class="navbar-toggle active absolute" data-toggle="collapse" data-target="#sc-navbar" aria-expanded="false">
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar absolute"></span>
												</button>
											</div>

										</div>
									</div>
								</div>
								<div class="live-search__bottom">
									<div class="" id="live-search__results"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		`);
	}


}

export default Search;