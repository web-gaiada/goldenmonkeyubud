<?php
/**
 * Template Name: Event Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldenmonkey
 */

get_header();
get_template_part( 'template-parts/content', 'header' );
?>

<div class="container py-5">
    <div class="row py-3 gy-4">
        <div class="col-12 col-lg-6">
            <?php the_content(); ?>
        </div>
        <div class="col-12 col-lg-6">
            <?php echo get_field('resdiary_widget'); ?>
        </div>
    </div>
</div>


<?php get_template_part( 'template-parts/footer', 'banner' ); ?>

<?php
get_footer();
