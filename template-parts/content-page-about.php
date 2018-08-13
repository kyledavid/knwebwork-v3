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
            <h1 class="o-page-header o-page-header--team l-page-header l-page-header--team offset-sm-3">our team</h1>
        </header><!-- .entry-header -->
        <div class="row d-flex flex-xl-nowrap l-about__row">
            <div class="c-profile l-profile working offset-xl-3 col-xl-3 offset-lg-1 col-lg-10 col-sm-12 c-profile--left">
                <div class="c-profile__preview l-profile__preview">
                    <div class="c-profile__social l-profile__social d-flex justify-content-between">
                        <a href="google.com"><span class="c-profile__social-github fab fa-github-alt"></span></a>
                        <a href=""><span class="c-profile__social-instagram fab fa-instagram"></span></a>
                        <a href=""><span class="c-profile__social-linkedin fab fa-linkedin-in"></span></a>
                        <a href=""><span class="c-profile__social-twitter fab fa-twitter"></span></a>
                    </div>
                    <div class="l-profile__border"></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/kyle-steinle-cutout-4.jpg" class="c-profile__dev--hover" alt="Las Vegas Developer Kyle Steinle">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/kyle-steinle-developer.jpg" class="c-profile__dev" alt="Las Vegas Developer Kyle Steinle">
                    <div class="c-profile__overlay l-profile__overlay">
                        <h2 class="c-profile__name l-profile__name">kyle steinle</h2>
                        <p class="c-profile__cta l-profile__cta">find out more</p>
                    </div>
                    <div class="c-profile__bio-wrapper l-profile__bio-wrapper">
                        <div class="c-profile__bio l-profile__bio">
                            <h2 class="c-profile__bio-name l-profile__bio-name">kyle steinle</h2>
                            <h5 class="c-profile__bio-title">(frontend developer)</h5>
                            <div class="c-profile__bio-full l-profile__bio-full">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam eraat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum 
                            </div>
                            <div class="c-profile__proficiencies l-profile__proficiencies d-flex justify-content-between">
                                <span class="c-profile__proficiency-1">SASS</span>
                                <span class="c-profile__proficiency-2">Javascript</span>
                                <span class="c-profile__proficiency-3">React</span>
                                <span class="c-profile__proficiency-4">Adobe CC</span>
                            </div>
                            <button class="c-profile__close l-profile__close"><img src="<?php echo get_template_directory_uri(); ?>/img/close.png"></button>              
                        </div>
                    </div>           
                </div>
                
                
                
            </div>

            <div class="l-profile--spacer"></div>

            <div class="c-profile l-profile offset-xl-1 col-xl-3 offset-lg-1 col-lg-10 col-sm-12 c-profile--right">
                <div class="c-profile__preview l-profile__preview">
                    <div class="c-profile__social l-profile__social d-flex justify-content-between">
                        <a href="google.com"><span class="c-profile__social-github fab fa-github-alt"></span></a>
                        <a href=""><span class="c-profile__social-instagram fab fa-instagram"></span></a>
                        <a href=""><span class="c-profile__social-linkedin fab fa-linkedin-in"></span></a>
                        <a href=""><span class="c-profile__social-twitter fab fa-twitter"></span></a>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/neal-hill-developer.jpg" class="c-profile__dev speshul" alt="Las Vegas Developer Neal Hill">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/neal-hill-cutout.jpg" class="c-profile__dev--hover" alt="Las Vegas Developer Neal Hill">
                    <div class="c-profile__overlay l-profile__overlay">
                        <h2 class="c-profile__name l-profile__name">neal<br/> hill</h2>
                        <p class="c-profile__cta l-profile__cta">find out more</p>
                    </div>              
                    <div class="l-profile__border"></div>
                    <div class="c-profile__bio-wrapper l-profile__bio-wrapper">
                        <div class="c-profile__bio l-profile__bio">
                            <h2 class="c-profile__bio-name l-profile__bio-name">kyle steinle</h2>
                            <h5 class="c-profile__bio-title">(frontend developer)</h5>
                            <div class="c-profile__bio-full l-profile__bio-full">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam eraat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum 
                            </div>
                            <div class="c-profile__proficiencies l-profile__proficiencies d-flex justify-content-between">
                                <span class="c-profile__proficiency-1">SASS</span>
                                <span class="c-profile__proficiency-2">Javascript</span>
                                <span class="c-profile__proficiency-3">React</span>
                                <span class="c-profile__proficiency-4">Adobe CC</span>
                            </div>
                            <button class="c-profile__close l-profile__close"><img src="<?php echo get_template_directory_uri(); ?>/img/close.png"></button>              
                        </div>
                    </div>            
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
