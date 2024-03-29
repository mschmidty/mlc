<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mlc_v1
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.typekit.net/xsy3xsl.css">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php get_template_part('template-parts/svg'); ?>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<a class="header-logo" href="/">
      <?php 
        if(is_front_page()){
          ?>
            <img src="<?php echo get_template_directory_uri() ."/images/new_logo_white_letters.png"; ?>" alt="Montezuma Land Conservancy Logo">
          <?php
        }else{
          ?>
            <img src="<?php echo get_template_directory_uri() ."/images/logo_new_2020.png"; ?>" alt="Montezuma Land Conservancy Logo">
          <?php
        }
      ?>
		</a>

		<nav id="site-navigation" class="main-navigation header-navigation hidden-mobile-nav">
			<a href="#" class="toggle-close-button">
				<svg  viewBox="0 0 459 459" xmlns="http://www.w3.org/2000/svg" version="1.1">
					<use xlink:href="#close2"></use>
				</svg>
			</a>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
			<a href="/donate/" class="outline-button hidden-donate-mobile"> Donate
		</a>
		</nav><!-- #site-navigation -->
		<a href="/donate/" class="outline-button hidden-mobile-nav hidden-donate-desktop"> Donate
		</a>
		<a href="#" class="toggle-nav-button">
			<svg  viewBox="0 0 459 459" xmlns="http://www.w3.org/2000/svg" version="1.1">
				<use xlink:href="#hamburger3"></use>
			</svg>
		</a>
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
