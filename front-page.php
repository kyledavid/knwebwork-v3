<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package KN_Webwork_3.0
 */

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main container">
            <div class="c-hero l-hero">
                <h2 class="c-hero__intro l-hero__intro c-hero__intro--hidden p-0 col-sm-5 offset-sm-4">Las Vegas Grown</h2>
                <h1 class="c-hero__title l-hero__title d-flex align-items-center col-sm-5 offset-sm-4">
                    <span class="c-hero__main-title d-flex align-items-center l-hero__main-title l-hero__main-title--hidden">
                        <span class="c-hero__main-bg l-hero__main-bg"></span>
                        <span class="c-hero__main-text l-hero__main-text">FULL STACK</span>
                    </span>
                    <span class="c-hero__subtitle l-hero__subtitle">APPS &amp; WEBSITES</span>
                </h1>
                <a class="c-hero__cta l-hero__cta l-hero__cta--hidden offset-sm-8 o-link--emphasis" href="<?php echo bloginfo('url'); ?>/work-with-us">hire us</a>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
