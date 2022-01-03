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
<body>

<nav class="primary-nav navbar navbar-expand-sm justify-content-between fixed-top">
	<a href="<?php echo site_url(); ?>" class="navbar-brand">WP Military</a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
		<!-- Links -->
		<ul class="navbar-nav">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
					Products
				</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="<?php echo site_url( 'wp-radio' ); ?>">WP Radio Directory</a>
					<a class="dropdown-item" href="<?php echo site_url( 'radio-player' ); ?>">Radio Player</a>
				</div>
			</li>

			<li class="nav-item"><a class="nav-link" href="<?php echo site_url( 'about-us' ); ?>">About</a></li>
			<li class="nav-item"><a class="nav-link" href="<?php echo site_url( 'docs' ); ?>">Docs</a></li>
			<li class="nav-item"><a class="nav-link" href="<?php echo site_url( 'blog' ); ?>">Blog</a></li>
			<li class="nav-item"><a class="nav-link" href="<?php echo site_url( 'contact' ); ?>">Contact</a></li>
		</ul>
	</div>
</nav>


