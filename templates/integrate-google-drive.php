<?php

/**
 * Template Name: Integrate Google Drive
 */


?>
	<!doctype html>
<html lang="<?php language_attributes(); ?>">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport"
			  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>
	</head>

<body <?php body_class( 'radio-player-page' ); ?>>

<!--Navbar-->
<nav id="header-nav" class="navbar navbar-expand-lg">
	<div class="container">
		<a class="navbar-brand" href="<?php echo site_url( '/radio-player' ); ?>">
			<img src="<?php echo get_theme_file_uri( 'assets/images/integrate-google-drive/drive-icon.png' ) ?>"
				 alt="Integrate Google Drive" class="img-fluid">
			<span>Integrate</span> <span>Google</span> <span>Drive</span>
		</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>

		<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
			<ul class="nav navbar-nav menu_nav ml-auto">
				<li class="nav-item"><a class="nav-link"
										href="<?php echo site_url( 'integrate-google-drive' ); ?>">Home</a></li>
				<li class="nav-item"><a href="<?php echo site_url( 'integrate-google-drive' ); ?>#features"
										class="nav-link">Features</a></li>
				<li class="nav-item"><a href="<?php echo site_url( 'integrate-google-drive' ); ?>#how-to"
										class="nav-link">How to use</a></li>
			</ul>
		</div>

	</div>
</nav>

<!--Section Hero-->
<section id="hero" class="hero d-flex align-items-center">
	<div class="container ">
		<div class="row align-items-center d-flex justify-content-between">

			<div class="col-12 col-md-7 pb-5 order-2 order-sm-2 hero-text">
				<h1 class="section-title">
					<span>Integrate</span>
					<span>Google</span>
					<span>Drive</span>
				</h1>
				<h5 class="section-subtitle">Complete Google Drive Cloud Solution for WordPress.</h5>

				<p>
					Integrate Google Drive – is a most advanced and easy to use cloud solution plugin for WordPress to
					integrate Google Drive into your WordPress Website.
					<br>
					<br>
					Share your Google Drive cloud files into your site very fast and easily. You can manage, embeds,
					displays, uploads, downloads your Google Drive cloud files into your website directly using this
					plugin without any hassle and coding.
				</p>

				<div class="d-flex mt-3 mb-1">
					<a class="btn btn-outline-warning btn-raised text-uppercase btn-lg  mt-md-3 mr-3"
					   href="https://wordpress.org/plugins/integrate-google-drive" target="_blank" role="button">
						<i class="fa fa-download" style="margin-right: 5px;"></i> Download Now</a>
				</div>

			</div>

			<div class="col-12 col-md-5 order-sm-1 order-md-2">
				<div class="icon-wrap text-primary d-flex justify-content-md-center my-3">
					<button data-toggle="modal" data-target="#exampleModalCenter"
							class="icon d-flex border-0 align-items-center justify-content-center bg-white text-dark shadow-lg rounded-circle "
							style="width:70px; height:70px">
						<i class=" fa fa-play fa-lg ml-1"></i>
					</button>
				</div>
			</div>

		</div>
	</div>
</section>

<!-- Hero Video Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
	 aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Integrate Google Drive Intro</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body text-center">

				<iframe width="560" height="315" src="https://www.youtube.com/embed/s8BkO7f0RO0"
						title="YouTube video player" frameborder="0"
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>

			</div>

		</div>
	</div>
</div>

<!--Features-->
<section id="features" class="section-features">

	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<h2 class="section-title">Amazing <span>Integrate Google Drive</span> Features.</h2>
			</div>

			<div class="col-md-4">
				<img src="<?php echo get_theme_file_uri( 'assets/images/wp-radio/tree-right.png' ) ?>"
					 class="img-fluid"/>
			</div>

			<div class="col-md-8">
				<div class="row">

					<?php

					$features = [
						[
							'icon'        => 'fa-file-o',
							'title'       => 'File Browser',
							'description' => 'Display your Google Drive cloud files via a file browser.',
						],
						[
							'icon'        => 'fa-file-code-o',
							'title'       => 'Embed Documents',
							'description' => 'Embed any Google Drive files to your page/ post.',
						],
						[
							'icon'        => 'fa-cloud-upload',
							'title'       => 'File Uploader',
							'description' => 'A standalone uploader box which allows your visitors to upload files to Google Drive.',
						],
						[
							'icon'        => 'fa-th',
							'title'       => 'Photo Gallery',
							'description' => 'Display your images in a lightbox grid photo gallery.',
						],
						[
							'icon'        => 'fa-play-circle-o',
							'title'       => 'Audio & Video Player ',
							'description' => 'Play audio and video in a single player using this module.',
						],
						[
							'icon'        => 'fa-code',
							'title'       => 'Shortcode Builder',
							'description' => 'You can create various types of module with the shortcode builder',
						],

					];

					foreach ( $features as $feature ) { ?>
						<!-- Grid column -->
						<div class="col-md-4 feature-box mb-3">

							<i class="fa fa-3x red-text feature-icon d-inline-flex justify-content-center align-items-center <?php echo $feature['icon']; ?>"></i>
							<h5 class="my-4 text-dark"><?php echo $feature['title']; ?></h5>

							<?php if ( ! empty( $feature['description'] ) ) {
								echo "<p>{$feature['description']}</p>";
							} ?>
						</div>
						<!-- Grid column -->
					<?php } ?>
				</div>
			</div>

		</div>
		<!-- Grid row -->
	</div>
</section>


<!-- Demos -->
<section id="how-to" class="section-how-to">

	<?php
	$steps = [
		[
			'icon'        => 'fa-download',
			'title'       => 'Download & Install',
			'description' => '<a href="https://wordpress.org/plugins/integrate-google-drive" target="_blank">Download</a> the WordPress plugin from WordPress repo and install the plugin from your admin dashboard.',
		],
		[
			'icon'        => 'fa-user-plus',
			'title'       => 'Link a Google Account',
			'description' => 'After activating the plugin you have to link your Google accounts to the plugin for accessing you Google Drive files.',
		],
		[
			'icon'        => 'fa-files-o',
			'title'       => 'Manage & Browse Files',
			'description' => 'Browse files via the File Browser of the plugin and manage (copy, edit, rename, delete) the files.',
		],
		[
			'icon'        => 'fa-code',
			'title'       => 'Shortcode Builder',
			'description' => 'You can create various types of module (File browser, Photo Gallery, Media player etc.) with different configurations with the shortcode builder and can use them anywhere using the shortcode.',
		],
	];
	?>

	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<h2 class="section-title"><span>HOW TO USE?</span></h2>
			</div>

			<div class="col-md-5">
				<img class="img-fluid"
					 src="<?php echo get_theme_file_uri( 'assets/images/integrate-google-drive/how-to.svg' ); ?>"
					 alt="How to use Integrate Google Drive for WordPress">
			</div>

			<div class="col-md-7">
				<?php

				foreach ( $steps as $key => $step ) { ?>
					<div class="how-to-step">
						<div class="step-header">
							<span class="step-header-sl"><?php echo $key + 1; ?></span>
							<span class="step-header-title"><?php echo $step['title']; ?></span>
						</div>

						<p><?php echo $step['description']; ?></p>

					</div>
				<?php } ?>
			</div>

		</div>
	</div>
</section>

<!-- Call to action -->
<section id="cta" class="section-cta">
	<img src="<?php echo get_theme_file_uri( 'assets/images/integrate-google-drive/cta-bg.png' ); ?>" class="cta_bg_1">
	<img src="<?php echo get_theme_file_uri( 'assets/images/integrate-google-drive/cta-bg-2.png' ); ?>"
		 class="cta_bg_2">

	<div class="container">
		<div class="row">

			<div class="col-md-12 text-center">
				<h3 class="section-title text-light">Say hello to the most popular WordPress Google Drive plugin!</h3>
				<p class="section-subtitle text-warning"> Join now and start using your Google Drive even more efficiently by
					integrating it on your website!</p>

				<a class="btn btn-primary btn-raised text-uppercase btn-lg  mt-md-3 mr-3"
				   href="https://wordpress.org/plugins/integrate-google-drive" target="_blank" role="button">
					<i class="fa fa-download" style="margin-right: 5px;"></i>
					<span>Download Now</span>
				</a>

			</div>
		</div>
	</div>
</section>

<!-- Contact	-->
<section id="contact" class="contact">
	<div class="container">
		<div class="row">


			<div class="col-md-12 text-center mb-5">
				<h2 class="section-title">Any <span>Query</span>? Looking For <span>Support</span>?</h2>
				<h5 class="section-subtitle">We are always ready to help you out.</h5>
			</div>

			<div class="col-md-7">
				<div class="contact_form">


					<?php echo do_shortcode( '[gravityform id=1 ajax="true" title="false" description="false"]' ) ?>

				</div>
			</div>

			<div class="col-md-5">
				<img src="<?php echo get_theme_file_uri( 'assets/images/wp-radio/contact1.svg' ); ?>" class="img-fluid"
					 alt="">
			</div>
		</div>
	</div>
</section>


<?php

get_footer( 'integrate-google-drive' );
