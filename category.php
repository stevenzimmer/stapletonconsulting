<?php
	// Categories page
	get_header();

?>

<header class="articles-archive-hero bg-blue-light relative page-hero">
	<div class="position absolute articles-archive-hero-bg bg-cover"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<h1 class="mb40 text-white"><?php echo single_cat_title( '', false ); ?> Articles</h1>

				<p class="mb20 text-white">Our personal insight on stuff and things.</p>
				<a href="#contact" class="btn btn-outline btn-outline-orange">contact us</a>
			</div>
		</div>
	</div>
</header>

<?php

	$arr = array(
		'post_type' => 'articles',
		'posts_per_page' => -1,
		'category_name' => single_cat_title( '', false )
	);

	$articles = new WP_Query( $arr );

	while ($articles->have_posts()) :
		$articles->the_post();
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
	contact_form('blue-light');
	get_footer();
?>