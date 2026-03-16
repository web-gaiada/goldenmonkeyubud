<?php
/**
 * Template Name: Locations Page
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

			// Menampilkan Header/Hero Image standar
			get_template_part( 'template-parts/content', 'header' );
			
			// Memanggil konten khusus Locations
			get_template_part( 'template-parts/content', 'locations' );			

		endwhile; // End of the loop.
		?>
        
	</main><!-- #main -->
	
<?php get_template_part( 'template-parts/footer', 'banner' ); ?>
<?php
get_footer();
