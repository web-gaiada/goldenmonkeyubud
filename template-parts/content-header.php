<div class="position-relative">
    <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
        <h1 class="fw-bold"><?php the_field('header_title'); ?></h1>
        <?php if( get_field('header_subtitle') ): ?>
          <h2 class="fw-bold"><?php the_field('header_subtitle'); ?></h2>
        <?php endif; ?>
      <?php if( have_rows('header_button') ): ?>
        <?php while ( have_rows('header_button') ) : the_row(); ?>
          <a href="<?php bloginfo('url')?><?php the_sub_field('button_link');?>" class="btn btn-outline-light rounded-0 btn-lg mt-5"><?php the_sub_field('button_text');?></a>
        <?php endwhile; ?>
      <?php endif; ?>      
    </div>
    <?php $header_image = get_field('header_image'); ?>
    <?php echo wp_get_attachment_image($header_image, "full", "", array( "class" => "img-header" )); ?>  
  </div> 