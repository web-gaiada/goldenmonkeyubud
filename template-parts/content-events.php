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

  <div class="container-fluid my-4">
    <div class="row justify-content-center">
      <?php if( have_rows('event_list') ): ?>
        <?php while ( have_rows('event_list') ) : the_row(); ?>
        <div class="col-12 col-lg-5 text-center position-relative bg-third-brand m-3 gx-0">
          <div class="p-5 d-flex align-items-center flex-column h-100 justify-content-center featured-text">
            <a href="<?php bloginfo('url')?><?php the_sub_field('event_link');?>" class="stretched-link" aria-label="Chinese Restaurant Event"></a>
          </div>
          <?php $event_image = get_sub_field('event_image'); ?>
          <?php echo wp_get_attachment_image($event_image, "full", "", array( "class" => "img-cover" )); ?> 
        </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
  <!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
