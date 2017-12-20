<?php

// Services Archive
get_header();
?>
<header class="page-hero bg bg-blue-dark">
<div class="container">
	<div class="row">
		<h1>Our Services</h1>
	</div>
</div>
</header>
<section class="section">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<h2 class="mb40">A strong product marketin strategy is fundamental to long-term success.</h2>
			<p class="mb20">It reduces customer acquisition costs and increases retention rates. But product marketing is hard. Whether you're struggling to build your in-house product marketing team, have a big project you need help with, or don't quite know how to productize your technology to begin driving revenue, we can help.</p>
			<p class="mb20">
				We are product marketing consultants that are:
			</p>
			<ul class="mb20">
				<li class="mb20">
					Strategic enough to handle your toughest projects
				</li>
				<li class="mb20">
					Flexible enough to tackle creative and quantitative work
				</li>
				<li class="mb20">
					Expert at working cross-functionally
				</li>
			</ul>
			<p>
				Our full list of services shows exactly how we can help.
			</p>
			</div>

		</div>
	</div>
</section>

<section class="section">
	<div class="container text-center">
		<div class="row mb40">
			<h2>Core Services</h2>
		</div>
		<div class="row">

			<?php
				$services = new WP_Query( array(
						'post_type' => 'services',
						'posts_per_page' => -1
					)
				);
				while ($services->have_posts()) :
						$services->the_post();
					$services_title_lowercase = strtolower(get_the_title());
					$services_icon = str_replace(array(' ','-'), '_', $services_title_lowercase);
			?>

			<div class="col-sm-4">
				<div class="mb40">
					<img class="mb20" height="120" src="/wp-content/uploads/theme-graphics/services_<?php echo $services_icon ?>_icon_navy.png">
					<h3><?php the_title(); ?></h3>
				</div>

			</div>


			<?php
				endwhile;
				wp_reset_postdata();
			?>

		</div>
	</div>
</section>

<?php
	get_footer();
?>
