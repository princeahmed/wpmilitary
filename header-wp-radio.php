<!doctype html>
<html lang="<?php language_attributes(); ?>">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body>


<nav id="header-nav" class="navbar navbar-expand-lg">
	<div class="container">
		<a class="navbar-brand" href="<?php echo site_url( '/wp-radio' ); ?>">
			<img src="<?php echo get_theme_file_uri( 'assets/images/wp-radio/play-button.svg' ) ?>" class="img-fluid">
			<span>WP RADIO</span>
		</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>

		<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
			<ul class="nav navbar-nav menu_nav ml-auto">
				<li class="nav-item"><a class="nav-link" href="<?php echo site_url(); ?>">Home</a></li>
				<li class="nav-item"><a href="#features" class="nav-link">Features</a></li>
				<li class="nav-item"><a href="#testimonials" class="nav-link">Testimonials</a></li>
				<li class="nav-item"><a href="#pricing" class="nav-link">Pricing</a></li>
				<li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
			</ul>
		</div>

	</div>
</nav>
