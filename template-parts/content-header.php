<div class="position-relative overflow-hidden">
  <!-- Header Image -->
  <?php $header_image = get_field('header_image'); ?>
  <?php echo wp_get_attachment_image($header_image, "full", "", array("class" => "img-header w-100 h-100 object-fit-cover")); ?>

  <!-- Background Overlay -->
  <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.4); z-index: 1;"></div>

  <!-- Content -->
  <div class="position-absolute top-50 start-50 translate-middle text-center text-white w-100 px-3" style="z-index: 2;">
    <h1 class="fw-bold display-4"><?php the_field('header_title'); ?></h1>
    <?php if (get_field('header_subtitle')): ?>
      <h2 class="fw-bold h4 mt-2"><?php the_field('header_subtitle'); ?></h2>
    <?php endif; ?>
    <?php if (have_rows('header_button')): ?>
      <div class="mt-5">
        <?php while (have_rows('header_button')):
          the_row(); ?>
          <a href="<?php bloginfo('url') ?><?php the_sub_field('button_link'); ?>"
            class="btn btn-outline-light rounded-0 btn-lg px-4 py-2 mx-2"><?php the_sub_field('button_text'); ?></a>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>
</div>

<style>
  .img-header {
    min-height: 400px;
    max-height: 600px;
  }

  @media (max-width: 768px) {
    .img-header {
      min-height: 300px;
    }
  }
</style>