<?php
/**
 * Template Name: Articles Archive
 */
get_header();
?>

<header class="articles-archive-hero bg-blue-light relative page-hero">
	<div class="position absolute articles-archive-hero-bg bg-cover"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<h1 class="mb40 text-white"><?php the_field('header'); ?></h1>
				<p class="mb20 text-white"><?php the_field('paragraph'); ?></p>
				<a href="#contact" class="btn btn-outline btn-outline-orange">contact us</a>
			</div>
		</div>
	</div>
</header>

<section class="section-half bg-orange articles-archive-categories">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-2">
						<div class="articles-archive-categories-view">
							View All
						</div>
					</div>

				<?php

					$arr = array(
						'type' => 'articles',
						'orderby' => 'name',
						'order'	=> 'DESC',
						'hide_empty' => 1
					);
					$categories = get_categories($arr);

					foreach ($categories as $category) :

				?>
					<div class="col-sm-2">
						<div class="row">
							<div class="articles-archive-categories-item">

								<a href="<?php echo get_category_link( $category->term_id ) ?>" class="text-blue-dark">
									<?php echo $category->name; ?>
								</a>

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

	$arr = array(
		'post_type' => 'articles',
		'posts_per_page' => 1
	);

	$articles = new WP_Query( $arr );

	while ($articles->have_posts()) :
		$articles->the_post();

		$categories = get_the_category();

		$category = $categories[0]->name;

?>

<section>
	<div class="row">
		<div class="col-sm-6">
			<div class="row">
				<div class="featured-section">
					<div class="featured-section-inner featured-section-inner-single">
						<div class="articles-archive-half-left-bg bg-cover position absolute" <?php
							if (has_post_thumbnail()) :
						?>
							style="background-image: url(<?php the_post_thumbnail_url(); ?>)"
						<?php

							endif;
						?>></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 relative">
			<div class="row">
				<div class="featured-section">
					<div class="featured-section-inner featured-section-inner-single">
						<div class="col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
							<div class="row">
								<span class="ls uc text-orange bold">
									<?php echo $category; ?>
								</span>
								<h2 class="mb20 mt20"><?php the_title(); ?></h2>
								<p class="mb20"><?php the_excerpt(); ?></p>
								<a href="<?php the_permalink(); ?>" class="ls uc text-orange">read more</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="triangle triangle-left absolute"></div>
		</div>
	</div>
</section>

<?php
	endwhile;
	wp_reset_postdata();



	$arr = array(
		'post_type' => 'articles',
		'posts_per_page' => 1,
		'offset' => 1
	);

	$articles = new WP_Query( $arr );

	while ($articles->have_posts()) :
		$articles->the_post();

		$categories = get_the_category();

		$category = $categories[0]->name;
?>

<section class="featured-post relative">
	<div class="featured-post-bg absolute position bg-cover"
		<?php
			if (has_post_thumbnail()) :
		?>
			style="background-image: url(<?php the_post_thumbnail_url(); ?>)"
		<?php

			endif;
		?>></div>
	<div class="bg-orange-opaque absolute position featured-post-bg-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-1">
				<span class="uc ls text-white bold"><?php echo $category; ?></span>
				<h2 class="text-white mt20 mb40 subheader"><?php the_title(); ?></h2>
				<p class="text-white mb40"><?php the_excerpt(); ?></p>
				<a href="<?php the_permalink(); ?>" class="ls uc text-white">read more</a>
			</div>
		</div>
	</div>
</section>

<?php
	endwhile;
	wp_reset_postdata();

	$arr = array(
		'post_type' => 'articles',
		'posts_per_page' => 1,
		'offset' => 2
	);

	$articles = new WP_Query( $arr );

	while ($articles->have_posts()) :
		$articles->the_post();

		$categories = get_the_category();

		$category = $categories[0]->name;
?>

<section>
	<div class="row">
		<div class="col-sm-6 relative">
			<div class="row">
				<div class="col-md-10 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
					<div class="featured-section">
						<div class="featured-section-inner featured-section-inner-single">
							<span class="ls uc text-orange"><?php echo $category; ?></span>
							<h2 class="mb40 mt20"><?php the_title(); ?></h2>
							<p class="mb40"><?php the_excerpt(); ?></p>
							<a href="<?php the_permalink(); ?>" class="ls uc text-orange">read more</a>
						</div>
					</div>
				</div>
			</div>
			<div class="triangle triangle-right absolute"></div>
		</div>
		<div class="col-sm-6">
			<div class="row relative">
				<div class="featured-section">
					<div class="featured-section-inner featured-section-inner-single">
						<div class="overlay-bg-half bg-cover position absolute"
							<?php
								if (has_post_thumbnail()) :
							?>
								style="background-image: url(<?php the_post_thumbnail_url(); ?>)"
							<?php
								endif;
							?>></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
	endwhile;
	wp_reset_postdata();

?>

<section>
	<div class="row">
		<div class="col-sm-6">
			<div class="row">
				<div class="featured-section">

					<?php
						$arr = array(
							'post_type' => 'articles',
							'posts_per_page' => 1,
							'offset' => 3
						);

						$articles = new WP_Query( $arr );

						while ($articles->have_posts()) :
							$articles->the_post();

							$categories = get_the_category();

							$category = $categories[0]->name;
					?>

					<div class="featured-section-inner featured-section-inner-double">
						<div class="articles-archive-featured-double-bg absolute position bg-cover"
							<?php
								if (has_post_thumbnail()) :
							?>
								style="background-image: url(<?php the_post_thumbnail_url(); ?>)"
							<?php
								endif;
							?>></div>
						<div class="overlay-bg absolute position"></div>
						<div class="col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
							<div class="">
								<span class="text-white ls uc bold"><?php echo $category; ?></span>
								<h2 class="text-white subheader mt20 mb40"><?php the_title(); ?></h2>
								<p class="mb40 text-white"><?php the_excerpt(); ?></p>
								<a href="<?php the_permalink(); ?>" class="ls uc text-white">read more</a>
							</div>
						</div>
					</div>

					<?php
						endwhile;
						wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="row">

			<?php
				$arr = array(
					'post_type' => 'articles',
					'posts_per_page' => 1,
					'offset' => 4
				);

				$articles = new WP_Query( $arr );

				while ($articles->have_posts()) :
					$articles->the_post();

					$categories = get_the_category();
					$category = $categories[0]->name;
			?>

				<div class="col-sm-6">
					<div class="row">
						<div class="featured-section">
							<div class="featured-section-inner featured-section-inner-single">
								<div class="col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
									<div class="row">
										<span class="text-orange bold ls uc"><?php echo $category; ?></span>
										<h2 class="mt20 mb40"><?php the_title(); ?></h2>
										<a href="<?php the_permalink(); ?>" class="bold ls uc text-orange">read more</a>
									</div>
								</div>
							</div>
						</div>
						<div class="triangle triangle-right absolute"></div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="row">
						<div class="featured-section">
							<div class="featured-section-inner featured-section-inner-single">
								<div class="articles-archive-featured-single-bg absolute position bg-cover"

								<?php
									if (has_post_thumbnail()) :
								?>
									style="background-image: url(<?php the_post_thumbnail_url(); ?>)"
								<?php
									endif;
								?>></div>
							</div>
						</div>
					</div>
				</div>

				<?php
					endwhile;
					wp_reset_postdata();
				?>


			</div>
			<div class="row bg-orange">
				<div class="featured-section">
					<div class="featured-section-inner featured-section-inner-single">
						<div class="col-xs-10 col-xs-offset-1">
							<h2 class="text-white subheader mb40">Get in Touch</h2>
							<a href="#contact" class="btn btn-outline btn-outline-white">contact us</a>
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