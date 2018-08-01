<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package KN_Webwork_3.0
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <header class="entry-header container">
            <h1 class="o-page-header o-page-header--team l-page-header offset-sm-3">our team</h1>
        </header><!-- .entry-header -->
        <div class="row d-flex flex-nowrap">
	        <div class="c-profile l-profile working offset-sm-3 d-flex expand">
	        	<div class="c-profile__preview l-profile__preview">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/kyle-steinle-cutout-4.jpg" class="c-profile__dev--hover" alt="Las Vegas Developer Kyle Steinle">
	        		<img src="<?php echo get_template_directory_uri(); ?>/img/kyle-steinle-developer.jpg" class="c-profile__dev" alt="Las Vegas Developer Kyle Steinle">

					<div class="c-profile__overlay l-profile__overlay">
						<h2 class="c-profile__name l-profile__name">kyle steinle</h2>
						<p class="c-profile__cta l-profile__cta">find out more</p>
					</div>		
                    <div class="c-profile__social"></div>
                    <div class="c-profile__bio l-profile__bio">
                        <h2 class="c-profile__bio--name">kyle steinle</h2>
                        <div>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam eraat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum 
                        </div>                
                    </div>               	
	        	</div>
                
                
	        </div>

	        <div class="c-profile l-profile offset-sm-1 col-sm-3 shrink">
	        	<div class="c-profile__preview l-profile__preview">
	        		<img src="<?php echo get_template_directory_uri(); ?>/img/neal-hill-developer.jpg" class="c-profile__dev speshul" alt="Las Vegas Developer Neal Hill">
	        		<img src="<?php echo get_template_directory_uri(); ?>/img/neal-hill-cutout.jpg" class="c-profile__dev--hover" alt="Las Vegas Developer Neal Hill">
					<div class="c-profile__overlay l-profile__overlay">
						<h2 class="c-profile__name l-profile__name">neal<br/> hill</h2>
						<p class="c-profile__cta l-profile__cta">find out more</p>
					</div>				
                    <div class="c-profile__social"></div>        	
	        	</div>
	        </div>
            <div class="col-sm-1"></div>
	    </div>
        

        <?php if ( get_edit_post_link() ) : ?>
            <footer class="entry-footer">
                <?php
                edit_post_link(
                    sprintf(
                        wp_kses(
                            /* translators: %s: Name of current post. Only visible to screen readers */
                            __( 'Edit <span class="screen-reader-text">%s</span>', 'kn-webwork-3-0' ),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        get_the_title()
                    ),
                    '<span class="edit-link">',
                    '</span>'
                );
                ?>
            </footer><!-- .entry-footer -->
        <?php endif; ?>
    </div>
</div><!-- #post-<?php the_ID(); ?> -->
