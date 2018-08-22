<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package KN_Webwork_3.0
 */

?>

<div class="c-contact__background l-contact__background"></div>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="col-10 col-xl-6 col-lg-8  offset-xl-3 offset-lg-2 offset-sm-1">
        <h1 class="c-contact-cta l-contact-cta"><span class="c-contact-cta__first-line l-contact-cta__first-line">Dreaming up a Project?</span>
            <span class="c-contact-cta__second-line l-contact-cta__second-line">We can Bring it to Life.</span>
        </h1>
        <p class="c-contact__copy l-contact__copy">
            As a full stack team, we handle all stages of the development cycle in-house. That means from design to deployment, you'll work directly with us, with no outside contractors or middlemen. We build ecommerce sites, mobile apps and can handle most custom ideas you have. Drop us a line. If it’s a weekday we’ll get back to you within 24 hours ;) 
        </p>
        
            <form class="c-work-form l-work-form l-work-form--hidden">
                <div class="c-work-form__container l-work-form__container l-work-form__container--half">
                    <label class="c-work-form__label l-work-form__label">NAME</label>
                    <input id="client-name" name="client-name" class="c-work-form__field l-work-form__field l-work-form__field--half"></input>
                </div>
                <div class="c-work-form__row d-flex justify-content-between flex-wrap">
                    <div class="c-work-form__container l-work-form__container l-work-form__container--half">
                        <label class="c-work-form__label l-work-form__label l-work-form__label--half">EMAIL</label><!--
                        -->
                        <input id="client-email" name="client-email" class="c-work-form__field l-work-form__field l-work-form__field--half" name="client-email"></input><!--
                        -->
                    </div>
                    <div class="c-work-form__container l-work-form__container l-work-form__container--half">
                        <label class="c-work-form__label l-work-form__label l-work-form__label--half o">PHONE</label>
                        <input id="client-phone" name="client-phone" class="c-work-form__field l-work-form__field l-work-form__field--half" name="client-phone"></input>
                    </div>
                </div>
                <div class="c-work-form__container l-work-form__container">
                    <label class="c-work-form__label l-work-form__label">PROJECT DESCRIPTION</label>
                    <textarea id="client-project" name="client-project" class="c-work-form__textarea l-work-form__textarea"></textarea>
                </div>
                <button type="submit" class="c-work-form__submit l-work-form__submit">submit</button>
            </form>
        

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
