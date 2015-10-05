<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Robert-Sidell
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'robert-sidell' ); ?></a>

	<header id="masthead" class="site-header animated fadeIn" role="banner">
		<div class="office-info">
			<div class="office-name">
				<a href="<?php echo get_site_url(); ?>"><h2>SIDELL LAW OFFICES</h2></a>
				<h3>CALIFORNIA, NEVADA, ARIZONA</h3>
			</div>
			<div class="office-number">
				<h2><span class="regular">CALL US 24/7: </span><a href="tel:+17023843847" title="office phone number">702.384.3847</a></h2>
			</div>
		</div>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="mobile-menu">
				<div class="mobile-wrap" id="menu">
					<?php wp_nav_menu( array( 'theme_location' => 'mobile', 'menu_id' => 'mobile-menu' ) ); ?>
				</div>
			</div>
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'robert-sidell' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
