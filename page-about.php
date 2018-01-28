<?php
/**
 * Template Name: About
 */
get_header();
page_hero(
		array(
			'type' => strtolower( str_replace(' ', '-', get_the_title()) ),
			'title' => get_the_title(),
			'subtitle' => 'Our Mission is to help companies make smarter business decisions so they can win in their markets.',
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
				<h2 class="mb40 text-white">Product-Driven, People-Centric</h2>
				<div class="col-sm-6">
					<div class="row">

						<p>
							Our product pioneering offers our clients a unique advantage in the world of digital transformation across marketing, digital, and strategy consulting. We know that by helping clients make informed decisions prior to execution, they accelerate the perceived value of their products to their customers and can evolve quickly in a fast-paced world.
						</p>
						<p>
							This requires more than only focusing on operation efficiencies or just considering consumer loyalty. We believe it takes a team who can offer a integrated view to create mutual advantage and help alleviate the simultaneous struggle for savings, growth, and relevance in today’s market.
						</p>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="row">
						<p>
							We help clients thrive in this new world because we’ve been helping to create it, both professionally and personally. Our customer-centric view and ability to reimagine offer practical and significant advantages in this rapidly changing market.
						</p>
						<p>
							who can offer a integrated view to create mutual advantage and help alleviate the simultaneous struggle for savings, growth, and relevance in today’s market.

							We help clients thrive in this new world because we’ve been helping to create it, both professionally and personally. Our customer-centric view and ability to reimagine offer practical and significant advantages in this rapidly changing market.
						</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<section class="section text-center about-us-success relative text-white">
	<div class="absolute position page-hero-bg about-us-success-bg"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h2 class="mb40">
					“Success is informed by customers’ perceptions through data and proprietary methods inspired by four consumer-centric principals.”
				</h2>
				<h5 class="ls uc">
					michael stapleton
				</h5>
				<h6 class="ls uc">
					ceo - founder
				</h6>
			</div>
		</div>
	</div>
</section>
<?php our_process(); ?>
<section class="about-us-clients relative bg-orange">
	<div class="absolute position page-hero-bg about-us-clients-bg"></div>
	<div class="relative">
		<div class="row text-center about-us-clients-section">
			<h2 class="text-white subheader">Clients</h2>
		</div>
		<div class="row text-center">
			<div class="col-sm-4">
				<div class="row">
					<div class="about-us-clients-col about-us-clients-section">
						<img height="58" src="/wp-content/uploads/theme-graphics/maven-logo.png">
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="row">
					<div class="about-us-clients-col about-us-clients-section">
						<img height="58" src="/wp-content/uploads/theme-graphics/fond-logo.png">
					</div>
				</div>

			</div>
			<div class="col-sm-4">
				<div class="row">
					<div class="about-us-clients-col about-us-clients-section">
						<img height="58" src="/wp-content/uploads/theme-graphics/greenhouse-logo.png">
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<?php get_started('dark'); ?>
<section class="about-us-consultants section bg-grey-light text-blue-light">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="row mb40">
					<h2>Featured Consultants</h2>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="row">
							<div class="about-us-consultants-name active">
								<p>
									<a href="" class="bold">
										Michael Stapleton
									</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="row">
							<div class="about-us-consultants-name">
								<p>
									<a href="" class="bold">
										Ryan Helmstetler
									</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="row">
							<div class="about-us-consultants-name">
								<p>
									<a href="" class="bold">
										Darby Williams
									</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about-us-consultants-profile">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-half"></div>
				<div class="row relative">
					<div class="col-md-7 col-md-push-5">
						<div class="about-us-consultants-profile-text">
							<h2 class="mb20 text-blue-dark">Michael Stapleton</h2>
							<h3 class="mb40 text-orange bold">CEO &amp; Founder</h3>
							<a href="#" class="btn btn-outline btn-outline-orange mb40">contact michael</a>
							<div class="col-md-9">
								<div class="row relative">
									<div class="pb40 about-us-consultants-profile-text-bio">
										<p class="mb20">Michael Stapleton is the Founder and CEO of Stapleton Consulting. He started the firm when he saw: 1) How many companies focused their marketing on promotional activities without really understanding their go-to-market strategy, and 2) How many agencies were set up to support those promotional activities. Stapleton Consulting was founded on the belief that demand generation becomes simple when you have a strong foundational strategy in place.

										<p class="mb40">Before founding Stapleton Consulting, Michael was the VP of Marketing at Fond (formerly AnyPerk), where he was responsible for shaping go-to-market strategy, building brand awareness, and driving growth. Prior to Fond, he was the VP of Marketing at Gild (acquired by Citadel). Michael graduated Phi Beta Kappa from Reed College with a B.A. in English. An active alumnus, he leads alumni development for the college as chair of Alumni Fundraising for Reed.</p>

									</div>
									<div class="about-us-consultants-profile-text-read-more absolute">
										<p class="read-more uc ls"><a href="" class="text-orange">read more <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a></p>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="about-us-consultants-profile-img">
						<div class="col-md-5">
							<img class="img-responsive" src="/wp-content/uploads/theme-graphics/michael-stapleton.png">
						</div>
						<div class="about-us-consultants-profile-img-gradient absolute position"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about-us-consultants-profile bg-grey-light">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-half"></div>
				<div class="row relative">
					<div class="col-md-7 col-md-push-1">
						<div class="about-us-consultants-profile-text">
							<h2 class="mb20 text-blue-dark">Ryan Helmstetler</h2>
							<h3 class="mb40 text-orange bold">Consultant</h3>
							<a href="#" class="btn btn-outline btn-outline-orange mb40">contact ryan</a>
							<div class="col-md-9">
								<div class="row">
									<div class="pb40">
										<p class="mb40">Ryan Helmstetler is an award‐winning marketing professional with over 13 years of marketing experience. Ryan's client roster has ranged from startups to Fortune 100 companies. As a marketing leader, Ryan has been a guest lecturer at multiple MBA programs ...</p>
										<p class="read-more uc ls"><a href="" class="text-orange">read more <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a></p>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="about-us-consultants-profile-img">
						<div class="col-md-5">
							<img class="img-responsive center-block" src="/wp-content/uploads/theme-graphics/ryan-helmstetler.png">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about-us-consultants-profile">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-half"></div>
				<div class="row relative">
					<div class="col-md-7 col-md-push-5">
						<div class="about-us-consultants-profile-text">
							<h2 class="mb20 text-blue-dark">Darby Williams</h2>
							<h3 class="mb40 text-orange bold">Consultant</h3>
							<a href="#" class="btn btn-outline btn-outline-orange mb40">contact darby</a>
							<div class="col-md-9">
								<div class="row">
									<div class="pb40">
										<p class="mb40">Michael Stapleton is the Founder and CEO of Stapleton Consulting. He started the firm when he saw: 1) How many companies focused their marketing on promotional activities without really understanding their go-to-market strategy, and 2) How many agencies were set up to support those promotional activities ...</p>
										<p class="read-more uc ls"><a href="" class="text-orange">read more <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a></p>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="about-us-consultants-profile-img">
						<div class="col-md-5">
							<img class="img-responsive center-block" src="/wp-content/uploads/theme-graphics/darby-williams.png">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about-us-articles bg-orange section relative">
	<div class="about-us-articles-bg bg-cover position absolute"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="row">
					<h2 class="text-white mb40">Articles</h2>
				</div>
				<div class="row">
				<?php

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
									<div class="about-us-article mb40">
										<a class="text-white bold" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
					endwhile;
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
	get_template_part('partials/quotes');
	contact_form('blue-light');
	get_footer();
?>