<?php
/**
 * Template Name: Reservation Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldenmonkey
 */

get_header();
?>
<?php get_template_part( 'template-parts/content', 'header' ); ?>

<?php if(get_field('resdiary_widget')): ?>
    <div id="reservations" class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <h3 class="mb-4 text-center"><?php the_field('sub_title'); ?></h3>
            </div>
            <div class="col-12">
                <!--?php echo the_field('resdiary_widget'); ?-->  
				<div id="rd-widget-frame" style="max-width: 600px; margin: auto;"></div>
<input id="rdwidgeturl" name="rdwidgeturl" value="https://booking.resdiary.com/widget/Standard/GoldenMonkey/19955" type="hidden">
<script type="text/javascript" src="https://booking.resdiary.com/bundles/WidgetV2Loader.js"></script>
				
            </div> 
        </div>
        <?php get_template_part( 'template-parts/about', 'map' ); ?>     
    </div>
<?php endif; ?>
<?php get_template_part( 'template-parts/footer', 'banner' ); ?>
<?php
get_footer();
