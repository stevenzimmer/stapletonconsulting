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
				Copyright &copy; <?php echo date('Y'); ?> Stapleton Consulting All rights Reserved
			</p>
		</div>

	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>