<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package goldenmonkey
 */

get_header();
?>
<div class="bg-brand h-50">
    <div class="container h-100">
        <div class="row py-5 h-100 align-items-center">
            <div class="col-12 py-3 py-lg-5 text-center text-white">
                <h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'goldenmonkey' ); ?></h1>
            </div>
        </div>
    </div>
</div>
<div class="bg-white py-5">
	<main id="primary" class="container py-3 py-lg-5">		
		<div class="row">
			<div class="col-12 col-lg-6 offset-lg-3 text-center lead">
				<img src="<?php bloginfo('template_url');?>/images/not-found.svg" alt="Page not Found" class="img-fluid mb-3">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the navigation links below or call us directly at +62 361 908 2 777', 'goldenmonkey' ); ?></p>
			</div>
		</div>
	</main><!-- #main -->
</div>	

<?php
get_footer();
