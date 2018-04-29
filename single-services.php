<?php
/**
*  The template for displaying Services
**/
get_header();

while (have_posts()) :
	the_post();
	$services_title_lowercase = strtolower( get_the_title() );
	$services_icon = html_entity_decode(str_replace( array(' '), array('_'), $services_title_lowercase));
	$services_icon_wash = str_replace('_&_', '_', $services_icon);

	page_hero(array(
			'type' => 'services-detail',
			'bg_color' => 'orange',
			'title' => get_the_title(),
			'subtitle' => get_the_excerpt(),
			'h1_color' => 'blue-dark',
			'ctas' => array(
				array(
					'link' => '#contact',
					'text' => 'contact us',
					'btn_color' => 'blue'
				)
			)
		)
	);
?>

<section class="pt80 services">
	<div class="container">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="row text-center">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="row">
						<div class="col-sm-6 col-sm-offset-3">
							<div class="row">
								<div class="col-sm-8 col-sm-offset-2">
									<div class="services-single-icon">
										<span class="owl-icon icon-small owl-icon--<?php echo $services_icon_wash; ?>_gold"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<h2 class="text-blue-light">Deliverables</h2>
			</div>

			<div class="row">
				<div class="services-wrapper relative">

				<?php
					the_content();
				?>
					<div class="services-wrapper-inner absolute"></div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_started(); ?>

<section class="section services-related relative">
	<div class="position absolute services-related-bg"></div>
	<div class="container relative">
		<div class="row ">
			<div class="col-sm-8 col-sm-offset-2">
				<h2 class="mb40 text-center text-blue-dark">Related Services</h2>

				<?php
					$services = new WP_Query( array(
							'post_type' => 'services',
							'posts_per_page' => 2,
							'orderby' => 'rand',
							'post__not_in' => array($post->ID)
						)
					);
					while ($services->have_posts()) :
							$services->the_post();
							$services_title_lowercase = strtolower( get_the_title() );
							$services_icon = html_entity_decode(str_replace( array(' '), array('_'), $services_title_lowercase));
							$services_icon_wash = str_replace('_&_', '_', $services_icon);
				?>
				<div class="col-sm-6 mb40">
					<div class="row">
						<a href="<?php the_permalink(); ?>">
							<div class="services-item relative bg-white">
							<div class="services-item-overlay-bg position absolute"></div>
							<div class="services-item-overlay absolute position section-half"></div>

							<div class="services-item-icon absolute">
								<div class="col-sm-6 col-sm-offset-3">
									<div class="row">
										<div class="col-sm-8 col-sm-offset-2">
											<div class="row">
												<span class="owl-icon icon-small owl-icon--<?php echo $services_icon_wash;  ?>_gold"></span>
											</div>

										</div>
									</div>
								</div>
								<div class="clearfix"></div>

							</div>

							<div class="services-item-text absolute">
								<h3 class="mb20 text-center"><?php the_title(); ?></h3>
								<div class="services-item-text-para">
									<p><?php the_excerpt(); ?></p>
								</div>
								<div class="services-item-text-arrow">
									<p><img width="30" src="/wp-content/uploads/theme-graphics/arrow-right.png"></p>
								</div>
							</div>
						</div>
						</a>
					</div>
				</div>
				<?php
					endwhile;
					wp_reset_postdata();
				?>
			<div class="text-center">
				<a href="/services" class="btn btn-solid btn-solid-orange">see all services</a>
			</div>
		</div>
	</div>
</section>

<?php
	contact_form('blue-light');
	endwhile;
	get_footer();
?>