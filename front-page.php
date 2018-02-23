<?php
/**
 * Template Name: Home
*/
	get_header();

	$hero_header = get_field('header');
	$hero_paragraph = get_field('paragraph');

	$pillars_header = get_field('pillars_header');
	$pillars_subheader = get_field('pillars_subheader');

	$pillar_item_one_header = get_field('pillar_item_one_header');
	$pillar_item_one_paragraph = get_field('pillar_item_one_paragraph');

	$pillar_item_two_header = get_field('pillar_item_two_header');
	$pillar_item_two_paragraph = get_field('pillar_item_two_paragraph');

	$pillar_item_three_header = get_field('pillar_item_three_header');
	$pillar_item_three_paragraph = get_field('pillar_item_three_paragraph');

	$pillar_item_four_header = get_field('pillar_item_four_header');
	$pillar_item_four_paragraph = get_field('pillar_item_four_paragraph');

	$clients_header = get_field('clients_header');

	$services_header = get_field('services_header');
	$services_paragraph = get_field('services_paragraph');

	// $stats_number_one = get_field('stats_number_one');
	// $stats_title_one = get_field('stats_title_one');

	// $stats_number_two = get_field('stats_number_two');
	// $stats_title_two = get_field('stats_title_two');

	// $stats_number_three = get_field('stats_number_three');
	// $stats_title_three = get_field('stats_title_three');

	// $stats_number_four = get_field('stats_number_four');
	// $stats_title_four = get_field('stats_title_four');

	// $stats_number_five = get_field('stats_number_five');
	// $stats_title_five = get_field('stats_title_five');

	// $stats_number_six = get_field('stats_number_six');
	// $stats_title_six = get_field('stats_title_six');

?>

<header class="bg-blue-dark page-hero relative">
	<div class="absolute position page-hero-bg page-hero-bg-home parallax" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
	<div class="container relative">
		<div class="row">
			<div class="col-md-5 col-md-offset-1 col-sm-6 col-sm-offset-0">
				<div class="hero-inner">
					<h1 class="mb40 text-white"><?php echo $hero_header; ?></h1>
					<p class="mb40 text-white">
						<?php echo $hero_paragraph; ?>
					</p>
					<table width="100%">
						<tr>
							<td>
								<a href="#contact" class="btn btn-outline btn-outline-orange">contact us</a>
							</td>
							<td>
								<a href="/services" class="btn btn-solid btn-solid-orange">see all services</a>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</header>

<section class="section pillars">
	<div class="container text-center">
		<h2 class="mb20 text-blue-light">
			<?php echo $pillars_header; ?>
		</h2>
		<p class="mb40"><?php echo $pillars_subheader; ?></p>
		<div class="row">
			<?php

				$pillars = array(
					array(
						'key',
						$pillar_item_one_header,
						$pillar_item_one_paragraph
					),
					array(
						'lightbulb',
						$pillar_item_two_header,
						$pillar_item_two_paragraph
					),
					array(
						'lightning',
						$pillar_item_three_header,
						$pillar_item_three_paragraph
					),
					array(
						'diamond',
						$pillar_item_four_header,
						$pillar_item_four_paragraph
					)

				);

				foreach ( $pillars as $pillar ) :

					$icon = $pillar[0];
					$title = $pillar[1];
					$paragraph = $pillar[2];
			?>

			<div class="col-sm-3 col-xs-6">
				<div class="pillars-item mb40">
					<span class="icon-small owl-icon owl-icon--pillars-<?php echo $icon; ?>"></span>
					<h3 class="mb20 text-blue-dark"><?php echo $title; ?></h3>
					<p><?php echo $paragraph; ?></p>
				</div>
			</div>

			<?php
				endforeach;
			?>
		</div>
	</div>
</section>

<section class="section bg-blue-light clients relative">
	<div class="clients-bg position absolute bg-cover"></div>
	<div class="container text-center relative">
		<h2 class="mb40 text-white">
			<?php echo $clients_header; ?>
		</h2>
		<div class="row section-half">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="row">

				<?php
					$clients = array(
							'maven',
							'fond',
							'greenhouse'
					);

					foreach ( $clients as $client ) :
				?>

				<div class="col-sm-4">
					<div class="mb40">
						<img alt="<?php echo $client ?> logo" class="mb40" height="50" src="/wp-content/uploads/theme-graphics/<?php echo $client ?>-white.<?php if ($client == 'greenhouse') :
							echo 'svg';
						else:
							echo 'png';
						endif; ?>">
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

<section class="services">
	<div class="col-md-4">
		<div class="row relative">
			<div class="services-left-bg bg-cover absolute position"></div>
			<div class="relative bg services-left">
				<div class="col-sm-8 col-sm-offset-2">
					<h3 class="mb20 text-white"><?php echo $services_header; ?></h3>
					<p class="mb40 text-white"><?php echo $services_paragraph; ?></p>
					<a href="/services" class="btn btn-solid btn-solid-orange">SEE ALL SERVICES</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="col-md-8">
		<div class="row text-center">
			<?php
				$services = new WP_Query( array(
						'post_type' => 'services',
						'posts_per_page' => 6
					)
				);
				while ($services->have_posts()) :
						$services->the_post();
						$services_title_lowercase = strtolower(get_the_title());
						$services_icon = str_replace(' ', '_', $services_title_lowercase);
			?>
			<div class="col-md-4">
				<div class="row">
					<a href="<?php the_permalink(); ?>">
						<div class="services-item">
							<div class="services-item-inner relative">
								<span class="owl-icon icon-small owl-icon--<?php echo $services_icon  ?>_gold"></span>

								<h3><?php the_title(); ?></h3>
							</div>
							<div class="services-item-overlay-bg position absolute"></div>
							<div class="services-item-overlay absolute position section-half">
								<div class="col-sm-12">
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
	<div class="clearfix"></div>
</section>

<?php
	get_started();
	our_process();
?>
<!-- <section class="specs">
	<div class="container-fluid">
		<div class="row">

		<?php
			// $specs = array(
			// 	array(
			// 		$stats_number_one,
			// 		'purple',
			// 		$stats_title_one
			// 	),
			// 	array(
			// 		$stats_number_two,
			// 		'blue-dark',
			// 		$stats_title_two
			// 	),
			// 	array(
			// 		$stats_number_three,
			// 		'blue-light',
			// 		$stats_title_three
			// 	),
			// 	array(
			// 		$stats_number_four,
			// 		'orange',
			// 		$stats_title_four
			// 	),
			// 	array(
			// 		$stats_number_five,
			// 		'orange-light',
			// 		$stats_title_five
			// 	),
			// 	array(
			// 		$stats_number_six,
			// 		'grey',
			// 		$stats_title_six
			// 	)
			// );

			// foreach ( $specs as $spec ) :
			// 	$number = $spec[0];
			// 	$bg = $spec[1];
			// 	$title = $spec[2];
		?>
			<div class="col-md-2 col-sm-4 col-xs-6">
				<div class="row">
					<div class="specs-box text-center bg bg-<?php echo $bg ?> section-half">
						<h3 class="mb20 text-white"><?php // echo $number ?></h3>
						<span class="ls uc text-white"><?php // echo $title; ?></span>
					</div>
				</div>
			</div>

		<?php
			// endforeach;
		?>
		</div>
	</div>
</section> -->


<?php
	get_template_part('partials/quotes');
	contact_form('blue-light');
	get_footer();
?>