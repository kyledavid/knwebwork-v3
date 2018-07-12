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
    <div class="col-sm-6 offset-sm-3">
        <header class="entry-header">
            <?php the_title( '<h1 class="o-page-header l-page-header">', '</h1>' ); ?>
        </header><!-- .entry-header -->
        
            <form class="c-work-form l-work-form">
                <label class="c-work-form__label l-work-form__label">NAME</label>
                <input id="client-name" name="client-name" class="c-work-form__field l-work-form__field"></input>
                <label class="c-work-form__label l-work-form__label l-work-form__label--half">EMAIL</label><!--
                --><label class="c-work-form__label l-work-form__label l-work-form__label--half">PHONE</label>
                <input id="client-email" name="client-email" class="c-work-form__field l-work-form__field l-work-form__field--half" name="client-email"></input><!--
                --><input id="client-phone" name="client-phone" class="c-work-form__field l-work-form__field l-work-form__field--half" name="client-phone"></input>
                <label class="c-work-form__label l-work-form__label">PROJECT DESCRIPTION</label>
                <textarea id="client-project" name="client-project" class="c-work-form__textarea l-work-form__textarea"></textarea>
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
