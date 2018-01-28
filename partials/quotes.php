
<section class="section quote">
	<div class="container">
		<div id="quote-carousel" class="carousel quote-carousel" data-ride="carousel">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<div class="quote-symbol text-center">
						<span>"</span>
					</div>

					<div class="row mb40">
						<div class="col-sm-10 col-sm-offset-1">
							<!-- Wrapper for slides -->
							<div class="carousel-inner quote-carousel-inner text-center relative" role="listbox">

							<?php
								$i = 0;

								$quotes = array(
									array(
										'Cras ac dapibus nisl, at vulputate elit. Mauris a efficitur lectus, eget mattis enim. Maecenas purus felis, convallis eget elementum sit amet, interdum a eros. Fusce tempus urna sed enim gravida, quis tempor diam vulputate.'
									),
									array(
										'Donec augue tortor, iaculis at commodo at, tempus id nisl. Nulla ac mi et mauris cursus ullamcorper. Ut imperdiet sed ligula sit amet egestas. Nam ac ornare arcu. Nullam quis bibendum leo.'
									),
									array(
										'Praesent dictum magna eu pretium aliquet. Integer pharetra diam id facilisis volutpat. Curabitur tristique, ligula sit amet tincidunt tincidunt, nulla nisi lobortis enim, quis rutrum mauris enim id nunc.'
									)
								);

								foreach ( $quotes as $quote ) :
							?>

								<div class="item <?php if ($i == 0) : echo 'active'; endif; ?> absolute">
									<div class="quote-text mb40">
										<p>
											<?php echo $quote[0]; ?>
										</p>
									</div>
								</div>

							<?php
								$i++;
								endforeach;
							?>
							</div>
						</div>
					</div>

					<!-- Indicators -->
					<div class="carousel-indicators quote-carousel-indicators">

						<?php

							$i = 0;
							$indicators = array(

								array(
									'http://via.placeholder.com/50x50',
									'John Doe',
									'title goes here'
								),
								array(
									'http://via.placeholder.com/50x50',
									'Jane Does',
									'Janes title here'
								),
								array(
									'http://via.placeholder.com/50x50',
									'Johnny Mabry',
									'Johnnys title here'
								),
							);

							foreach ( $indicators as $indicator ) :
								$thumbnail = $indicator[0];
								$name = $indicator[1];
								$title = $indicator[2];
						?>
						<div class="<?php if ($i == 0) : echo 'active'; endif;?>">
							<div class="col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2">
								<div class="row">
									<div data-target="#quote-carousel" data-slide-to="<?php echo $i ?>">
										<div class="quote-citation mb40">
											<div class="col-xs-4">
												<div class="row">
													<img alt="<?php echo $name ?> thumbnail" class="img-responsive center-block" src="<?php echo $thumbnail; ?>">
												</div>
											</div>
											<div class="col-xs-8">
												<div class="row">
													<p><?php echo $name; ?></p>
													<span class="ls uc"><?php echo $title; ?></span>
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
							endforeach;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
