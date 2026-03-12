<?php
/**
 * Template Name: Contact Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldenmonkey
 */

get_header();
?>
<?php get_template_part( 'template-parts/content', 'header' ); ?>

<div class="container">
	<div class="text-brand text-center mt-5">
		
		<p class="sub-text mb-4"><?php echo get_field('footer_title'); ?></p>
		<p class="sub-text"><?php echo get_field('footer_subtitle'); ?></p>
	</div>

	<main id="primary">

		<?php
		while ( have_posts() ) :
			the_post();
      
			get_template_part( 'template-parts/content', 'contact' );
      get_template_part( 'template-parts/about', 'map' );			

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</div>

<?php get_template_part( 'template-parts/footer', 'banner' ); ?>

<?php
get_footer();
