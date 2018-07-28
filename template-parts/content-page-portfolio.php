<!-- // flexbox layout
// percentage margin between
// ::before element inline block padding-top 100%
// image 100% height? -->

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
    <div class="col-sm-7 offset-sm-3">
        <header class="entry-header">
            <?php the_title( '<h1 class="o-page-header l-page-header l-page-header--hidden">', '</h1>' ); ?>
        </header><!-- .entry-header -->
        <div class="c-projects l-projects">
            <div class="c-projects__project l-projects__project">
                <img src="http://localhost/wp/KN-Webwork2/wp-content/uploads/2018/07/neal-hill-vegas-developer.jpg"
                    class="c-projects__screenshot l-projects__screenshot">
                <h2 class="c-projects__name l-projects__name">Rock Genius</h2>
                <div class="c-projects__overlay l-projects__overlay">
                    <ul class="c-projects__tech-list l-projects__tech-list">
                        <li>CSS></li>
                        <li>HTML</li>
                        <li>Ruby</li>
                        <li>Haskell</li>
                    </ul>
                </div>
            </div>
            <div class="c-projects__project l-projects__project">
                <img src="http://localhost/wp/KN-Webwork2/wp-content/uploads/2018/07/neal-hill-vegas-developer.jpg"
                    class="c-projects__screenshot l-projects__screenshot">
                <h2 class="c-projects__name l-projects__name">Rock Genius</h2>
            </div>
            <div class="c-projects__project l-projects__project">
            </div>
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