<?php
/**
 * Template Name: Contact
 */
get_header();

	page_hero(
		array(
			'type' => strtolower(get_the_title()),
			'title' => get_the_title(),
			'subtitle' => 'Fill out the form to the right, and we\'ll be in touch shortly! Fill out the form to the right, and we\'ll be in touch shortly!',
			'ctas' => array(
				array(
					'text' => 'get quote',
					'btn_color' => 'orange',
					'link' => '#contact'
				)
			)
		)
	);

contact_form('orange');
?>
<section class="bg-grey-light">
	<img class="img-responsive" srcset="/wp-content/uploads/theme-graphics/contact-map-mobile.png 768w, /wp-content/uploads/theme-graphics/contact-map.png 1200w" alt="contact map">
	<div class="container">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="row mb40">
				<h2 class="mb20 subheader text-blue-light">General Contact</h2>
				<p>For a quote or specific requests, see form below</p>
			</div>
			<div class="row pb40">
				<div class="col-sm-3">
					<div class="row">
						<p>800 123 4567</p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="row">
						<a href="#">Email Us</a>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="row">
						<p>Owl Consulting</p>
						<p>1284 Vallejo</p>
						<p>San Francisco, Ca 94109</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-half"></div>
</section>
<?php
	$i = 1;
	$leaders = array(
		array(
			'Michael Stapleton',
			'CEO &amp; Founder',
		),
		array(
			'Ryan Helmstetler',
			'Consultant'
		),
		array(
			'Darby Williams',
			'Consultant'
		)
	);

	foreach ( $leaders as $leader ) :
		$name = $leader[0];
		$title = $leader[1];
		$lc_name = strtolower($name);
		$img = str_replace(' ', '-', $lc_name);
		$split = explode(' ', $lc_name);

		$bg = '';
		$position_right = '';
		$position_left = '';

		if ( $i % 2 == 0 ) :

			$bg = 'grey-light';

		else :

			$position_right = 'col-sm-offset-1 col-sm-push-5';
			$position_left = 'col-sm-pull-7';

		endif;
?>

<section class="contact-item bg-<?php echo $bg ?>">
	<div class="section-half"></div>
	<div class="container">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="row">
				<div class="col-sm-6 <?php echo $position_right; ?>">
					<div class="pt40">
						<div class="row pb40">
							<h2 class="text-blue-dark"><?php echo $name ?></h2>
							<h4 class="text-orange bold"><?php echo $title; ?></h4>
						</div>
						<div class="row">
							<div class="col-xs-6">
								<div class="row">
									<a href="#" class="btn btn-outline btn-outline-orange">contact <?php echo $split[0]; ?></a>
								</div>
							</div>
							<div class="col-xs-6">

							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-5 <?php echo $position_left; ?>">
					<div class="row">
						<img class="img-responsive center-block" src="/wp-content/uploads/theme-graphics/<?php echo $img ?>.png">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
	$i++;
	endforeach;
?>

<?php get_footer(); ?>