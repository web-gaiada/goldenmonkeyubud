<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldenmonkey
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-12 col-lg-10 offset-lg-1 text-brand mt-5'); ?>>
    <?php //echo do_shortcode('[contact-form-7 id="56" title="Contact form 1"]'); ?>
    <?php echo do_shortcode('[contact-form-7 id="31b3b41" title="Contact Form - Ubud"]'); ?>

</article><!-- #post-<?php the_ID(); ?> -->