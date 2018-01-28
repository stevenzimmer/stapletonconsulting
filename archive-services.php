<?php

	// Services Archive
	get_header();

	page_hero(array(
		'type' => 'services',
		'title' => 'What We Offer',
		'subtitle' => 'A strong product marketing strategy is fundamental to long-term success.  A strong product marketing strategy is fundamental to long-term success.',
		'ctas' => array(
			array(
				'link' => '#contact',
				'btn_color' => 'orange',
				'text' => 'get started'
			),
			array(
				'link' => '#',
				'btn_color' => 'orange',
				'text' => 'active button'
			)
		)
	));
?>

<section class="relative archive-services-sub">
	<div class="archive-services-sub-bg absolute position bg-cover"></div>
	<h2 class="text-white relative text-center subheader">All Services</h2>
</section>

<section class="services section">
	<div class="container">
		<div class="row text-center">
		<?php
			$services = new WP_Query( array(
					'post_type' => 'services',
					'posts_per_page' => -1
				)
			);
			while ($services->have_posts()) :
					$services->the_post();
					$services_title_lowercase = strtolower(get_the_title());
					$services_icon = str_replace(array(' ','-'), '_', $services_title_lowercase);
		?>

			<div class="col-md-4 col-sm-6">
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
		</div>
	</div>
</section>
<?php
	our_process('grey-light');
	get_started();
?>
<section class="case-studies">
	<div class="container">

		<div class="row section">
			<div class="col-sm-4 col-sm-offset-2">
				<div class="section-half">
					<h2 class="mb40 text-blue-light">Case Study 1</h2>
					<p class="mb40">
						A strong product marketing strategy is fundamental to long-term success.  A strong product marketing strategy is fundamental to success.
					</p>
					<a href="#" class="btn btn-outline-orange">read more</a>
				</div>
			</div>
			<div class="col-sm-6">
				<img class="img-responsive" src="/wp-content/uploads/theme-graphics/case-study-1.jpg">
			</div>
		</div>

		<div class="row section">
			<div class="col-sm-4 col-sm-offset-2 col-sm-push-6">
				<div class="section-half">
					<h2 class="mb40">Case Study 1</h2>
					<p class="mb40">
						A strong product marketing strategy is fundamental to long-term success.  A strong product marketing strategy is fundamental to success.
					</p>
					<a href="#" class="btn btn-outline-orange">read more</a>
				</div>

			</div>
			<div class="col-sm-6 col-sm-pull-5">
				<img class="img-responsive" src="/wp-content/uploads/theme-graphics/case-study-2.jpg">
			</div>
		</div>
	</div>
</section>

<section class="bg-grey-light section text-center fundamentals">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<div class="row mb20">
					<h2 class="mb40 text-blue-light">The Fundamentals of Success</h2>
					<p class="mb40">Our method reduces customer acquisition costs and increases retention rates. But product marketing is hard. Whether you're struggling to build your in-house product marketing team, have a big project you need help with, or don't quite know how to productize your technology to begin driving revenue, we can help.</p>

					<p>We are product marketing consultants that are:</p>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="fundamentals-item">
							<p class="uc bold">
								Strategic enough to handle your toughest projects
							</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="fundamentals-item">
							<p class="uc bold">
								Flexible enough to tackle creative and quantitative work
							</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="fundamentals-item">
							<p class="uc bold">
								Expert at working cross-functionally
							</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<?php
	contact_form('blue-light');
	get_footer();
?>
