<?php
// Articles Archive page
get_header();
?>

<header class="page-hero bg-orange">
	<div class="container">
		<h1>Product Marketing Articles</h1>
	</div>

</header>
<?php
if ( have_posts() ) :
	while(have_posts()) :
		the_post();
?>

<section class="section">
	<div class="container">
		<div class="mb40">
			<h2><?php the_title() ?></h2>
		</div>
		<div class="mb40">
			<?php the_excerpt(); ?>
		</div>
		<div class="mb40">
			<p><a href="<?php the_permalink() ?>">Read More</a></p>
		</div>
	</div>

</section>

<?php
	endwhile;
	endif;
	get_footer();
?>