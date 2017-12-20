<?php get_header(); ?>
<header class="bg bg-blue-dark hero home-hero relative">
	<div class="absolute position home-hero-bg"></div>
	<div class="container relative">
		<div class="row">
			<div class="col-md-5 col-sm-6">
				<div class="hero-inner">
					<h1 class="mb40">Welcome</h1>
					<p class="mb40">
						Unlike traditional marketing agencies, we focus on product marketing consulting, ensuring you know exactly what you need to do to win.
					</p>
					<table width="100%">
						<tr>
							<td>
								<a href="#" class="btn btn-outline btn-outline-orange">
									Get started
								</a>
							</td>
							<td>
								<a href="#" class="btn btn-solid btn-solid-orange">
									Active Button
								</a>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</header>

<section class="section">
	<div class="container text-center">
		<h2 class="mb40">
			Pillars to Success
		</h2>
		<div class="row">
			<div class="col-sm-3 col-xs-6">
				<img class="mb20" width="39" src="/wp-content/uploads/theme-graphics/key_icon_yellow.png">
				<h3 class="mb20">Industry Experience</h3>
				<p>Praesent ac tellus id arcu facilisis feugiat vitae in diam. Pellentesque vel laoreet</p>
			</div>
			<div class="col-sm-3 col-xs-6">
				<img class="mb20" width="25" src="/wp-content/uploads/theme-graphics/lightbulb_icon_yellow.png">
				<h3 class="mb20">Creative Ideas</h3>
				<p>Praesent ac tellus id arcu facilisis feugiat vitae in diam. Pellentesque vel laoreet</p>
			</div>
			<div class="col-sm-3 col-xs-6">
				<img class="mb20" width="25" src="/wp-content/uploads/theme-graphics/bolt_icon_yellow.png">
				<h3 class="mb20">Fast &amp; Efficient</h3>
				<p>Praesent ac tellus id arcu facilisis feugiat vitae in diam. Pellentesque vel laoreet</p>
			</div>
			<div class="col-sm-3 col-xs-6">
				<img class="mb20" width="47" src="/wp-content/uploads/theme-graphics/diamond_icon_yellow.png">
				<h3 class="mb20">Proven Results</h3>
				<p>Praesent ac tellus id arcu facilisis feugiat vitae in diam. Pellentesque vel laoreet</p>
			</div>
		</div>
	</div>
</section>

<section class="section bg bg-blue-light">
	<div class="container text-center">
		<h2 class="mb40">Some of our clients</h2>
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="row">
					<div class="col-sm-3">
						<img class="mb40" width="101" src="/wp-content/uploads/theme-graphics/apple_logo_white.png">
					</div>
					<div class="col-sm-3">
						<img class="mb40" width="195" src="/wp-content/uploads/theme-graphics/nike_logo_white.png">
					</div>
					<div class="col-sm-3">
						<img class="mb40" width="105" src="/wp-content/uploads/theme-graphics/google_logo_white.png">
					</div>
					<div class="col-sm-3">
						<img class="mb40" width="126" src="/wp-content/uploads/theme-graphics/twitter_logo_white.png">
					</div>

				</div>
			</div>

		</div>
	</div>
</section>

<section class="services">
	<div class="col-md-4">
		<div class="row relative">
			<div class="services-left-bg absolute position"></div>
			<div class="relative bg services-left">
				<div class="col-sm-8 col-sm-offset-2">
					<h3 class="mb20">Services</h3>
					<p class="mb40">Unlike traditional marketing agencies, we focus on product marketing consulting, ensuring you know exactly what you need to do to win.</p>
					<a href="/services" class="btn btn-solid btn-solid-orange">SEE ALL SERVICES</a>
				</div>
				<div class="clearfix"></div>

			</div>
		</div>
	</div>
	<div class="col-md-8">
		<div class="row text-center">
			<?php
				$services = new WP_Query( array(
						'post_type' => 'services',
						'posts_per_page' => 6
					)
				);
				while ($services->have_posts()) :
						$services->the_post();
					$services_title_lowercase = strtolower(get_the_title());
					$services_icon = str_replace(array(' ','-'), '_', $services_title_lowercase);
			?>
			<div class="col-md-4">
				<div class="row">
					<div class="services-item">
						<div class="services-item-inner relative">
							<img class="mb20" height="109" src="/wp-content/uploads/theme-graphics/services_<?php echo $services_icon ?>_icon_yellow.png">
							<h3><?php the_title(); ?></h3>
						</div>
						<div class="services-item-overlay absolute position section-half">
							<div class="col-sm-10 col-sm-offset-1">
								<h3 class="mb20"><?php the_title() ?></h3>
								<p>Bacon ipsum dolor amet picanha pork chop alcatra jowl frankfurter andouille pork belly bacon landjaeger tongue short loin sausage strip steak rump.</p>
							</div>

						</div>

					</div>
				</div>
			</div>
			<?php
				endwhile;
				wp_reset_postdata();
			?>
		</div>
	</div>
	<div class="clearfix"></div>
</section>

<section class="bg bg-blue-light section">
	<div class="container text-center">
		<h2 class="mb40">Ready to get started?</h2>
		<a href="/contact-us" class="btn btn-outline btn-outline-orange">CONTACT US</a>
	</div>
</section>

<section class="section">
	<div class="container text-center">
		<h2 class="mb40">Our Process</h2>
		<p class="mb40">
			We follow this stradegy to work on each & every project, it brings success
		</p>
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="row">
					<div class="col-sm-3 col-xs-6">
						<img class="mb20" width="105" src="/wp-content/uploads/theme-graphics/eye_icon.png">
						<p>ANALYSIS</p>
					</div>
					<div class="col-sm-3 col-xs-6">
						<img class="mb20" width="60" src="/wp-content/uploads/theme-graphics/wheel_icon.png">
						<p>ANALYSIS</p>
					</div>
					<div class="col-sm-3 col-xs-6">
						<img class="mb20" width="60" src="/wp-content/uploads/theme-graphics/lightbulb_icon.png">
						<p>STRATEGY</p>
					</div>
					<div class="col-sm-3 col-xs-6">
						<img class="mb20" width="50" src="/wp-content/uploads/theme-graphics/trophy_icon.png">
						<p>EXECUTION</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="specs">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2 col-sm-4 col-xs-6">
				<div class="row">
					<div class="specs-box text-center bg bg-purple section-half">
						<p class="mb20">20</p>
						<span>Clients</span>
					</div>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">
				<div class="row">
					<div class="specs-box text-center bg bg-blue-dark section-half">
						<p class="mb20">500</p>
						<span>PROJECTS</span>
					</div>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">
				<div class="row">
					<div class="specs-box text-center bg bg-blue-light section-half">
						<p class="mb20">99</p>
						<span>FEATURES</span>
					</div>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">
				<div class="row">
					<div class="specs-box text-center bg bg-orange section-half">
						<p class="mb20">1039</p>
						<span>AVERAGE</span>
					</div>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">
				<div class="row">
					<div class="specs-box text-center bg bg-orange-light section-half">
						<p class="mb20">320</p>
						<span>CAMPAIGNS</span>
					</div>
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">
				<div class="row">
					<div class="specs-box text-center bg bg-grey section-half">
						<p class="mb20">9</p>
						<span>EMPLOYEES</span>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>
<section class="section quote">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<div class="row text-center mb40">
					<div class="col-sm-8 col-sm-offset-2">
						<div class="quote-text mb40">
							<span>"</span>
							<p>
								Cras ac dapibus nisl, at vulputate elit. Mauris a efficitur lectus, eget mattis enim. Maecenas purus felis, convallis eget elementum sit amet, interdum a eros. Fusce tempus urna sed enim gravida, quis tempor diam vulputate.
							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="row quote-citation mb40">
							<div class="col-sm-4 col-xs-5">
								<div class="row">
									<img class="img-responsive center-block" src="http://via.placeholder.com/50x50">
								</div>
							</div>
							<div class="col-sm-8 col-xs-7">
								<div class="row">
									<p>John Doe</p>
									<span>Impressive Title</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="row quote-citation active mb40">
							<div class="col-sm-4 col-xs-5">
								<div class="row">
									<img class="img-responsive center-block" src="http://via.placeholder.com/50x50">
								</div>
							</div>
							<div class="col-sm-8 col-xs-7">
								<div class="row">
									<p>John Doe</p>
									<span>Impressive Title</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="row quote-citation mb40">
							<div class="col-sm-4 col-xs-5">
								<div class="row">
									<img class="img-responsive center-block" src="http://via.placeholder.com/50x50">
								</div>
							</div>
							<div class="col-sm-8 col-xs-7">
								<div class="row">
									<p>John Doe</p>
									<span>Impressive Title</span>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>
</section>

<section class="section bg bg-blue-light contact-form">
	<div class="container">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="row">
				<h2 class="mb40">Get in Touch</h2>
				<p class="mb40">
					We’d love to hear from you. Fill out the form below and we'll reach out to dig deeper into your product marketing challenges. We offer free consultations to see if it makes sense for us to work together. Send us your question or thoughts and we’ll get back to you within 24 hours.
				</p>
			</div>
			<div class="row">
				<form class="form-horizontal sc-form">
					<div class="col-sm-4">
						<div class="form-group">
							<input type="text" class="form-control" id="first_name" placeholder="First Name">
						</div>
					</div>
					<div class="col-sm-4 col-sm-offset-1">
						<div class="form-group">
							<input type="text" class="form-control" id="last_name" placeholder="Last Name">
						</div>
					</div>

					<div class="clearfix"></div>

					<div class="col-sm-4">
						<div class="form-group">
							<div class="">
								<input type="email" class="form-control" id="email" placeholder="Email">
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-sm-offset-1">
						<div class="form-group">
							<input type="telephone" class="form-control" id="phone" placeholder="Phone">
						</div>
					</div>

					<div class="clearfix"></div>


					<div class="col-sm-9">
						<div class="form-group">
							<textarea placeholder="Message" class="form-control" rows="5"></textarea>
						</div>
					</div>

					<div class="col-sm-2 col-sm-offset-1">
						<div class="sc-form-button">
							<div class="sc-form-button-align">
								<a href="#" class="btn btn-outline btn-outline-orange">SUBMIT</a>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>

				</form>
			</div>

		</div>


	</div>
</section>
<?php get_footer(); ?>