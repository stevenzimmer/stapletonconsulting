<?php
/**
 * Template Name: Leads
 */

get_header();

$hero_header = get_field('header');
$hero_paragraph = get_field('paragraph');
$form_title = get_field('form_title');
$form_thank_you = get_field('form_thank_you');

$wyg_title = get_field('wyg_title');
$wyg_paragraph = get_field('wyg_paragraph');
$wyg_bg = get_field('wyg_bg');

?>
<header class="relative leads-hero">
	<div class="position absolute bg-cover leads-hero-bg parallax"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="row mb40">
					<div class="col-sm-6 col-sm-offset-3">
						<div class="row">
							<div class="col-xs-6 col-xs-offset-3">
								<a href="/"><img class="img-responsive center-block" src="/wp-content/uploads/theme-graphics/owl-logo-white.png"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="row text-center mb40">
					<h1 class="text-orange"><?php echo $hero_header; ?></h1>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="">
							<div class="leads-hero-left mt20">
								<?php echo $hero_paragraph; ?>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="leads-hero-right bg-white">
							<div class="leads-hero-right-box">
								<h2 class="mb20 text-blue-dark"><?php echo $form_title; ?></h2>
								<form class="sc-form-leads" id="sc_form_ebook">
									<div class="mb20">
										<input name="name" type="text" class="form-control" id="first_name" placeholder="Name" required>
									</div>
									<div class="mb20">
										<input name="email" type="email" class="form-control" id="email" placeholder="Email">
									</div>
									<div class="mb20">
										<input name="telephone" type="telephone" class="form-control" id="phone" placeholder="Phone">
									</div>
									<input type="submit" name="sc_form_button" id="sc_form_button" class="btn btn-solid btn-solid-orange text-white" value="download for free">
								</form>

							</div>
							<div class="form-success form-success-leads text-center bg-white">
								<?php echo $form_thank_you; ?>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</header>

<section class="bg-blue-light leads-section relative">
	<div class="leads-section-bg position absolute bg-cover"

		<?php
			if (!empty($wyg_bg)) :
		?>
			style="background-image: url(<?php echo $wyg_bg; ?>)"
		<?php
			endif;
		?>

	></div>
	<div class="container relative">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="row section">
					<div class="col-md-6"></div>
					<div class="col-md-6">
						<h2 class="text-white mb40"><?php echo $wyg_title ?></h2>
						<?php echo $wyg_paragraph ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="bg-blue-light section-half leads-section-bottom">
	<div class="container-fluid">
		<div class="row text-center">
			<div class="col-sm-2 col-sm-offset-1">
				<div class=" mb40">
					<span class="icon-small owl-icon owl-icon--document"></span>
					<p class="text-white ls uc bold">Report detailing the 7-10 primary reasons you win or lose deals</p>
				</div>
			</div>
			<div class="col-sm-2">
				<div class=" mb40">
					<span class="icon-small owl-icon owl-icon--thumbsup"></span>
					<p class="text-white ls uc bold">List of your top competitors, highlighting and comparing their strengths and weaknesses</p>
				</div>
			</div>
			<div class="col-sm-2">
				<div class=" mb40">
					<span class="icon-small owl-icon owl-icon--headphone"></span>
					<p class="text-white ls uc bold">Audio recordings of the win-loss interviews</p>
				</div>
			</div>
			<div class="col-sm-2">
				<div class=" mb40">
					<span class="icon-small owl-icon owl-icon--hourglass"></span>
					<p class="text-white ls uc bold">Tactical recommendations on how you can increase win rates right away</p>
				</div>
			</div>
			<div class="col-sm-2">
				<div class=" mb40">
					<span class="icon-small owl-icon owl-icon--mountain"></span>
					<p class="text-white ls uc bold">Strategy for how to grow your business over the mid-to-long-term</p>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
	get_template_part('partials/quotes');
?>
<section class="bg-blue-light section contact-form">
	<div class="container">
		<div class="row text-center mb40">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="">
					<h2 class="text-white mb40">Want More Information?</h2>
					<p class="text-white">We’d love to hear from you. Fill out the form below and we'll reach out to dig deeper into your product marketing challenges. We offer free consultations to see if it makes sense for us to work together. Send us your question or thoughts and we’ll get back to you within 24 hours.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<form class="sc-form sc-form-blue-light" id="sc_form_more_info">
					<div class="col-sm-6">
						<div class="form-group">
							<input name="first_name" type="text" class="form-control" id="first_name" placeholder="First Name" required>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<input name="last_name" type="text" class="form-control" id="last_name" placeholder="Last Name">
						</div>
					</div>

					<div class="clearfix"></div>

					<div class="col-sm-6">
						<div class="form-group">
							<input name="email" type="email" class="form-control" id="email" placeholder="Email">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<input name="telephone" type="telephone" class="form-control" id="phone" placeholder="Phone">
						</div>
					</div>

					<div class="clearfix"></div>

					<div class="col-sm-12">
						<div class="form-group">
							<textarea name="message" id="message" placeholder="Message" class="form-control" rows="5"></textarea>
						</div>
					</div>

					<div class="sc-form-button text-center">
						<div class="sc-form-button-align">
							<input type="submit" name="sc_form_button" id="sc_form_button" class="btn btn-solid btn-solid-orange" value="download & submit">
						</div>
					</div>
				</form>
				<div class="form-success text-center">
					<h2 class="mb20 text-white">Thank you!</h2>
					<p class="text-white">We will be in touch shortly!</p>
				</div>
			</div>
		</div>
	</div>
</section>

<footer class="leads-footer bg-blue-dark">
	<div class="container">
		<div class="row section">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="row">
					<div class="col-sm-4 col-sm-offset-1">
						<a href="/"><img class="img-responsive" src="/wp-content/uploads/theme-graphics/owl-logo-white.png"></a>
					</div>
					<div class="col-sm-6 col-sm-offset-1">
						<div class="row">
							<div class="col-sm-6">
								<ul>
									<li><a href="" class="text-white">Our Mission</a></li>
									<li><a href="/about-us" class="text-white">About</a></li>
									<li><a href="/contact-us" class="text-white">Contact</a></li>
								</ul>
							</div>
							<div class="col-sm-6">
								<ul>
									<li><a href="" class="text-white">Terms &amp; Conditions</a></li>
									<li><a href="" class="text-white">Privacy Policy</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row text-center text-white section-half">
			<p>Copyright &copy; <?php echo date('Y'); ?> Stapleton Consulting All rights Reserved</p>
		</div>
	</div>
</footer>

<?php
	get_footer();
?>