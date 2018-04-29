<?php
/**
 * The template for displaying Articles
*/
get_header();

while (have_posts()) :
	the_post();

	// $category = get_the_category();

	// $cat_name = $category[0]->cat_name;

	// $author_name = get_the_author();

	// $date = get_the_date();

?>

<header class="article-hero page-hero relative">
	<div class="position absolute article-hero-bg bg-cover parallax" style="background-image: url(
		<?php
			if ( has_post_thumbnail() ) :
				the_post_thumbnail_url();
			else :
				echo '/wp-content/uploads/theme-graphics/articles-hero-test.jpg';
			endif;

		?>);"></div>
	<div class="container relative">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<h1 class="text-white mb20"><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</header>
<section class="section article-body relative">
	<?php the_content(); ?>

</section>

<section class="bg-orange section-half">
	<div class="text-center">
		<h2 class="text-white mb40">Recent Articles</h2>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="row">
					<div class="post-nav ls uc">
						<?php previous_post_link('%link','previous'); ?>
					</div>

				</div>
			</div>
			<div class="col-sm-4">
				<div class="row text-center">
					<div class="post-nav">
						<a href="<?php echo get_post_type_archive_link('articles'); ?>">View All</a>
					</div>

				</div>
			</div>
			<div class="col-sm-4">
				<div class="row text-right">
					<div class="post-nav ls uc">
						<?php next_post_link('%link','next'); ?>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<?php
	endwhile;

	$arr = array(
		'post_type' => 'articles',
		'posts_per_page' => 1,
		'post__not_in'	=> array($post->ID)
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
				<div class="col-md-11 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
					<div class="featured-section">
						<div class="featured-section-inner featured-section-inner-single">
							<span class="ls uc text-orange"><?php echo $category; ?></span>
							<h2 class="mb20 mt20"><?php the_title(); ?></h2>
							<p class="mb20"><?php the_excerpt(); ?></p>
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

			<?php
				$arr = array(
					'post_type' => 'articles',
					'posts_per_page' => 1,
					'offset' => 1,
					'post__not_in'	=> array($post->ID)
				);

				$articles = new WP_Query( $arr );

				while ($articles->have_posts()) :
					$articles->the_post();

					$categories = get_the_category();

					$category = $categories[0]->name;
			?>

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
						<div class="overlay-bg position absolute"></div>
						<div class="relative">
							<div class="col-md-10 col-md-offset-1">
								<span class="ls uc text-orange bold">
									<?php echo $category; ?>
								</span>
								<h2 class="mb40 mt20 text-white"><?php the_title(); ?></h2>
								<a href="<?php the_permalink(); ?>" class="ls uc text-orange">read more</a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			<?php
				endwhile;
				wp_reset_postdata();
			?>
			</div>
		</div>

		<?php
			$arr = array(
				'post_type' => 'articles',
				'posts_per_page' => 1,
				'offset' => 2,
				'post__not_in'	=> array($post->ID)
			);

			$articles = new WP_Query( $arr );

			while ($articles->have_posts()) :
				$articles->the_post();

				$categories = get_the_category();

				$category = $categories[0]->name;
		?>
		<div class="col-sm-3 relative">
			<div class="row">
				<div class="featured-section">
					<div class="featured-section-inner featured-section-inner-single">
						<div class="col-md-10 col-md-offset-1">
							<div class="row">
								<span class="ls uc text-orange"><?php echo $category; ?></span>
								<h2 class="mt20 mb40"><?php the_title(); ?></h2>
								<a href="<?php the_permalink() ?>" class="ls uc text-orange">read more</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="triangle triangle-right absolute"></div>
		</div>
		<div class="col-sm-3">
			<div class="row">
				<div class="featured-section">
					<div class="featured-section-inner featured-section-inner-single">
						<div class="overlay-bg-quarter position absolute bg-cover"
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
</section>
<?php
	get_footer();
?>