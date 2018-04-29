<?php
/**
 * Default Page Template
 */
get_header();

?>
<section class="section-half bg-blue-dark"></section>
<section class="section">
	<div class="row">
		<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
		?>
			<div class="container">
		 		<div class="row">
		 			<div class="col-sm-8 col-sm-offset-2">
						<h1 class="mb40"><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
		<?php
	 				the_content();
	 			endwhile;
	 		endif;
	 	?>
	 	<div class="container">
	 		<div class="row">
	 			<div class="col-sm-8 col-sm-offset-2">
	 				<p class="mb20">Last edited on <?php the_modified_time('F jS, Y');  ?></p>
	 			</div>
	 		</div>
	 	</div>
	</div>
</section>

<?php
	get_footer();
?>