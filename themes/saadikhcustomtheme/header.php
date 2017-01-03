<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!-- LOADER -->
		<div id="loader-wrapper">
			<div class="bubbles">
				<div class="title">loading</div>
				<span></span>
				<span id="bubble2"></span>
				<span id="bubble3"></span>
			</div>
		</div>
		<!-- #content-block -->
		<div id="content-block">
			<div class="content-center fixed-header-margin">
				<!-- header -->
				<div class="header-wrapper style-3">
					<header class="type-1">
						<div class="header-top">
							<div class="header-top-entry">
								<div class="title"><b>Currency:</b> $ USD<i class="fa fa-caret-down"></i></div>
								<div class="list">
									<a href="#" class="list-entry">$ CAD</a>
									<a href="#" class="list-entry">&#8364; EUR</a>
								</div>
							</div>
							<div class="header-top-entry hidden-xs">
								<div class="title"><i class="fa fa-phone"></i>Any question? Call Us <a href="tel:+987123654"><b>+987 123 654</b></a></div>
							</div>
							<div class="socials-box">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
								<a href="#"><i class="fa fa-youtube"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa-pinterest-p"></i></a>
							</div>
							<div class="menu-button responsive-menu-toggle-class"><i class="fa fa-reorder"></i></div>
							<div class="clear"></div>
						</div>

						<div class="header-middle">
							<div class="logo-wrapper">
								<a id="logo" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="" /></a>
							</div>

							<div class="middle-entry">
								<img src="http://www.makemoneyinlife.com/wp-content/uploads/2014/03/728x90-sample.png" alt="banner">
							</div>

							<div class="right-entries">
								<a class="header-functionality-entry open-search-popup" href="#"><i class="fa fa-search"></i><span>Search</span></a>
								<a class="header-functionality-entry open-cart-popup" href="#"><i class="fa fa-shopping-cart"></i><span>My Cart</span> <b>$255,99</b></a>
							</div>

						</div>

						<div class="close-header-layer"></div>
						<div class="navigation">
							<div class="navigation-header responsive-menu-toggle-class">
								<div class="title">Navigation</div>
								<div class="close-menu"></div>
							</div>
							<div class="nav-overflow">
								<div class="navigation-search-content">
									<div class="toggle-desktop-menu"><i class="fa fa-search"></i><i class="fa fa-close"></i>search</div>
									<?php get_template_part('searchform'); ?>
								</div>
								<!-- nav -->
								<nav>
									<?php custom_nav(); ?>
								</nav>
								<!-- /nav -->
								<div class="navigation-footer responsive-menu-toggle-class">
									<div class="socials-box">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
										<a href="#"><i class="fa fa-youtube"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
										<a href="#"><i class="fa fa-instagram"></i></a>
										<a href="#"><i class="fa fa-pinterest-p"></i></a>
										<div class="clear"></div>
									</div>
									<div class="navigation-copyright">Created by <a href="#">8theme</a>. All rights reserved</div>
								</div>
							</div>
						</div>
					</header>
					<div class="clear"></div>
				</div>
				<!-- /header -->
				<div class="content-push">