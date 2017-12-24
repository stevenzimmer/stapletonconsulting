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
</head>
<body <?php body_class(); ?>>

<nav class="navbar navbar-default nav-sc absolute">
	<div class="container">
		<div class="nav-sc-container">
			<div class="row">
				<div class="">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sc-navbar" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar absolute"></span>
					</button>
				</div>
				<div class="col-md-3 col-md-offset-0 col-sm-3 col-sm-offset-0 col-xs-7 col-xs-offset-1">
					<div class="navbar-logo">
						<a href="/">
							<img alt="Stapleton Consulting Logo" class="img-responsive" src="/wp-content/uploads/theme-graphics/sc_logo.png">
						</a>
					</div>
				</div>
				<div class="col-md-8 col-sm-8 col-xs-0">
					<div class="collapse navbar-collapse" id="sc-navbar">
						<?php // Primary navigation menu
							wp_nav_menu(
								array(
									'theme_location' 	=> 'primary',
									'menu'				=> 'Primary',
									'container'			=> false,
									'menu_class'		=> 'nav navbar-nav navbar-right',
									'echo'				=> true,
									'fallback_cb'		=> false
								)
							);
						?>
					</div><!-- /.navbar-collapse -->
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
