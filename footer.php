<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KN_Webwork_3.0
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="c-site-footer l-site-footer container">
		<div class="c-site-footer__site-info l-site-footer__site-info">
			<span>&copy;copyright 2018 knwebwork</span>
		</div><!-- .site-info -->
        <?php if( !is_page('work-with-us') ): ?>
    		<div class="c-site-footer__contact l-site-footer__contact">
    			<a href="mailto:kyledavid022@gmail.com" class="o-contact-link">contact</a>
    		</div>
        <?php endif; ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
