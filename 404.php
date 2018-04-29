<?php
// 404 page
get_header();
?>

<section class="bg-blue-light page-404 relative">
	<div class="position absolute page-404-bg bg-cover"></div>
	<div class="container text-center">
		<div class="row section">
			<div class="col-sm-6 col-sm-offset-3">
				<h1 class="text-white mb40">Oops!</h1>
				<p class="text-white">Looks like something went wrong. The page you were looking for doesn't exist. Try one of these instead.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="row">
					<div class="col-sm-4">
						<a href="/services" class="btn btn-outline btn-outline-orange">services</a>
					</div>
					<div class="col-sm-4">
						<a href="/#contact" class="btn btn-solid btn-solid-orange">request demo</a>
					</div>
					<div class="col-sm-4">
						<a href="/contact-us" class="btn btn-outline btn-outline-orange">contact us</a>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<?php
get_footer();
?>