<?php

	/**
	* The template for displaying the header
	*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ) ?>">
	<?php wp_head(); ?>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-WX4DTJV');</script>
	<!-- End Google Tag Manager -->

</head>
<body <?php body_class( 'relative' ); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WX4DTJV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<nav class="navbar navbar-default nav-sc absolute">
	<div class="container">
		<div class="nav-sc-container">
			<div class="row">

				<button type="button" class="navbar-toggle" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar absolute"></span>
				</button>

				<div class="col-md-2 col-md-offset-0 col-sm-3 col-sm-offset-0 col-xs-7 col-xs-offset-1">
					<div class="navbar-logo">
						<a href="/">
							<img alt="Stapleton Consulting Logo" class="img-responsive" src="/wp-content/uploads/theme-graphics/owl-logo-white.png">
						</a>
					</div>
				</div>
				<div class="col-md-9 col-sm-8 col-xs-0">
					<div class="navbar-collapse">
						<?php // Primary navigation menu
							primary_nav();
						?>
					</div>
				</div>
				<div class="col-md-1 col-md-offset-0 col-sm-1 col-sm-offset-0 col-xs-1 col-xs-offset-1">
					<div class="navbar-nav-search relative">
						<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div><!-- /.container -->
</nav>
