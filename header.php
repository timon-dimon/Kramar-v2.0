<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Kramar_Motorsport
 * @since Kramar Motorsport 2.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=0" />

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="favicon.ico" />
<link rel="apple-touch-icon" href="apple-touch-icon.png" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>

<meta name="yandex-verification" content="55d174b9dea995a6" />
<meta name="google-site-verification" content="HtfVyNGcDS5ks3PJvG6RkmekSw0dgNdjuk-nHqM7k3o" />


</head>

<body>

<div id="outer-wrap" class="carbon">

	<div id="top-nav">
		<div class="inner-wrap">
			<?php dynamic_sidebar( 'header-aside' ); ?>
			<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false ) ); ?>
			<div class="phone-head">+7 (910) 433-38-90</div>
		</div>
	</div>

	<div id="inner-wrap">
		
		<div class="header clearfix">
				
			<div class="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="site-title"><h1><?php bloginfo( 'name' ); ?></h1></a>
			</div>

			<div class="head-right">
				
				<div class="phone-head-800">+7 (910) 433-38-90</div>
				<div class="social_type24">
					<span class="social-icon-wrap24">
						<a href="http://www.facebook.com/kramar.motorsport" target="_blank"><span class="social-s1-24 s-s-24-facebook"></span></a>
					</span>
					<span class="social-icon-wrap24">
						<a href="http://instagram.com/kramar_motorsport" target="_blank"><span class="social-s1-24 s-s-24-instagram"></span></a>
					</span>
					<span class="social-icon-wrap24">
						<a href="http://www.youtube.com/user/kramarmotorsport" target="_blank"><span class="social-s1-24 s-s-24-youtube"></span></a>
					</span>
					<span class="social-icon-wrap24">
						<a href="http://google.com/+Kramar-motorsportRu" target="_blank"><span class="social-s1-24 s-s-24-googleplus"></span></a>
					</span>
					<span class="social-icon-wrap24">
						<a href="https://ru.foursquare.com/v/kramar-motosport/52fddfd2498e2c3cad8aadd2" target="_blank"><span class="social-s1-24 s-s-24-foursquare"></span></a>
					</span>
					<span class="social-icon-wrap24">
						<a href="https://twitter.com/Kramar_sport" target="_blank"><span class="social-s1-24 s-s-24-twitter"></span></a>
					</span>
					<span class="social-icon-wrap24">
						<a href="http://vk.com/kramarmotorsport" target="_blank"><span class="social-s1-24 s-s-24-vk"></span></a>
					</span>
				</div>
				
			</div>

		</div>

		<div class="clearfix"> </div>

		<div class="container">