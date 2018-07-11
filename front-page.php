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
                <h2 class="c-hero__intro l-hero__intro">Las Vegas Grown</h2>
                <h1 class="c-hero__title l-hero__title col-sm-6 offset-sm-3">FULL STACK <span class="c-hero__subtitle">APPS &amp; WEBSITES</span></h1>
                <a class="c-hero__cta l-hero__cta col-sm-4 offset-sm-8" href="<?php echo bloginfo('url'); ?>/work-with-us">hire us</a>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
