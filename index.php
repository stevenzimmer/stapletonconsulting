<?php get_header(); ?>
<header class="bg bg-blue-dark hero home-hero relative">
	<div class="absolute position home-hero-bg parallax"></div>
	<div class="container relative">
		<div class="row">
			<div class="col-md-5 col-md-offset-1 col-sm-6 col-sm-offset-0">
				<div class="hero-inner">
					<h1 class="mb40">Index</h1>
					<p class="mb40">
						Unlike traditional marketing agencies, we focus on product marketing consulting, ensuring you know exactly what you need to do to win.
					</p>
					<table width="100%">
						<tr>
							<td>
								<a href="#contact" class="btn btn-outline btn-outline-orange">
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

<section class="section pillars">
	<div class="container text-center">
		<h2 class="mb20">
			Pillars to Success
		</h2>
		<p class="mb40">This is placeholder copy as a descriptive subhead to the title above.</p>
		<div class="row">
			<?php

				$pillars = array(
					array(
						'key',
						'Industry Experience',
						'Praesent ac tellus id arcu facilisis feugiat vitae in diam. Pellentesque vel laoreet'
					),
					array(
						'lightbulb',
						'Creative Ideas',
						'Praesent ac tellus id arcu facilisis feugiat vitae in diam. Pellentesque vel laoreet'
					),
					array(
						'bolt',
						'Fast &amp; Efficient',
						'Praesent ac tellus id arcu facilisis feugiat vitae in diam. Pellentesque vel laoreet'
					),
					array(
						'diamond',
						'Proven Results',
						'Praesent ac tellus id arcu facilisis feugiat vitae in diam. Pellentesque vel laoreet'
					)

				);

				foreach ( $pillars as $pillar ) :

					$icon = $pillar[0];
					$title = $pillar[1];
					$paragraph = $pillar[2];
			?>

			<div class="col-sm-3 col-xs-6">
				<div class="pillars-item mb40">
					<img alt="<?php echo $title; ?> icon" class="mb20" height="39" src="/wp-content/uploads/theme-graphics/<?php echo $icon; ?>_icon_yellow.png">
					<h3 class="mb20"><?php echo $title; ?></h3>
					<p><?php echo $paragraph; ?></p>
				</div>
			</div>

			<?php
				endforeach;
			?>
		</div>
	</div>
</section>

<section class="section bg bg-blue-light clients">
	<div class="container text-center">
		<h2 class="mb40">
			Some of our clients
		</h2>
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="row">

				<?php
					$clients = array(
							'apple',
							'nike',
							'google',
							'twitter'
					);

					foreach ( $clients as $client ) :
				?>

				<div class="col-sm-3 col-xs-6">
					<div class="mb40">
						<img alt="<?php echo $client ?> logo" class="mb40" height="80" src="/wp-content/uploads/theme-graphics/<?php echo $client ?>_logo_white.png">
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
					<a href="<?php the_permalink(); ?>">
						<div class="services-item">
							<div class="services-item-inner relative">
								<img alt="<?php echo $services_icon ?> icon" class="mb20" height="109" src="/wp-content/uploads/theme-graphics/services_<?php echo $services_icon ?>_icon_yellow.png">
								<h3><?php the_title(); ?></h3>
							</div>
							<div class="services-item-overlay-bg position absolute"></div>
							<div class="services-item-overlay absolute position section-half">
								<div class="col-sm-10 col-sm-offset-1">
									<div class="services-item-overlay-wrapper relative">
										<div class="full-width services-item-overlay-wrapper-title relative">
											<h3 class="mb20"><?php the_title() ?></h3>
										</div>
										<div class="full-width services-item-overlay-wrapper-excerpt absolute">
											<?php the_excerpt(); ?>
										</div>
										<div class="full-width services-item-overlay-wrapper-arrow absolute">
											<p><img width="30" src="/wp-content/uploads/theme-graphics/arrow-right.png"></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</a>
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

<section class="section process">
	<div class="container text-center">
		<h2 class="mb20">Our Process</h2>
		<p class="mb40">
			We follow this strategy to work on each &amp; every project, it brings success
		</p>
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="row">

				<?php
					$processes = array(

						array(
							'eye',
							'analysis'
						),

						array(
							'wheel',
							'planning'
						),

						array(
							'lightbulb',
							'strategy'
						),

						array(
							'trophy',
							'execution'
						)

					);

					foreach ( $processes as $process ) :

						$icon = $process[0];
						$title = $process[1];
				?>

					<div class="col-sm-3 col-xs-6">
						<div class="process-item mb40">
							<img alt="<?php echo $title ?> icon" class="mb20" height="70" src="/wp-content/uploads/theme-graphics/<?php echo $icon ?>_icon.png">
							<p><?php echo $title; ?></p>
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

<section class="specs">
	<div class="container-fluid">
		<div class="row">

		<?php
			$specs = array(
				array(
					20,
					'purple',
					'clients'
				),
				array(
					500,
					'blue-dark',
					'projects'
				),
				array(
					99,
					'blue-light',
					'features'
				),
				array(
					1039,
					'orange',
					'average'
				),
				array(
					320,
					'orange-light',
					'campaigns'
				),
				array(
					9,
					'grey',
					'employees'
				)
			);

			foreach ( $specs as $spec ) :
				$number = $spec[0];
				$bg = $spec[1];
				$title = $spec[2];
		?>
			<div class="col-md-2 col-sm-4 col-xs-6">
				<div class="row">
					<div class="specs-box text-center bg bg-<?php echo $bg ?> section-half">
						<p class="mb20"><?php echo $number ?></p>
						<span><?php echo $title; ?></span>
					</div>
				</div>
			</div>

		<?php
			endforeach;
		?>
		</div>
	</div>
</section>
<section class="section quote">
	<div class="container">
		<div id="quote-carousel" class="carousel quote-carousel" data-ride="carousel">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<div class="quote-symbol text-center">
						<span>"</span>
					</div>

					<div class="row mb40">
						<div class="col-sm-10 col-sm-offset-1">
							<!-- Wrapper for slides -->
							<div class="carousel-inner text-center" role="listbox">

							<?php
								$i = 0;

								$quotes = array(
									array(
										'Cras ac dapibus nisl, at vulputate elit. Mauris a efficitur lectus, eget mattis enim. Maecenas purus felis, convallis eget elementum sit amet, interdum a eros. Fusce tempus urna sed enim gravida, quis tempor diam vulputate.'
									),
									array(
										'Nope ac dapibus nisl, at vulputate elit. Mauris a efficitur lectus, eget mattis enim. Maecenas purus felis, convallis eget elementum sit amet, interdum a eros. Fusce tempus urna sed enim gravida, quis tempor diam vulputate.'
									),
									array(
										'Yup ac dapibus nisl, at vulputate elit. Mauris a efficitur lectus, eget mattis enim. Maecenas purus felis, convallis eget elementum sit amet, interdum a eros. Fusce tempus urna sed enim gravida, quis tempor diam vulputate.'
									)
								);

								foreach ( $quotes as $quote ) :
							?>

								<div class="item <?php if ($i == 0) : echo 'active'; endif; ?>">
									<div class="quote-text mb40">
										<p>
											<?php echo $quote[0]; ?>
										</p>
									</div>
								</div>

							<?php
								$i++;
								endforeach;
							?>
							</div>
						</div>
					</div>

					<!-- Indicators -->
					<div class="carousel-indicators quote-carousel-indicators">

						<?php

							$i = 0;
							$indicators = array(

								array(
									'http://via.placeholder.com/50x50',
									'John Doe',
									'Impressive Title'
								),
								array(
									'http://via.placeholder.com/50x50',
									'John Doe',
									'Impressive Title'
								),
								array(
									'http://via.placeholder.com/50x50',
									'John Doe',
									'Impressive Title'
								),
							);

							foreach ( $indicators as $indicator ) :
								$thumbnail = $indicator[0];
								$name = $indicator[1];
								$title = $indicator[2];
						?>
						<div class="<?php if ($i == 0) : echo 'active'; endif;?>">
							<div class="col-sm-4">
								<div class="row">
									<div data-target="#quote-carousel" data-slide-to="<?php echo $i ?>">
										<div class="quote-citation mb40">
											<div class="col-sm-4 col-xs-3">
												<div class="row">
													<img alt="<?php echo $name ?> thumbnail" class="img-responsive center-block" src="<?php echo $thumbnail; ?>">
												</div>
											</div>
											<div class="col-sm-8 col-xs-7">
												<div class="row">
													<p><?php echo $name; ?></p>
													<span><?php echo $title; ?></span>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<?php
							$i++;
							endforeach;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section bg bg-blue-light contact-form" id="contact">
	<div class="container">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="row">
				<h2 class="mb40">Get in Touch</h2>
				<p class="mb40">
					We’d love to hear from you. Fill out the form below and we'll reach out to dig deeper into your product marketing challenges. We offer free consultations to see if it makes sense for us to work together. Send us your question or thoughts and we’ll get back to you within 24 hours.
				</p>

			</div>

			<div class="row">
				<form class="form-horizontal sc-form" id="sc_form">
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

					<div class="col-sm-4">
						<div class="form-group">
							<div class="">
								<input name="email" type="email" class="form-control" id="email" placeholder="Email">
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-sm-offset-1">
						<div class="form-group">
							<input name="telephone" type="telephone" class="form-control" id="phone" placeholder="Phone">
						</div>
					</div>

					<div class="clearfix"></div>


					<div class="col-sm-9">
						<div class="form-group">
							<textarea name="message" id="message" placeholder="Message" class="form-control" rows="5"></textarea>
						</div>
					</div>

					<div class="col-sm-2 col-sm-offset-1">
						<div class="sc-form-button">
							<div class="sc-form-button-align">
								<input type="submit" name="sc_form_button" id="sc_form_button" class="btn btn-outline btn-outline-orange" >
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