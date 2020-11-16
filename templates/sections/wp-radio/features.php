<section class="section-features text-center py-5">

	<div class="container">
		<div class="row">

			<div class="col-md-4">
				<img src="https://saasland2.droitthemes.com/wp-content/uploads/2019/09/tree-right.png" alt=""/>
			</div>

			<div class="col-md-8">
				<div class="row">

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
						<div class="col-md-4 feature-box mb-5">

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
