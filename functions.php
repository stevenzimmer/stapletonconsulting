<?php

	require get_theme_file_path('/inc/search-route.php');

	function enqueue_assets() {

		// Enqueue Theme Scripts
 		wp_deregister_script( 'jquery' );

 		wp_enqueue_script( 'scripts', get_template_directory_uri() . '/prod/js/scripts.min.js', array(), '1.1', true );

 		// Enqueue Theme Styles
		wp_enqueue_style( 'style', get_template_directory_uri() . '/prod/css/style.min.css', array(), '1.7' );

		wp_localize_script('scripts', 'sc_data', array(
				'root_url' => get_site_url(),
				'theme_folder' => get_template_directory_uri()
			)
		);
	}

	add_action('wp_enqueue_scripts', 'enqueue_assets');

	function register_theme_support() {

		register_nav_menus(
			array(
				'primary' => __( 'Primary', 'stapleton')
			)
		);

		// Add featured image to new posts and pages in wp-admin
		add_theme_support( 'post-thumbnails' );

		// Adds title tag without header.php code
		add_theme_support( 'title-tag' );

		// Add menu functionality within wp-admin
		add_theme_support( 'menus' );

		add_post_type_support('page', 'excerpt');
	}

	add_action( 'after_setup_theme', 'register_theme_support');

	// Removes WP Emoji
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

	// Remove Unused WP scripts
	function remove_wp_scripts() {
		if (!is_admin()) {
			wp_deregister_script('wp-embed');
			wp_deregister_script( 'comment-reply' );
		}
	}
	add_action('init', 'remove_wp_scripts');


	// Disable XML RPC
	add_filter('xmlrpc_enabled', '__return_false');

	// Remove Wordpress version number
	add_filter( 'the_generator', '__return_null' );

	function page_hero($args) {

		if ( !isset($args['bg_color']) ) :
			$args['bg_color'] = 'blue-dark';
		endif;

		if ( !isset($args['h1_color']) ) :
			$args['h1_color'] = 'white';
		endif;
?>

<header class="bg-<?php echo $args['bg_color'] ?> page-hero relative">
	<div class="absolute position page-hero-bg page-hero-bg-<?php echo $args['type'] ?> parallax"></div>
	<div class="container relative">
		<div class="row">
			<div class="col-md-5 col-md-offset-1 col-sm-6 col-sm-offset-0">
				<div class="hero-inner">
					<h1 class="mb40 text-<?php echo $args['h1_color']?>"><?php echo $args['title']; ?></h1>
					<p class="mb40 text-white">
						<?php echo $args['subtitle']; ?>

					</p>
					<table width="100%">
						<tr>
							<?php
								$i = 1;
								foreach ( $args['ctas'] as $cta ) :
									if ( $i % 2 === 0) :
										$btn_bg = 'solid';
									else :
										$btn_bg = 'outline';
									endif;
							?>
							<td>
								<a href="<?php echo $cta['link'] ?>" class="btn btn-<?php echo $btn_bg ?> btn-<?php echo $btn_bg ?>-<?php echo $cta['btn_color'] ?>"><?php echo $cta['text'] ?></a>
							</td>
							<?php
								$i++;
								endforeach;
							?>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</header>

<?php
	}

	function contact_form($color) {

?>
<section class="section bg-<?php echo $color ?> contact-form" id="contact">
	<div class="container">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="row">
				<h2 class="mb40 text-white">Get in Touch</h2>
				<p class="mb40 text-white">
					We’d love to hear from you. Fill out the form below and we'll reach out to dig deeper into your product marketing challenges. We offer free consultations to see if it makes sense for us to work together. Send us your question or thoughts and we’ll get back to you within 24 hours.
				</p>

			</div>

			<div class="row">
				<form action="" class="form-horizontal sc-form sc-form-<?php echo $color; ?>" id="sc_form" >
					<div class="col-sm-4">
						<div class="form-group">
							<input name="first_name" type="text" class="form-control" id="first_name" placeholder="First Name" title="Please enter your first name" required>
						</div>
					</div>
					<div class="col-sm-4 col-sm-offset-1">
						<div class="form-group">
							<input name="last_name" type="text" class="form-control" id="last_name" placeholder="Last Name" title="Please enter your last name" required>
						</div>
					</div>

					<div class="clearfix"></div>

					<div class="col-sm-4">
						<div class="form-group">
							<input name="email" type="email" class="form-control" id="email" placeholder="Email" title="Please enter a valid email address" required>

						</div>
					</div>
					<div class="col-sm-4 col-sm-offset-1">
						<div class="form-group">
							<input name="telephone" type="telephone" class="form-control" id="phone" placeholder="Phone" title="Please enter a valid contact number" required>
						</div>
					</div>

					<div class="clearfix"></div>


					<div class="col-sm-9">
						<div class="form-group">
							<textarea name="message" id="message" placeholder="Message" class="form-control" rows="5"></textarea>
						</div>
					</div>

					<div class="col-sm-2 col-sm-offset-1">
						<div class="sc-form-button">
							<div class="sc-form-button-align">
								<input value="submit" type="submit" name="sc_form_button" id="sc_form_button" class="btn btn-outline
								<?php
									if ($color !== 'orange') :
										echo 'btn-outline-orange';
									endif;
								?>">
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</form>
				<div class="form-success">
					<h2 class="mb20 text-white">Thank you!</h2>
					<p class="text-white">We will be in touch shortly!</p>
				</div>
			</div>
		</div>
	</div>
</section>
<?php

	}

	function our_process($bg = null) {
?>
<section class="section process bg-<?php echo $bg ?>">
	<div class="container text-center">
		<h2 class="mb20 text-blue-light">Our Process</h2>
		<p>
			We follow this strategy to work on each & every project, it brings success
		</p>
		<div class="section-half"></div>
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="row">

				<?php
					$processes = array(
						array(
							'analysis',
						),

						array(
							'strategy',
						),

						array(
							'planning',
						),

						array(
							'execution',
						)
					);

					foreach ( $processes as $process ) :

						$icon = $process[0];
				?>

					<div class="col-sm-3">
						<div class="process-item mb40">
							<div class="row">
								<div class="col-sm-6 col-sm-offset-3">
								<div class="row">
									<div class="process-item-icon">

										<span class="icon-small owl-icon owl-icon--process-<?php echo $icon ?>"></span>
									</div>
								</div>
							</div>
							<div class="process-item-text">
								<p class="ls uc bold"><?php echo $icon; ?></p>
							</div>
							</div>

						</div>
					</div>

				<?php
					endforeach;
				?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php

	}

	function get_started($color = 'light') {
?>
<section class="bg-blue-<?php echo $color ?> section relative get-started">
	<div class="get-started-bg absolute position"></div>
	<div class="container text-center relative">
		<h2 class="mb40 text-white">Ready to get started?</h2>
		<a href="/contact-us" class="btn-get-started btn btn-outline btn-outline-orange">contact us</a>
	</div>
</section>
<?php
	}

	function quotes($bg = '', $icon = 'quotes') {
?>

<section class="section quote bg-<?php echo $bg ?>">
	<div class="container">
		<div id="quote-carousel" class="carousel quote-carousel" data-ride="carousel">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<div class="row">
						<div class="col-sm-6 col-sm-offset-3">
							<div class="quote-symbol">
								<span class="icon-small owl-icon owl-icon--<?php echo $icon ?>"></span>
							</div>
						</div>
					</div>


					<div class="row mb40">
						<div class="col-sm-10 col-sm-offset-1">
							<!-- Wrapper for slides -->
							<div class="carousel-inner quote-carousel-inner text-center relative" role="listbox">

							<?php
								$i = 0;

								$args = array(

									'post_type' => 'quotes',
									'posts_per_page' => 3
								);

								$quotes = new WP_Query($args);

								if ( $quotes->have_posts() ) :
									while ( $quotes->have_posts() ) :
										$quotes->the_post();


							?>
								<div class="item <?php if ($i == 0) : echo 'active'; endif; ?> absolute">
									<div class="quote-text">
										<p>
											<?php the_content(); ?>
										</p>
									</div>
								</div>

							<?php
								$i++;
								endwhile;
								endif;
							?>

							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="row">
						<!-- Indicators -->
					<div class="carousel-indicators quote-carousel-indicators">

						<?php

							$i = 0;

							if ( $quotes->have_posts() ) :
									while ( $quotes->have_posts() ) :
										$quotes->the_post();
						?>
							<div class="<?php if ($i == 0) : echo 'active'; endif;?>">
								<div class="col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2">
									<div class="row">
										<div data-target="#quote-carousel" data-slide-to="<?php echo $i ?>">
											<div class="quote-citation mb40">
												<div class="col-xs-4">
													<div class="row">
														<img alt="<?php the_title() ?> thumbnail" class="img-responsive center-block" src="<?php
														if (has_post_thumbnail()) :
															the_post_thumbnail_url();
														else :
															echo 'http://via.placeholder.com/50x50';
														endif;
													 ?>">
													</div>
												</div>
												<div class="col-xs-8">
													<div class="row">
														<div class="quote-citation-text">
															<p class="quote-citation-name"><?php the_title(); ?></p>
															<p class="bold quote-citation-title"><?php the_excerpt(); ?></p>
														</div>

													</div>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
								</div>
							</div>

						<?php
							$i++;
							endwhile;
							endif;
							wp_reset_postdata();
						?>
					</div>
					</div>

				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</section>
<?php
	}

	function primary_nav() {
		wp_nav_menu(
			array(
				'theme_location' 	=> 'primary',
				'menu'				=> 'Primary',
				'container'			=> false,
				'menu_class'		=> 'nav navbar-nav',
				'echo'				=> true,
				'fallback_cb'		=> false
			)
		);
	}

	remove_filter( 'the_content', 'wpautop' );
	remove_filter( 'the_excerpt', 'wpautop' );

	// Add Favicon to site head section
	function favicon_add() {

			// Global Favicon
			echo "<link rel='Shortcut Icon' type='image/x-icon' href='/wp-content/uploads/theme-graphics/white-on-navy-ico.png' />";


	}
	add_action('wp_head', 'favicon_add');

?>