<?php
/**
 * Template Name: About
 */
get_header();
page_hero(
		array(
			'type' => strtolower( str_replace(' ', '-', get_the_title()) ),
			'title' => get_field('header'),
			'subtitle' => get_field('paragraph'),
			'ctas' => array(
				array(
					'text' => 'contact us',
					'btn_color' => 'orange',
					'link' => '#contact'
				)
			)
		)
	);
?>
<section class="section bg-orange about-us-product relative">
	<div class="absolute position about-us-product-bg bg-cover"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<h2 class="mb40 text-white"><?php the_field('product_driven_title') ?></h2>
				<div class="col-sm-5">
					<div class="row">
						<?php the_field('product_driven_left'); ?>
					</div>
				</div>
				<div class="col-sm-5 col-sm-offset-1">
					<div class="row">
						<?php the_field('product_driven_right'); ?>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<section class="section text-center about-us-success relative text-white bg-blue-dark">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h2 class="mb40">
					<?php the_field('quote_paragraph'); ?>
				</h2>
				<h5 class="ls uc">
					<?php the_field('quote_name'); ?>
				</h5>
				<h6 class="ls uc">
					<?php the_field('quote_title'); ?>
				</h6>
			</div>
		</div>
	</div>
</section>

<section class="section bg-blue-light clients relative">
	<div class="clients-bg position absolute bg-cover"></div>
	<div class="container text-center relative">
		<h2 class="mb40 text-white">
			Some of our clients
		</h2>
		<div class="row section-half">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="row">

				<?php

					$args = array(
						'post_type' => 'case-studies',
						'posts_per_page' => 3
					);

					$clients = new WP_Query( $args );

					while ( $clients->have_posts() ) :
						$clients->the_post();
				?>

					<div class="col-sm-4">
						<div class="mb40 clients-logo" data-bg="<?php the_post_thumbnail_url(); ?>">
							<a href="<?php the_permalink(); ?>">
								<img alt="<?php the_title() ?> logo" class="mb40" height="50" src="<?php echo get_field('client_logo_white'); ?>">
							</a>
						</div>
					</div>

				<?php
					endwhile;
					wp_reset_postdata();
				?>

				</div>
			</div>

		</div>
	</div>
</section>

<?php


	our_process();
	get_started('light');



	$arr = array(
		'post_type' => 'consultants',
		'posts_per_page' => -1,
		'order' => 'ASC'
	);

	$leaders = new WP_Query( $arr );

	$i = 1;

	while ($leaders->have_posts()) :
		$leaders->the_post();

		$content = get_the_content();

		$parts = explode('</p>', $content);

		$count = count($parts);

		$name = explode(' ', get_the_title());
		$f_name = lcfirst($name[0]);

		$facebook = get_field('consultant_facebook');
		$twitter = get_field('consultant_twitter');
		$linkedin = get_field('consultant_linkedin');
		$email = get_field('consultant_email');

		$bg = '';
		$push = '';

		if ( $i % 2 == 0 ) :

			$bg = 'grey-light';
			$push = 1;

		else :


			$push = 5;

		endif;

?>

<section class="about-us-consultants-profile bg-<?php $bg; ?>">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-half"></div>
				<div class="row relative">
					<div class="col-md-7 col-md-push-<?php echo $push; ?>">
						<div class="about-us-consultants-profile-text">
							<h2 class="mb20 text-blue-dark"><?php the_title(); ?></h2>
							<h3 class="mb40 text-orange bold"><?php the_excerpt(); ?></h3>

							<div class="row">
								<div class="col-sm-4">
									<div class="row">
										<a href="mailto:<?php echo $email ?>" class="btn btn-outline btn-outline-orange mb40">contact <?php echo $f_name; ?></a>
									</div>

								</div>

								<div class="col-sm-8">
									<div class="row">

										<div class="col-sm-3 text-center">
											<div class="social-icon">
												<a href="<?php echo $twitter ?>">
													<span class="icon-small owl-icon owl-icon--twitter"></span>
												</a>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="social-icon">
												<a href="<?php echo $linkedin ?>">
													<span class="icon-small owl-icon owl-icon--linkedin"></span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-9">
								<div class="row">
									<div class="pb40 about-us-consultants-profile-text-bio">

									<?php

										$j = 0;
										$intro = '';
										$content = '';

										foreach ($parts as $part) :

											if ($j == 0) :

												$intro = $part;

											else :

												$content .= $part;
											endif;

										$j++;
										endforeach;

									?>
										 <div class="mb40"><?php echo $intro; ?></div>


										<div class="collapse" id="<?php echo $f_name; ?>">

											<div class="mb40">
												<?php echo $content; ?>
											</div>

										</div>

									</div>
									<div class="about-us-consultants-profile-text-read-more absolute">
										<p class="read-more uc ls"><a data-toggle="collapse" data-target="#<?php echo $f_name; ?>" class="text-orange">read more <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a></p>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="about-us-consultants-profile-img">
						<div class="col-md-5">
							<img class="img-responsive center-block" src="<?php the_post_thumbnail_url(); ?>">
						</div>
						<div class="about-us-consultants-profile-img-gradient absolute position"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
	$i++;
	endwhile;
	wp_reset_postdata();
?>

<section class="about-us-articles bg-orange section relative">
	<div class="about-us-articles-bg bg-cover position absolute"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="row">
					<h2 class="text-white mb40">Recent Articles</h2>
				</div>
				<div class="row">
				<?php

					$i = 1;

					$articles = new WP_Query(
						array(
							'post_type' => 'articles',
							'posts_per_page' => 4
						)
					);

					while ( $articles->have_posts() ) :
						$articles->the_post();
				?>
					<div class="col-md-6">
						<div class="row">
							<div class="col-sm-10">
								<div class="row">
									<div class="about-us-article mb40" data-bg="<?php the_post_thumbnail_url(); ?>">
										<a class="text-white bold" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<?php if ( $i % 2 == 0 ): ?>
						<div class="clearfix"></div>
					<?php endif ?>
				<?php
					$i++;
					endwhile;
					wp_reset_postdata();
				?>
				</div>
				<div class="row relative">
					<div class="about-us-articles-btn">
						<a href="<?php echo get_post_type_archive_link('articles') ?>" class="btn btn-outline btn-outline-white">see all</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
	quotes();
	contact_form('blue-light');
	get_footer();
?>