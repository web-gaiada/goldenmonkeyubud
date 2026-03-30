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
        <div class="entry-content text-start pb-5 mt-4">
            <?php the_content(); ?>
        </div><!-- .entry-content -->
    </div>
</article>