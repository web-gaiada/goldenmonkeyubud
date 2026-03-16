<?php
/**
 * Template Name: Delivery Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldenmonkey
 */

get_header();
?>
<main id="primary">
  <?php get_template_part('template-parts/content', 'header'); ?>

  <div class="container-fluid my-5">
    <div class="row">
      <div class="col-12 text-center text-intro">
        <?php echo get_field('delivery_text'); ?>
      </div>
      <?php if (get_field('delivery_button_code')): ?>
        <div class="col-12 text-center my-5">
          <?php the_field('delivery_button_code'); ?>
        </div>
      <?php endif; ?>
    </div>

    <div class="row mb-5">
      <div class="col-12">
        <style>
          .delivery-tabs .nav-link {
            color: #000;
            background-color: #fff;
            border-color: #dee2e6 !important;
            transition: all 0.3s ease;
          }

          .delivery-tabs .nav-link.active {
            background-color: #b40304 !important;
            color: #fff !important;
            border-color: #b40304 !important;
          }

          /* Grab & Gojek Green Colors */
          .bg-grabfood {
            background-color: #00b14f !important;
          }

          .bg-gofood {
            background-color: #00aa13 !important;
          }

          .bg-grabfood .img-cover,
          .bg-gofood .img-cover {
            opacity: 1;
          }
        </style>
        <ul class="nav nav-pills justify-content-center delivery-tabs mb-5" id="deliveryTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active px-5 py-3 fw-bold text-uppercase rounded-0 border" id="ubud-tab"
              data-bs-toggle="pill" data-bs-target="#ubud" type="button" role="tab" aria-controls="ubud"
              aria-selected="true">UBUD</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link px-5 py-3 fw-bold text-uppercase rounded-0 border" id="sanur-tab"
              data-bs-toggle="pill" data-bs-target="#sanur" type="button" role="tab" aria-controls="sanur"
              aria-selected="false">SANUR</button>
          </li>
        </ul>

        <div class="tab-content" id="deliveryTabContent">
          <!-- Ubud Tab -->
          <div class="tab-pane fade show active" id="ubud" role="tabpanel" aria-labelledby="ubud-tab">
            <div class="container">
              <div class="row g-1 g-lg-5">
                <!-- GloriaFood / Home Delivery khusus Ubud -->
                <div class="col-12 col-lg-4">
                  <div class="bg-dark position-relative delivery-section-height">
                    <div class="d-flex h-100 align-items-center text-white featured-text justify-content-center">
                      <div id="Delivery_Gloria_Food" class="p-3 p-lg-5">
                        <span data-glf-cuid="9e72489a-49f1-496d-a753-c535e7babe5b"
                          data-glf-ruid="196905ff-9f7c-47fb-83ca-d08ba5e042f1">
                          <div class="d-block delivery-trigger" style="cursor:pointer;">
                            <img src="<?php bloginfo('template_url'); ?>/images/home-delivery.png" alt="Home Delivery"
                              img-client>
                          </div>
                        </span>
                      </div>
                    </div>
                    <img src="<?php bloginfo('template_url'); ?>/images/delivery-background.jpg" class="img-cover">
                  </div>
                </div>

                <?php if (have_rows('image_list')): ?>
                  <?php while (have_rows('image_list')):
                    the_row();
                    $banner_id = get_sub_field('banner_id');
                    $bg_class = 'bg-dark';
                    if (stripos($banner_id, 'grab') !== false) {
                      $bg_class = 'bg-grabfood';
                    } elseif (stripos($banner_id, 'go') !== false) {
                      $bg_class = 'bg-gofood';
                    }

                    // Get custom background image
                    $custom_bg = get_sub_field('banner_background_image');
                    $bg_url = $custom_bg ? (is_array($custom_bg) ? $custom_bg['url'] : wp_get_attachment_image_url($custom_bg, 'full')) : get_template_directory_uri() . '/images/delivery-background.jpg';
                    ?>
                    <div class="col-12 col-lg-4">
                      <div class="<?php echo $bg_class; ?> position-relative delivery-section-height">
                        <div class="d-flex h-100 align-items-center text-white featured-text justify-content-center">
                          <div class="p-3 p-lg-5">
                            <a rel="nofollow" id="<?php the_sub_field('banner_id'); ?>"
                              href="<?php the_sub_field('banner_link'); ?>"
                              class="text-white stretched-link delivery-trigger" target="_blank">
                              <div class="d-block">
                                <?php $delivery_image = get_sub_field('delivery_image'); ?>
                                <?php echo wp_get_attachment_image($delivery_image, "full", "", array("class" => "img-client")); ?>
                              </div>
                            </a>
                          </div>
                        </div>
                        <img src="<?php echo $bg_url; ?>" class="img-cover">
                      </div>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
            </div>
          </div>

          <!-- Sanur Tab -->
          <div class="tab-pane fade" id="sanur" role="tabpanel" aria-labelledby="sanur-tab">
            <div class="container">
              <div class="row g-1 g-lg-5">
                <?php if (have_rows('image_list_sanur')): ?>
                  <?php while (have_rows('image_list_sanur')):
                    the_row();
                    $banner_id = get_sub_field('banner_id');
                    $bg_class = 'bg-dark';
                    if (stripos($banner_id, 'grab') !== false) {
                      $bg_class = 'bg-grabfood';
                    } elseif (stripos($banner_id, 'go') !== false) {
                      $bg_class = 'bg-gofood';
                    }

                    // Get custom background image
                    $custom_bg = get_sub_field('banner_background_image');
                    $bg_url = $custom_bg ? (is_array($custom_bg) ? $custom_bg['url'] : wp_get_attachment_image_url($custom_bg, 'full')) : get_template_directory_uri() . '/images/delivery-background.jpg';
                    ?>
                    <div class="col-12 col-lg-4">
                      <div class="<?php echo $bg_class; ?> position-relative delivery-section-height">
                        <div class="d-flex h-100 align-items-center text-white featured-text justify-content-center">
                          <div class="p-3 p-lg-5">
                            <a rel="nofollow" id="<?php the_sub_field('banner_id'); ?>"
                              href="<?php the_sub_field('banner_link'); ?>"
                              class="text-white stretched-link delivery-trigger" target="_blank">
                              <div class="d-block">
                                <?php $delivery_image = get_sub_field('delivery_image'); ?>
                                <?php echo wp_get_attachment_image($delivery_image, "full", "", array("class" => "img-client")); ?>
                              </div>
                            </a>
                          </div>
                        </div>
                        <img src="<?php echo $bg_url; ?>" class="img-cover">
                      </div>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</main>

<?php
get_footer();