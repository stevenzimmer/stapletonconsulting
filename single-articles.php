<?php
/**
 * The template for displaying Articles
*/
get_header();

while (have_posts()) :
	the_post();

?>

<header class="bg-orange page-hero">
	<div class="container">
		<h1><?php the_title(); ?></h1>
	</div>
</header>

<section class="section">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<?php the_content(); ?>
			</div>
			<div class="col-sm-4">
				<!-- Sidebar -->
			</div>
		</div>
	</div>

</section>

<?php
endwhile;
get_footer(); ?>