
class Search {

	// Describe and create object
	constructor() {
		this.open_button = $('.navbar-nav-search');
		this.close_button = $('.live-search__close');
		this.search_overlay = $('.live-search');
		this.events();
	}

	// List events
	events() {
		this.open_button.on( 'click', this.open_overlay.bind(this) );
		this.close_button.on( 'click', this.close_overlay.bind(this) );
	}

	// Methods
	open_overlay() {
		this.search_overlay.addClass('live-search-active');
	}

	close_overlay() {
		this.search_overlay.removeClass('live-search-active');
	}


}

export default Search;