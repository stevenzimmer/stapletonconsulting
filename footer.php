<footer class="section bg bg-blue-dark">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-xs-6">
				<h3 class="mb40">SERVICES</h3>
				<ul class="mb40">
				<?php
					$services = new WP_Query( array(
							'post_type' => 'services',
							'posts_per_page' => -1
						)
					);

					while ($services->have_posts()) :
						$services->the_post();
				?>
					<li>
						<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
					</li>
				<?php
					endwhile;
					wp_reset_postdata();
				?>
				</ul>
			</div>
			<div class="col-sm-4">
				<h3 class="mb40">COMPANY</h3>
				<ul class="mb40">
					<li>
						Our Mission
					</li>
					<li>
						About
					</li>
					<li>
						Contact
					</li>
				</ul>
			</div>
			<div class="col-sm-4">
				<h3 class="mb40">ARTICLES</h3>
				<ul class="mb40">
					<?php
						$articles = new WP_Query( array(
								'post_type' => 'articles',
								'posts_per_page' => -1
							)
						);

						while ($articles->have_posts()) :
							$articles->the_post();
					?>
					<li>
						<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
					</li>
				<?php
					endwhile;
					wp_reset_postdata();
				?>
				</ul>
			</div>
		</div>
		<div class="row text-center">
			<p>
				Copyright &copy; 2018 Stapleton Consulting All rights Reserved
			</p>
		</div>

	</div>
</footer>
<div class="live-search">
	<div class="live-search__top">
		<div class="container">
			<span class="glyphicon glyphicon-search live-search__icon" aria-hidden="true"></span>
			<input type="text" class="search-term" placeholder="What are you looking for?" id="search-term">
			<span class="glyphicon glyphicon-remove live-search__close" aria-hidden="true"></span>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>