
<section class="section quote">
	<div class="container">
		<div id="quote-carousel" class="carousel quote-carousel" data-ride="carousel">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<div class="quote-symbol text-center mb40">
						<span class="icon-small owl-icon owl-icon--quotes "></span>
					</div>

					<div class="row mb40">
						<div class="col-sm-10 col-sm-offset-1">
							<!-- Wrapper for slides -->
							<div class="carousel-inner quote-carousel-inner text-center relative" role="listbox">

							<?php
								$i = 0;

								$args = array(

									'post_type' => 'quotes',
									'posts_per_page' => 3
								);

								$quotes = new WP_Query($args);

								if ( $quotes->have_posts() ) :
									while ( $quotes->have_posts() ) :
										$quotes->the_post();


							?>
								<div class="item <?php if ($i == 0) : echo 'active'; endif; ?> absolute">
									<div class="quote-text mb40">
										<p>
											<?php the_content(); ?>
										</p>
									</div>
								</div>

							<?php
								$i++;
								endwhile;
								endif;
							?>

							</div>
						</div>
					</div>

					<!-- Indicators -->
					<div class="carousel-indicators quote-carousel-indicators">

						<?php

							$i = 0;

							if ( $quotes->have_posts() ) :
									while ( $quotes->have_posts() ) :
										$quotes->the_post();
						?>
							<div class="<?php if ($i == 0) : echo 'active'; endif;?>">
								<div class="col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2">
									<div class="row">
										<div data-target="#quote-carousel" data-slide-to="<?php echo $i ?>">
											<div class="quote-citation mb40">
												<div class="col-xs-4">
													<div class="row">
														<img alt="<?php the_title() ?> thumbnail" class="img-responsive center-block" src="<?php
														if (has_post_thumbnail()) :
															the_post_thumbnail_url();
														else :
															echo 'http://via.placeholder.com/50x50';
														endif;
													 ?>">
													</div>
												</div>
												<div class="col-xs-8">
													<div class="row">
														<p><?php the_title(); ?></p>
														<span class=""><?php the_excerpt(); ?></span>
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
							endwhile;
							endif;
							wp_reset_postdata();
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
