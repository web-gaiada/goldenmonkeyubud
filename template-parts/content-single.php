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
    <div class="px-2 px-lg-5">
        <div class="entry-content text-start pb-5 mt-4">
            <?php the_content(); ?>
        </div><!-- .entry-content -->
    </div>
</article>

<style>
    /* Styling agar hyperlink yang ada di dalam badan artikel bisa dibaca dan dikenali dengan baik */
    .entry-content a {
        color: #b40304 !important;
        /* Warna brand Golden Monkey */
        text-decoration: underline !important;
        font-weight: bold;
        transition: color 0.3s ease;
    }

    .entry-content a:hover {
        color: #111 !important;
        text-decoration: none !important;
    }
</style>