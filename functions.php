<?php
/**
 * KN Webwork 3.0 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package KN_Webwork_3.0
 */

if ( ! function_exists( 'kn_webwork_3_0_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function kn_webwork_3_0_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on KN Webwork 3.0, use a find and replace
		 * to change 'kn-webwork-3-0' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'kn-webwork-3-0', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'kn-webwork-3-0' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'kn_webwork_3_0_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'kn_webwork_3_0_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kn_webwork_3_0_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'kn_webwork_3_0_content_width', 640 );
}
add_action( 'after_setup_theme', 'kn_webwork_3_0_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kn_webwork_3_0_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'kn-webwork-3-0' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'kn-webwork-3-0' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'kn_webwork_3_0_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kn_webwork_3_0_scripts() {
	wp_enqueue_style( 'kn-webwork-3-0-style', get_stylesheet_uri(), array(), filemtime( get_stylesheet_directory() . '/style.css' ) );

	wp_enqueue_style( 'josefin-sans', 'https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,400i,60
		0i');

	wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css');

	if ( is_front_page() ) {
		wp_enqueue_script( 'front-page-scripts', get_template_directory_uri() . '/js/front-page.js', array('jquery'), null, true);
	}
	
	if ( is_page('work-with-us') ) {
		wp_enqueue_script( 'wwu-scripts', get_template_directory_uri() . '/js/work-with-us.js', array('jquery'), null, true);
	}

	if ( is_page('about') ) {
		wp_enqueue_script( 'about-scripts', get_template_directory_uri() . '/js/about.js', array('jquery'), filemtime(get_stylesheet_directory() . '/js/about.js'), true);
	}

	if ( is_archive() ) {
		wp_enqueue_script( 'portfolio-scripts', get_template_directory_uri() . '/js/portfolio.js', array('jquery'), null, true);
	}

	wp_enqueue_script( 'header-scripts', get_template_directory_uri() . '/js/header.js', array('jquery'), null, true );

	wp_enqueue_script( 'kn-webwork-3-0-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'kn-webwork-3-0-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kn_webwork_3_0_scripts' );

/**
  * Add post type for Portfolio Items
  */
require_once 'inc/cpt-project.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

