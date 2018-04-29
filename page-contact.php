<?php
/**
 * Template Name: Contact
 */
get_header();

	page_hero(
		array(
			'type' => strtolower(get_the_title()),
			'title' => get_the_title(),
			'subtitle' => 'Fill out the form to the right, and we\'ll be in touch shortly! Fill out the form to the right, and we\'ll be in touch shortly!',
			'ctas' => array(
				array(
					'text' => 'get quote',
					'btn_color' => 'orange',
					'link' => '#contact'
				)
			)
		)
	);

contact_form('orange');
?>
<section class="bg-grey-light">
	<img class="img-responsive" srcset="/wp-content/uploads/theme-graphics/contact-map-mobile.png 768w, /wp-content/uploads/theme-graphics/contact-map.png 1200w" alt="contact map">
	<div class="container">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="row mb40">
				<h2 class="mb20 subheader text-blue-light">General Contact</h2>
				<p>For a quote or specific requests, see form below</p>
			</div>
			<div class="row pb40">
				<div class="col-sm-4">
					<div class="row">
						<div class="col-sm-4">
							<div class="text-center social-icon mb20">
								<span class="icon-small owl-icon owl-icon--phone"></span>
							</div>
						</div>
						<div class="clearfix"></div>

						<p>800 123 4567</p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="row">
						<div class="col-sm-5 text-center">
							<div class="social-icon mb20">
								<span class="icon-small owl-icon owl-icon--email"></span>
							</div>
							<a href="mailto:mstapleton@owlconsulting.com">Email Us</a>
						</div>
						<div class="clearfix"></div>

					</div>
				</div>
				<div class="col-sm-4">
					<div class="row">
						<div class="col-sm-12 text-center">
							<div class="social-icon mb20">
								<span class="icon-small owl-icon owl-icon--map-marker"></span>
							</div>
							<p>Owl Consulting</p>
							<p>1284 Vallejo</p>
							<p>San Francisco, Ca 94109</p>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-half"></div>
</section>
<?php


	$arr = array(
		'post_type' => 'consultants',
		'posts_per_page' => -1,
		'order' => 'ASC'
	);

	$leaders = new WP_Query( $arr );

	$i = 1;

	while ($leaders->have_posts()) :
		$leaders->the_post();

		$name = explode(' ', get_the_title());
		$f_name = $name[0];

		$facebook = get_field('consultant_facebook');
		$twitter = get_field('consultant_twitter');
		$linkedin = get_field('consultant_linkedin');
		$email = get_field('consultant_email');

		$bg = '';
		$position_right = '';
		$position_left = '';

		if ( $i % 2 == 0 ) :

			$bg = 'grey-light';

		else :

			$position_right = 'col-sm-offset-1 col-sm-push-5';
			$position_left = 'col-sm-pull-7';

		endif;
?>

<section class="contact-item bg-<?php echo $bg ?>">
	<div class="section-half"></div>
	<div class="container">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="row">
				<div class="col-sm-6 <?php echo $position_right; ?>">
					<div class="pt40">
						<div class="row pb40">
							<h2 class="text-blue-dark"><?php the_title(); ?></h2>
							<h4 class="text-orange bold"><?php the_excerpt(); ?></h4>
						</div>
						<div class="row">
							<div class="col-sm-5">
								<div class="row">
									<a href="mailto:<?php echo $email ?>" class="btn btn-outline btn-outline-orange mb40">contact <?php echo $f_name; ?></a>
								</div>

							</div>

							<div class="col-sm-7">
								<div class="row">

									<div class="col-sm-3">
										<div class="social-icon">
											<a href="<?php echo $twitter ?>">
												<span class="icon-small owl-icon owl-icon--twitter"></span>
											</a>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="social-icon">
											<a href="<?php echo $linkedin ?>">
												<span class="icon-small owl-icon owl-icon--linkedin"></span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-5 <?php echo $position_left; ?>">
					<div class="row">
						<img class="img-responsive center-block" src="<?php the_post_thumbnail_url(); ?>">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
	$i++;
	endwhile;
	wp_reset_postdata();
	get_footer();
?>