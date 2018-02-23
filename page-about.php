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
				<div class="col-sm-5">
					<div class="row">
						<p class="mb20">
							Our product pioneering offers our clients a unique advantage in the world of digital transformation across marketing, digital, and strategy consulting. We know that by helping clients make informed decisions prior to execution, they accelerate the perceived value of their products to their customers and can evolve quickly in a fast-paced world.
						</p>
						<p>
							This requires more than only focusing on operation efficiencies or just considering consumer loyalty. We believe it takes a team who can offer a integrated view to create mutual advantage and help alleviate the simultaneous struggle for savings, growth, and relevance in today’s market.
						</p>
					</div>
				</div>
				<div class="col-sm-5 col-sm-offset-1">
					<div class="row">
						<p class="mb20">
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


<?php get_started('light'); ?>

<section class="about-us-consultants-profile">
	<div class="container">
		<div class="row section">
			<div class="text-center text-blue-dark">
				<h2>Featured Consultants</h2>
			</div>
		</div>
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

										<div class="collapse" id="michael">
											<p>Before founding Stapleton Consulting, Michael was the VP of Marketing at Fond (formerly AnyPerk), where he was responsible for shaping go-to-market strategy, building brand awareness, and driving growth. Prior to Fond, he was the VP of Marketing at Gild (acquired by Citadel). Michael graduated Phi Beta Kappa from Reed College with a B.A. in English. An active alumnus, he leads alumni development for the college as chair of Alumni Fundraising for Reed.</p>
										</div>
									</div>
									<div class="about-us-consultants-profile-text-read-more absolute">
										<p class="read-more uc ls"><a data-toggle="collapse" data-target="#michael" class="text-orange">read more <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a></p>
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
									<div class="pb40 about-us-consultants-profile-text-bio">
										<p class="mb40">Ryan Helmstetler is an award‐winning marketing professional with over 13 years of marketing experience. Ryan's client roster has ranged from startups to Fortune 100 companies. As a marketing leader, Ryan has been a guest lecturer at multiple MBA programs, including Boston University, the University of North Carolina at Chapel Hill, and Wake Forest University. Ryan is credited with creating some of the most innovative digital marketing campaigns such as the first Facebook sample engagement ad.</p>

										<div class="collapse" id="ryan">

											<p class="mb40">Most recently, he served as the Head of Marketing at Parlo, where he led all demand generation and strategic sales in the bots and artificial intelligence sectors. Before Parlo, Ryan led a team of creatives, digital marketers, media buyers, and cross‐functional teams at SFW, a prestigious advertising agency headquartered in Greensboro, North Carolina. His team accounted for over one‐third of the agency’s total annual revenue, and landed the firm in the Inc. 500 list for three consecutive years.</p>

											<p class="mb40">Ryan lives in San Francisco with his wife, Jenny. He is on the board of UCSF Partners in Care, and in his spare time, Ryan enjoys cycling on his fluorescent green Trek road bike and sailing in the San Francisco Bay.</p>

											<p><strong>Areas of Expertise</strong>: New Product Launches, Ad Campaign Development, Partner Marketing, Content Marketing</p>
										</div>

									</div>
									<div class="about-us-consultants-profile-text-read-more absolute">
										<p class="read-more uc ls"><a data-toggle="collapse" data-target="#ryan" class="text-orange">read more <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a></p>
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
						<div class="about-us-consultants-profile-img-gradient absolute position"></div>
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
									<div class="pb40 about-us-consultants-profile-text-bio">
										<p class="mb40">Darby Williams is a product marketing consultant focused on helping companies maximize new product success. Darby creates buyer insights, tests new product concepts, develops product positioning and formulates go-to-market strategy and execution. He also helps companies reignite existing products utilizing the same techniques. Darby has worked over 20 years as a product marketing leader, launching a new computing platform at Microsoft, the first social commerce solution at PowerReviews and the first ready-to-cook meal kit at CookExpress. Darby also worked as a management consultant with Booz Allen, focusing on marketing strategy for tech sector products. Darby received his MBA with distinction from the University of Chicago Booth School.</p>

										<div class="collapse" id="darby">

											<p><strong>Areas of Expertise</strong>: Go-to-Market Strategy, Segmentation, Targeting and Positioning, Sales Enablement, New Product Concept Testing, New Product Launches</p>
										</div>

									</div>
									<div class="about-us-consultants-profile-text-read-more absolute">
										<p class="read-more uc ls"><a data-toggle="collapse" data-target="#darby" class="text-orange">read more <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a></p>
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
						<div class="about-us-consultants-profile-img-gradient absolute position"></div>
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