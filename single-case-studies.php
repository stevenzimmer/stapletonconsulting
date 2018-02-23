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
		<h2 class="text-white mb40">Related Articles</h2>
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
?>

<section>
	<div class="row">
		<div class="col-sm-6 relative">
			<div class="row">
				<div class="col-md-6 col-md-offset-4 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
					<div class="featured-section">
						<div class="featured-section-inner featured-section-inner-single">
							<span class="ls uc text-orange">subject</span>
							<h2 class="mb40 mt20">1/2 page right</h2>
							<p class="mb40">Few things are as far-reaching in their implications as a well-crafted positioning statement.</p>
							<a href="#" class="ls uc text-orange">read more</a>
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
						<div class="overlay-bg-half bg-cover position absolute"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="row">
		<div class="col-sm-6">
			<div class="row">
				<div class="featured-section">
					<div class="featured-section-inner featured-section-inner-single">
						<div class="overlay-bg-half bg-cover position absolute"></div>
						<div class="overlay-bg position absolute"></div>
						<div class="relative">
							<div class="col-md-8 col-md-offset-4">
						<span class="text-white ls uc">subject</span>
						<h2 class="text-white mb40 mt20">1/4 page overlay</h2>
						<a href="" class="text-white ls uc">read more</a>
					</div>
					<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-3 relative">
			<div class="row">
				<div class="featured-section">
					<div class="featured-section-inner featured-section-inner-single">
						<div class="col-md-7 col-md-offset-3">
							<div class="row">
								<span class="ls uc text-orange">subject</span>
								<h2 class="mt20 mb40">1/4 Page Right</h2>
								<a href="" class="ls uc text-orange">read more</a>
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
						<div class="overlay-bg-quarter position absolute bg-cover"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="newsletter bg-blue-light section contact-form">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<div class="row">

					<h2 class="text-white mb40">
						Subscribe to Our Newsletter
					</h2>
					<p class="text-white mb40">
						Newsletter sent bi-weekly. We respect your privacy and will not sell your information. By clicking ‘submit’, you are consenting to our <a href="#" class="text-white">Terms &amp; Conditions</a>.
					</p>
					<form class="form-horizontal sc-form sc-form-blue-light" id="sc_newsletter">
						<div class="col-sm-4">
							<div class="form-group">
								<input name="first_name" type="text" class="form-control" id="first_name" placeholder="First Name" required>
							</div>
						</div>
						<div class="col-sm-4 col-sm-offset-1">
							<div class="form-group">
								<input name="last_name" type="text" class="form-control" id="last_name" placeholder="Last Name">
							</div>
						</div>

						<div class="clearfix"></div>

						<div class="col-sm-9">
							<div class="form-group">
								<input name="email" type="email" class="form-control" id="email" placeholder="Email">
							</div>
						</div>

						<div class="col-sm-2 col-sm-offset-1">
							<div class="sc-form-button">
								<div class="sc-form-button-align">
									<input type="submit" name="sc_form_button" id="sc_form_button" class="btn btn-outline
									<?php
										if ($color !== 'orange') :
											echo 'btn-outline-orange';
										endif;
									?>">
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</form>

				</div>
			</div>
		</div>
	</div>
</section>
<?php
	get_footer();
?>