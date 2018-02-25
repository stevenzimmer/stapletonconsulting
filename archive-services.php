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
			)
		)
	));
?>

<section class="relative archive-services-sub">
	<div class="archive-services-sub-bg absolute position bg-cover"></div>
	<h2 class="text-white relative text-center subheader">All Services</h2>
</section>

<section class="services">
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
					$services_title_lowercase = strtolower( get_the_title() );
					$services_icon = html_entity_decode(str_replace( array(' '), array('_'), $services_title_lowercase));
					$services_icon_wash = str_replace('_&_', '_', $services_icon);
		?>

			<div class="col-md-4 col-sm-6">
				<div class="row">
					<a href="<?php the_permalink(); ?>">
						<div class="services-item relative">
							<div class="services-item-overlay-bg position absolute"></div>
							<div class="services-item-overlay absolute position section-half"></div>

							<div class="services-item-icon absolute">
								<span class="owl-icon icon-small owl-icon--<?php echo $services_icon  ?>_gold"></span>
							</div>

							<div class="services-item-text absolute">
								<h3 class="mb40"><?php the_title(); ?></h3>
								<div class="services-item-text-para">
									<p><?php the_excerpt(); ?></p>
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
		</div>
	</div>
</section>
<?php
	our_process('grey-light');
	get_started();
?>
<section class="case-studies">
	<div class="container">

	<?php
		$i = 1;
		$args = array(
			'post_type' => 'case-studies',
			'posts_per_page' => 2
		);

		$studies = new WP_Query($args);

		while ($studies->have_posts()) :
			$studies->the_post();
	?>

		<div class="row section">
			<div class="col-sm-5 col-sm-offset-1 <?php
				if ( $i % 2 === 0 ) {
				echo 'col-sm-push-6';
				} ?>">
				<div class="">
					<h2 class="mb40 text-blue-light"><?php the_title(); ?></h2>
					<p class="mb40">
						<?php the_excerpt(); ?>
					</p>
					<a href="<?php the_permalink(); ?>" class="btn btn-outline-orange">read more</a>
				</div>
			</div>
			<div class="col-sm-6 <?php
				if ( $i % 2 === 0 ) {
				echo 'col-sm-pull-5';
				} ?>">
				<div class="case-studies-bg full-width">
					<div class="case-studies-bg-overlay bg-cover absolute position" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
					<img class="img-responsive" >
				</div>

			</div>
		</div>

	<?php
		$i++;
		endwhile;
		wp_reset_postdata();
	?>

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
							<div class="fundamentals-item-icon mb20">
								<span class="icon-small owl-icon owl-icon--chess"></span>
							</div>
							<p class="uc bold">
								Strategic enough to handle your toughest projects
							</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="fundamentals-item">
							<div class="fundamentals-item-icon mb20">
								<span class="icon-small owl-icon owl-icon--slinky"></span>
							</div>
							<p class="uc bold">
								Flexible enough to tackle creative and quantitative work
							</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="fundamentals-item">
							<div class="fundamentals-item-icon mb20">
								<span class="icon-small owl-icon owl-icon--crossplatform"></span>
							</div>
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
