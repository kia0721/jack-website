<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Cartel
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php get_sidebar(); ?>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
	
		
		
		<div class="main-menu">
			<div class="container"><div class="row">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary','menu_id' => 'cartel' ) ); ?>
				</nav><!-- #site-navigation -->
				
			</div></div>
		</div> <!-- end-main-menu -->
		
		
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
