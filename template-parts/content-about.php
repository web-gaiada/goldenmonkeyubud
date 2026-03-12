<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldenmonkey
 */

?>

<article id="post-<?php the_ID(); ?>">

  <?php get_template_part( 'template-parts/content', 'intro' ); ?>

</article><!-- #post-<?php the_ID(); ?> -->
