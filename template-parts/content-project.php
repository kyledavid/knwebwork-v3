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
<?php
$tech_list = get_field('tech_list');
$project_url = get_field('project_url');
$post_thumb_url = get_the_post_thumbnail_url( $post );

?>

<div class="c-projects__project l-projects__project">
    <a href="<?php echo $project_url; ?>" target="_blank">
        <img src="<?php echo $post_thumb_url; ?>"
            class="c-projects__screenshot l-projects__screenshot">
        <h2 class="c-projects__name l-projects__name"><?php the_title(); ?></h2>
        <div class="c-projects__overlay l-projects__overlay">
            <?php echo $tech_list; ?>
        </div>
    </a>
</div>
         