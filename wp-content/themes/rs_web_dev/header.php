<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rs_web_dev
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
<div id="page" class="site page-wrap">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'rs_web_dev' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding main blgreen">
			<div class="container">
                <div class="top-bar">
                    <a href="index.html"><img src="wp-content/themes/rs_web_dev/assets/images/rs-logo.png" class="top-logo"><span class="top-title">Web Development</span></a>
                </div>
            </div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'rs_web_dev' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		<?php if(is_front_page()) { ?>
			<div class="banner">
	            <div class="container">
	                <div class="projects">
	                    <a href="projects.html"><img src="wp-content/themes/rs_web_dev/assets/icons/portfolio.png" title="Portfolio" alt="Portfolio" class="portfolio"><label class="portfolio-label">Portfolio</label></a>
	                    <div data-plugin="flexslider" class="flexslider">
	                        <ul class="slides ul-none">
	                            <li>
	                                <a href="http://laurennygard.com" target="_blank"><img src="wp-content/themes/rs_web_dev/assets/images/lnp.png" title="Lauren Nygard Photography" alt="Screenshot of the Lauren Nygard Photography website" class="img"></a>
	                            </li>
	                            <li>
	                                <a href="http://monicaroyal.com" target="_blank"><img src="wp-content/themes/rs_web_dev/assets/images/mrp.png" title="Monica Royal Fine Art Photography" alt="Screenshot of the Monica Royal Fine Art Photography website" class="img"></a>
	                            </li>
	                            <li>
	                                <a href="ces/" target="_blank"><img src="wp-content/themes/rs_web_dev/assets/images/ces.png" title="Creative Energy Solutions" alt="Screenshot of the Creative Energy Solutions website" class="img"></a>
	                            </li>
	                            <li>
	                                <a href="http://shaunhigleyartistry.com" target="_blank"><img src="wp-content/themes/rs_web_dev/assets/images/shp.png" title="Shaun Higley Artistry" alt="Screen shot of Shaun Higley Artistry" class="img"></a>
	                            </li>
	                        </ul>
	                    </div>
	                </div>
	            </div>
	        </div>
		<?php } ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
        