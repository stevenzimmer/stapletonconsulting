<?php

	/**
	 * Template Name: Services Archive
	 */

	// Services Archive
	get_header();

?>

<section class="archive-services-hero bg-blue-dark relative">
	<div class="archive-services-hero-bg bg-cover position absolute parallax"></div>
	<div class="archive-services-hero-text text-center section">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<h1 class="text-white mb40"><?php the_field('header'); ?></h1>
					<p class="text-white"><?php the_field('paragraph'); ?></p>
				</div>
			</div>
		</div>
	</div>

	<div class="archive-services-grid">
		<div class="container services-container bg-white relative">
			<div class="row text-center">
			<?php

				$i = 1;

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

						$bg = 'white';

						if ($i % 2 == 0) :
							$bg = 'grey-light';
						endif;
			?>

				<div class="col-md-4 col-sm-6">
					<div class="row">
						<a href="<?php the_permalink(); ?>">
							<div class="services-item relative bg-<?php echo $bg; ?>">
								<div class="services-item-overlay-bg position absolute"></div>
								<div class="services-item-overlay absolute position section-half"></div>

								<div class="services-item-icon absolute">
									<div class="">
										<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
											<div class="">
												<p><span class="owl-icon icon-small owl-icon--<?php echo $services_icon_wash; ?>_gold"></span></p>
											</div>
										</div>
										<div class="clearfix"></div>

									</div>
								</div>

								<div class="services-item-text absolute">
									<h3 class="mb20"><?php the_title(); ?></h3>
									<div class="services-item-text-para">
										<p><?php the_excerpt(); ?></p>
									</div>
									<div class="services-item-text-arrow text-left">
										<p><img width="30" src="/wp-content/uploads/theme-graphics/arrow-right.png"></p>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			<?php
				$i++;
				endwhile;
				wp_reset_postdata();
			?>
			</div>
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

			$thumbnail = get_field('case_study_thumbnail');
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
					<div class="case-studies-bg-overlay bg-cover absolute position" style="background-image: url(<?php

							if (!empty( $thumbnail) ) :
								echo $thumbnail;
							else :
								the_post_thumbnail_url();
							endif;

						?>)"></div>
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
					<h2 class="mb40 text-blue-light"><?php the_field('fundamentals_header'); ?></h2>
					<p class="mb40"><?php the_field('fundamentals_paragraph'); ?></p>

					<p>We are product marketing consultants that are:</p>
				</div>
				<div class="row">

				<?php
					$fundamentals = array(
						array(
							'chess',
							get_field('chess_description')

						),
						array(
							'slinky',
							get_field('slinky_description')

						),
						array(
							'crossplatform',
							get_field('crossplatform_description')
						),
					);

					foreach ($fundamentals as $fundamental ) :
				?>
					<div class="col-sm-4">
						<div class="row">
							<div class="fundamentals-item">
								<div class="col-sm-6 col-sm-offset-3">
									<div class="fundamentals-item-icon mb20">

										<span class="icon-small owl-icon owl-icon--<?php echo $fundamental[0] ?>"></span>
									</div>
								</div>
								<p class="uc bold">
									<?php echo $fundamental[1] ?>
								</p>
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
	contact_form('blue-light');
	get_footer();
?>
