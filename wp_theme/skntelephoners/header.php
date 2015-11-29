<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <script src="<?php bloginfo('template_directory'); ?>/script.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--
	<meta name= "robots"  content="all"/>
	<meta name= "Googlebot" content="all"/>
	<meta name= "Copyright" content="SKN Telephoners"/>
	<title>Koło Naukowe Telephoners AGH</title>
	
	-->
	
	<?php wp_head(); ?>
	<?php
	/*
	$slide = get_theme_mod( 'slide_header_image' );
	if ( 'yes' === $slide && true === is_front_page() ) : */
		?><!--
		<script>
			jQuery(function ($) {
				var slide = $('.bxslider').bxSlider({
					auto: false,
					speed: 2000,
					pause: 4000,
					mode: 'fade',
					captions: false,
				});
				$(window).resize(function () {
					slide.reloadSlider();
				});
			});
		</script>-->
	<?php /* endif;*/ ?>
</head>
<body <?php body_class(); ?>>

	<section class="wrapper">

		<header class="header">
			<a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo/logo_final.svg" alt="<?php bloginfo( 'name' ); ?>"/>
			</a>
			<nav class="header-menu">
				<?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>
		</header>
		

