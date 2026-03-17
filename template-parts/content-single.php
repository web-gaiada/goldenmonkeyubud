<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldenmonkey
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-12 col-lg-8 post-content'); ?>>
    <div class="px-2 px-lg-0 pe-lg-5">
        <div class="text-center pb-4">
            <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
            <?php endif; ?>
        </div>
        <div class="entry-content text-start pb-5">
            <?php the_content(); ?>
        </div><!-- .entry-content -->
    </div>
</article>