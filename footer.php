<footer class="section bg bg-blue-dark footer">
	<div class="container">
		<div class="row mb40">
			<div class="col-sm-4 col-xs-6">
				<p class="mb40 footer-header ls uc bold text-orange">services</p>
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
				<p class="mb40 footer-header ls uc bold text-orange">company</p>
				<ul class="mb40">

					<?php
						$pages = new WP_Query( array(

								'post_type' => 'page',
								'posts_per_page' => -1
							)
						);

						while ( $pages->have_posts()) :
							$pages->the_post();
					?>
					<li>
						<a href="<?php the_permalink() ?>">
							<?php the_title(); ?>
						</a>
					</li>
					<?php
						endwhile;
						wp_reset_postdata();
					?>
				</ul>
			</div>
			<div class="col-sm-4">
				<p class="mb40 footer-header ls uc bold text-orange">articles</p>
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
			<p class="text-white">
				Copyright &copy; <?php echo date('Y'); ?> Stapleton Consulting All rights Reserved
			</p>
		</div>

	</div>
</footer>
<div class="mobile-nav fixed position">
	<div class="container">
		<div class="">
			<div class="col-xs-6 col-xs-offset-3">
				<div class="nav-sc">
					<?php // Primary navigation menu
						primary_nav();
					?>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>