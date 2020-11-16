<section id="features" class="section-features">

	<div class="container">
		<div class="row">

			<div class="col-md-4">
				<img src="<?php echo get_theme_file_uri('assets/images/wp-radio/tree-right.png') ?>" class="img-fluid"/>
			</div>

			<div class="col-md-8">
				<div class="row">

					<div class="col-md-12">
						<h2 class="features-title"><span>Amazing Features</span> to <span> Power Up</span> Your Website.</h2>
					</div>

					<?php

					$features = [
						[
							'icon'        => 'fa-download',
							'title'       => 'Radio Stations Importer',
							'description' => '',
						],
						[
							'icon'        => 'fa-play-circle-o',
							'title'       => 'Sticky & Popup Player',
							'description' => '',
						],
						[
							'icon'        => ' fa-bar-chart-o',
							'title'       => 'Statistics Information',
							'description' => '',
						],
						[
							'icon'        => 'fa-mobile',
							'title'       => 'Mobile Compatible',
							'description' => '',
						],
						[
							'icon'        => 'fa-gear',
							'title'       => 'Highly Customizable',
							'description' => '',
						],
						[
							'icon'        => 'fa-cloud-download',
							'title'       => 'Free Lifetime Updates',
							'description' => '',
						],
					];

					foreach ( $features as $feature ) { ?>
						<!-- Grid column -->
						<div class="col-md-4 feature-box mb-3">

							<i class="fa fa-3x red-text feature-icon d-inline-flex justify-content-center align-items-center <?php echo $feature['icon']; ?>"></i>
							<h5 class="font-weight-bold my-4 text-dark"><?php echo $feature['title']; ?></h5>
						</div>
						<!-- Grid column -->
					<?php } ?>
				</div>
			</div>

		</div>
		<!-- Grid row -->
	</div>
</section>
