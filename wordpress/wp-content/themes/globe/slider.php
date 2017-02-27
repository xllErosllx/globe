	<!-- SLIDER -->
	<section class="slider-container">
		<div class="slider">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="slider-item item-01">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6">
							<h1 class="slider-titulo"><strong><?php the_title(); ?></strong></h1>
							<p><?php the_excerpt(); ?></p>
							<h3 class="slider-subtitulo">Reliability web hosting service for your website</h3>
							<ul class="list-group">
								<li class="list-group-item">
									<span class="tab-num glyphicon glyphicon-ok img-circle"></span>
									Unlimited Bandwidth with Massive Storage</li>
								<li class="list-group-item">
									<span class="tab-num glyphicon glyphicon-ok img-circle"></span>
									Unlimited Databases and Email Addresses</li>
								<li class="list-group-item">
									<span class="tab-num glyphicon glyphicon-ok img-circle"></span>
									99.99% Uptime Guarantee & 24/7 Live Support</li>
								<li class="list-group-item">
									<span class="tab-num glyphicon glyphicon-ok img-circle"></span>
									Apps Including WordPress, Drupal and Joomla</li>
								<li class="list-group-item">
									<span class="tab-num glyphicon glyphicon-ok img-circle"></span>
									Easy to use Website Builder & one-click Setup</li>
							</ul>
							<div class="btn-group" role="group" aria-label="...">
								<a href="#" title="view details">
									<img src="<?php bloginfo('template_url')?>/assets/img/boton-slider-view.png">
								</a>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 hidden-xs hidden-sm">
							<img class="" src="<?php bloginfo('template_url')?>/assets/img/service-slider.png" alt="">
						</div>
					</div>
				</div>
			</div>
			<?php endwhile; else: ?>
			<?php endif; ?>

		</div>
		<div class="controllers">
			<span class="slick-prev pull-left"></span>
			<span class="slick-next pull-right"></span>
		</div>
	</section>