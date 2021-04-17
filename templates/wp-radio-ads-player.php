<?php

/**
 * Template Name: WP Radio Ads Player
 */


?>
	<!doctype html>
<html lang="<?php language_attributes(); ?>">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>
	</head>

<body <?php body_class( 'wp-radio-ads-player' ); ?>>

<!--Navbar-->
<nav id="header-nav" class="navbar navbar-expand-lg">
	<div class="container">
		<a class="navbar-brand" href="<?php echo site_url( '/wp-radio-ads-player' ); ?>">
			<img src="<?php echo get_theme_file_uri( 'assets/images/wp-radio/wp-radio-ads-player-icon.png' ) ?>" alt="WP Radio Ads Player" class="img-fluid">
			<span>WP RADIO ADS PLAYER</span>
		</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>

		<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
			<ul class="nav navbar-nav menu_nav ml-auto">
				<li class="nav-item"><a class="nav-link" href="<?php echo site_url( 'wp-radio' ); ?>">Home</a></li>
				<li class="nav-item"><a href="#features" class="nav-link">Features</a></li>
				<li class="nav-item"><a class="nav-link" href="#contact">How To Use?</a></li>
				<li class="nav-item">
					<a class="nav-link buy-now-btn btn purchase" href="javascript:;">Buy Now</a>
				</li>
			</ul>
		</div>

	</div>
</nav>

<!--Section Hero-->
<section id="hero" class="hero d-flex align-items-center">
	<div class="container ">
		<div class="row align-items-center d-flex justify-content-between">

			<div class="col-12 col-md-7 pb-5 order-2 order-sm-2 hero-text">
				<h1 class="section-title">WP Radio Ads Player</h1>
				<h5 class="section-subtitle">Custom Mic Drops, Stringers & Advertisements Player.</h5>

				<p>WP Radio ads player lets you monetize your radio website by playing audio ads and you can also display any ads in the popup player.
					<br>
					It let you play custom mic drops, stringer, and audio advertisements at the start of radio station play.
				</p>
				<p>
					You can create and play unlimited ads and set them to be played by filtering specific counties or specific stations.
					You can also control how often the users will listen to the ads.</p>

				<div class="d-flex mt-3 mb-1">
					<a class="purchase btn btn-outline-warning btn-raised text-uppercase btn-lg  mt-md-3" href="#" role="button">
						<i class="fa fa-send"></i> Get Now</a>
				</div>
			</div>

			<div class="col-12 col-md-5 order-sm-1 order-md-2">
				<div class="icon-wrap text-primary d-flex justify-content-md-center my-3">
					<button data-toggle="modal" data-target="#exampleModalCenter" class="icon d-flex border-0 align-items-center justify-content-center bg-white text-dark shadow-lg rounded-circle " style="width:70px; height:70px">
						<i class=" fa fa-play fa-lg ml-1"></i>
					</button>
				</div>
			</div>

		</div>
	</div>
</section>

<!-- Hero Video Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">WP Radio Player Intro</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<iframe width="100%" height="450px" src="https://www.youtube.com/embed/AnJtcDCEWDk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>

		</div>
	</div>
</div>

<!--Features-->
<section id="features" class="section-features">

	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<h2 class="section-title"><span>Amazing Features</span> to <span> Monetize</span> Your Site.</h2>
			</div>

			<div class="col-md-4">
				<img src="<?php echo get_theme_file_uri( 'assets/images/wp-radio/tree-right.png' ) ?>" class="img-fluid"/>
			</div>

			<div class="col-md-8">
				<div class="row">

					<?php

					$features = [
						[
							'icon'        => 'fa-file-audio-o',
							'title'       => 'Custom Audio Ads',
							'description' => 'You can play any audio file or URL as ad at the start of any station play.',
						],
						[
							'icon'        => 'fa-clock-o',
							'title'       => 'Custom Ad Duration',
							'description' => 'You can set the ad duration, how long the add will be played.',
						],
						[
							'icon'        => 'fa-filter',
							'title'       => 'Countries Filtering',
							'description' => 'You can play any ad for a specific countries.',
						],
						[
							'icon'        => 'fa-filter',
							'title'       => 'Stations Filtering',
							'description' => 'You can play any ad for a specific stations.',
						],
						[
							'icon'        => 'fa-envelope',
							'title'       => 'Ad Stats Email Report',
							'description' => 'Get weekly ad stats email report to the ad publisher email.',
						],
						[
							'icon'        => 'fa-play-circle-o',
							'title'       => 'Custom Play Rules',
							'description' => 'You can play the ad for a specific times or for a specific date.',
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

<!--How to use? -->
<section id="how-to" class="section-how-to">

	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<h2 class="section-title"><span>How</span> to use?</h2>
			</div>

			<div class="col-md-12">
				<p>
					After installing the WP Radio Ads Player addon new menu "Radio Ads" will be added under the Radio Stations menu.

					<img src="<?php echo get_theme_file_uri( 'assets/images/wp-radio/wr-ads-player-how-to/wp-radio-ads-player.png' ) ?>" alt="WP Radio Ads Player">

					<br>From this menu we can manager the radio ads.
					<br>For creating a new ad, we have to click the "Add New Ad" submenu.
				</p>

				<p>

				<h4>On the ad edit screen we can see some fields. Those are:</h4>

				<img src="<?php echo get_theme_file_uri( 'assets/images/wp-radio/wr-ads-player-how-to/add-new-ad.png' ) ?>" alt="Add New Ad">

				<ol>

					<li><strong>Title</strong> - the ad title.</li>
					<li><strong>Ad File</strong> - Enter the audio ad URL or select any file by clicking the plus icon.</li>
					<li><strong>Ad Duration</strong> - Select the ad duration time, how long the ad will be played.</li>
					<li>
						<strong>Expire Type</strong> - Select expire type of how the ad will be expired. Expire the ad after playing a specific times or expire the ad after the selected date.
					</li>
					<li><strong>Expire By Count</strong> - Enter the maximum number, the ad can be played.</li>
					<li><strong>Expire By Date</strong> - Select the date untill the ad can be played</li>
					<li><strong>Countries</strong> - Select the countries, if you want to play the ad for a specific countries only.</li>
					<li><strong>Stations</strong> - Select the stations, if you want to play the ad for a specific stations only.</li>
					<li><strong>Publisher Name</strong> - Enter the ad publisher name.</li>
					<li><strong>Publisher Email</strong> - Enter the email of the ad publisher to send the ad stats email report.</li>
					<li><strong>Ad Stats</strong> - You can see how many times the ad has been played.</li>
				</ol>

				<h4>WP Radio Player Ads Settings:</h4>
				<img src="<?php echo get_theme_file_uri( 'assets/images/wp-radio/wr-ads-player-how-to/ads-settings.png' ) ?>" alt="WP Radio Player Ads Settings">

				<p>The WP Radio Ads Player Addon will add a new Ads settings section in radio station settings page.
					<br>In the settings section there are some settings fields those are:
				</p>

				<ol>
					<li>
						<strong>Ads Play Interval</strong> - Select the ad playing interval, how often the ads will be played when the listener play the stations.
						<br><strong>Always</strong> - The ad will be played always before, when the listener play the station.
						<br><strong>Specific Number</strong> - The ad will be played when the listener plays a stations for the selected interval number.
					</li>
					<li><strong>Popup Player Ad Codes</strong> - Enter the ad codes if you want to display the ad below the popup player.
					</li>
					<li><strong>Enable Email Reporting</strong> - Enable disable the ad stats email report to the ad publisher email.</li>
					<li><strong>Reporting Email Frequency</strong> - Select the email reporting frequency. Daily/ Weekly.</li>
					<li><strong>Reporting Email Subject</strong> - Enter the reporting email subject.</li>
				</ol>

				</p>

			</div>

		</div>
	</div>
</section>

<?php


get_footer( 'wp-radio' );
