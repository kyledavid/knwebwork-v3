<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package KN_Webwork_3.0
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container">
			<div class="col-sm-7 offset-sm-3">
			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="o-page-header l-page-header l-page-header--hidden">Projects</h1>
				</header><!-- .page-header -->
				<div class="c-projects l-projects">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;

					// the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
			</div><!-- /c-projects -->
		</div><!-- /col -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
