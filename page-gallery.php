<?php
/**
 * Template Name: Gallery Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldenmonkey
 */

get_header();
?>
	<main id="primary">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'header' );
			get_template_part( 'template-parts/content', 'gallery' );			

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
<?php get_template_part( 'template-parts/footer', 'banner' ); ?>
<?php
get_footer();
