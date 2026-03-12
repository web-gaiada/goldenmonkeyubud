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

  <div class="container my-5 py-5">
    <div class="row">
      <?php if( have_rows('gallery_list') ):?>
        <?php while ( have_rows('gallery_list') ) : the_row(); ?>
        <div class="col-12 text-center mt-5 mb-4">
          <h2 class="text-brand fw-bold"><?php the_sub_field('gallery_heading');?></h2>
        </div>
        <?php if( have_rows('image_list') ):?>
          <?php while ( have_rows('image_list') ) : the_row(); ?>
          <div class="col-md-12 col-lg-4 g-4">
            <?php $image = get_sub_field('image'); ?>
            <?php echo wp_get_attachment_image($image, "full", "", array( "class" => "img-fluid" )); ?>
          </div>
          <?php endwhile; ?>
        <?php endif; ?> 
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
  <!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
