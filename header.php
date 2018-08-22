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
$classes = '';

if ( is_page('about') ) {
	$classes = array(
	    'c-about',
	    'l-about',
	    );
}

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-74202208-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-74202208-1');
	</script>
</head>

<body <?php body_class($classes); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">

		<nav id="site-navigation" class="c-main-nav l-main-nav container clearfix">
			<div class="c-main-nav__logo">
				<a href="<?php echo bloginfo('url'); ?>" class="o-image-link">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/knww-logo.png" alt="KN Webwork Logo">
				</a>
			</div>
			<button class="c-main-nav__menu-toggle l-main-nav__menu-toggle" aria-controls="primary-menu" aria-expanded="false"></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'menu_class'	 => 'c-main-nav__menu l-main-nav__menu',
				'container_class'=> 'c-main-nav__menu-container l-main-nav__menu-container',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
