<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KN_Webwork_3.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">

		<nav id="site-navigation" class="c-main-nav l-main-nav container clearfix">
			<div class="c-main-nav__logo">
				<a href="<?php echo bloginfo('url'); ?>" class="o-image-link">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/knww-logo.png">
				</a>
			</div>
			<button class="c-main-nav__menu-toggle l-main-nav__menu-toggle" aria-controls="primary-menu" aria-expanded="false"></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'menu_class'	 => 'c-main-nav__menu l-main-nav__menu l-main-nav__menu--hidden',
				'container_class'=> 'c-main-nav__menu-container l-main-nav__menu-container l-main-nav__menu-container--hidden',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
