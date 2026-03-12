<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldenmonkey
 */

get_header();
?>
<div class="top-spacer bg-third-brand"></div>
<div class="bg-white py-5">
	<main id="primary" class="container py-3">
		<div class="row gy-4 gx-lg-4">
		<?php if ( have_posts() ) : ?>
			<header class="col-12 pb-4 text-center">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				* Include the Post-Type-specific template for the content.
				* If you want to override this in a child theme, then include a file
				* called content-___.php (where ___ is the Post Type name) and that will be used instead.
				*/
				get_template_part( 'template-parts/content', 'media' );

			endwhile;
		?>
			<div class="col-12 text-center pt-5">
				<div class="bg-light p-4">
				<?php 
					$current_page = get_query_var( 'paged' ) + 1;
					$pages = $wp_query->max_num_pages;
					$legend_page = $current_page.' OF '.$pages;
				?>
				<?php the_posts_pagination(); ?>
				</div>
			</div>
		<?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>
	</main><!-- #main -->
</div>	
<?php get_template_part( 'template-parts/footer', 'banner' ); ?>
<?php
get_footer();
