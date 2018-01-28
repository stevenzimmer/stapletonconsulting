<?php
/**
*  The template for displaying Services
**/
get_header();

while (have_posts()) :
	the_post();
	$services_title_lowercase = strtolower(get_the_title());
	$services_icon = str_replace(array(' ','-'), '_', $services_title_lowercase);

	page_hero(array(
			'type' => 'services-detail',
			'bg_color' => 'orange',
			'title' => get_the_title(),
			'subtitle' => get_the_excerpt(),
			'h1_color' => 'blue-dark',
			'ctas' => array(
				array(
					'link' => '#contact',
					'text' => 'request quote',
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
				<img alt="<?php echo $services_icon ?> icon" class="mb20" height="109" src="/wp-content/uploads/theme-graphics/services_<?php echo $services_icon ?>_icon_yellow.png">
				<h2>Deliverables</h2>
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
		<div class="row text-center">
			<div class="col-sm-8 col-sm-offset-2">
				<h2 class="mb40">Related Services</h2>

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
							$services_title_lowercase = strtolower(get_the_title());
							$services_icon = str_replace(array(' ','-'), '_', $services_title_lowercase);
				?>
				<div class="col-sm-6 mb40">
					<div class="row">
						<a href="<?php the_permalink(); ?>">
							<div class="services-item">
								<div class="services-item-inner relative">
									<img alt="<?php echo $services_icon ?> icon" class="mb20" height="109" src="/wp-content/uploads/theme-graphics/services_<?php echo $services_icon ?>_icon_yellow.png">
									<h3><?php the_title(); ?></h3>
								</div>
								<div class="services-item-overlay-bg position absolute"></div>
								<div class="services-item-overlay absolute position section-half">
									<div class="col-sm-10 col-sm-offset-1">
										<div class="services-item-overlay-wrapper relative">
											<div class="full-width services-item-overlay-wrapper-title relative">
												<h3 class="mb20"><?php the_title() ?></h3>
											</div>
											<div class="full-width services-item-overlay-wrapper-excerpt absolute">
												<p><?php the_excerpt(); ?></p>
											</div>
											<div class="full-width services-item-overlay-wrapper-arrow absolute">
												<p><img width="30" src="/wp-content/uploads/theme-graphics/arrow-right.png"></p>
											</div>
										</div>
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
			<div>
				<a href="/services" class="btn btn-outline btn-outline-orange">see all services</a>
			</div>
		</div>
	</div>
</section>

<?php
	contact_form('blue-light');
	endwhile;
	get_footer();
?>