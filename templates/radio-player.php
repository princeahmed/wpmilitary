<?php

/**
 * Template Name: Radio Player
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
			<img src="<?php echo get_theme_file_uri( 'assets/images/radio-player/radio-player-icon.svg' ) ?>"
				 alt="WP Radio Ads Player" class="img-fluid">
			<span>RADIO PLAYER</span>
		</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>

		<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
			<ul class="nav navbar-nav menu_nav ml-auto">
				<li class="nav-item"><a class="nav-link" href="<?php echo site_url( 'wp-radio' ); ?>">Home</a></li>
				<li class="nav-item"><a href="#features" class="nav-link">Features</a></li>
				<li class="nav-item"><a href="#demos" class="nav-link">Demos</a></li>
			</ul>
		</div>

	</div>
</nav>

<!--Section Hero-->
<section id="hero" class="hero d-flex align-items-center">
	<div class="container ">
		<div class="row align-items-center d-flex justify-content-between">

			<div class="col-12 col-md-7 pb-5 order-2 order-sm-2 hero-text">
				<h1 class="section-title">Radio Player</h1>
				<h5 class="section-subtitle">Live audio stream player for WordPress.</h5>

				<p>
					Radio player is a simple, easy to use, user friendly and fully customizable web radio player for
					WordPress.
					<br>
					<br>
					You can play any live mp3, iceCast and Shoutcast stream in your WordPress website using shortcode,
					gutenberg block, elementor widget, sidebar widget, full-width sticky & popup player.
				</p>

				<div class="d-flex mt-3 mb-1">
					<a class="btn btn-outline-success btn-raised text-uppercase btn-lg  mt-md-3 mr-3"
					   href="https://webradiodirectory.com" target="_blank" role="button">
						<i class="fa fa-eye" style="margin-right: 5px;"></i> View Demos</a>
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
				<h5 class="modal-title" id="exampleModalLongTitle">WP Radio Player Intro</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body text-center">

				<iframe width="560" height="315" src="https://www.youtube.com/embed/YfOjHyoHG_Y"
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
				<h2 class="section-title">Amazing <span>Radio Player</span> Features.</h2>
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
							'icon'        => 'fa-arrows-h',
							'title'       => 'Full-width Sticky Player',
							'description' => ' Full-width sticky player is available to play a radio station in all page.',
						],
						[
							'icon'        => 'fa-copy',
							'title'       => 'Multiple Instance',
							'description' => 'You can use multiple radio player in a single page.',
						],
						[
							'icon'        => 'fa-external-link',
							'title'       => 'Popup Player',
							'description' => 'Popup radio player is available to play the radio in a new popup window.',
						],
						[
							'icon'        => 'fa-text-width',
							'title'       => 'Current Song Title',
							'description' => 'Radio player can grap and play the current playing song title.',
						],
						[
							'icon'        => 'fa-play-circle-o',
							'title'       => 'Continuous Playing',
							'description' => 'Automatically starts playing after every page reload.',
						],
						[
							'icon'        => 'fa-code',
							'title'       => 'Shortcode Player',
							'description' => 'Display radio player anywhere using the shortcode.',
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


<!--demos -->
<section id="demos" class="section-demos">

	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<h2 class="section-title"><span>Demos</span></h2>
			</div>

			<div class="col-md-4">
				<h4 class="text-center mb-3">Player Skin 1</h4>
				<?php echo do_shortcode( '[radio_player id=102]' ); ?>
			</div>

			<div class="col-md-4">
				<h4 class="text-center mb-3">Player Skin 2</h4>
				<?php echo do_shortcode( '[radio_player id=104]' ); ?>
			</div>

			<div class="col-md-4">
				<h4 class="text-center mb-3">Player Skin 3</h4>
				<?php echo do_shortcode( '[radio_player id=106]' ); ?>
			</div>

			<div class="col-md-4">
				<h4 class="text-center mb-3">Player Skin 4</h4>
				<?php echo do_shortcode( '[radio_player id=111]' ); ?>
			</div>

			<div class="col-md-4">
				<h4 class="text-center mb-3">Player Skin 5</h4>
				<?php echo do_shortcode( '[radio_player id=112]' ); ?>
			</div>

			<div class="col-md-4">
				<h4 class="text-center mb-3">Player Skin 6</h4>
				<?php echo do_shortcode( '[radio_player id=113]' ); ?>
			</div>

		</div>
	</div>
</section>


<?php

echo do_shortcode( '[radio_player id=106 player_type="full-width"]');

get_footer( 'wp-radio' );
