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

<main id="primary" class="delivery-page-wrapper bg-white">
  <?php get_template_part('template-parts/content', 'header'); ?>

  <div class="container my-5 py-lg-4">
    <!-- Intro Section -->
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center">
        <div class="text-intro fs-5 text-secondary px-3" style="line-height: 1.8; font-weight: 300;">
          <?php echo get_field('delivery_text'); ?>
        </div>
        <?php if (get_field('delivery_button_code')): ?>
          <div class="mt-5">
            <?php the_field('delivery_button_code'); ?>
          </div>
        <?php endif; ?>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <style>
          /* Tabs Styling - Matched with front-page.php */
          .delivery-tabs .nav-link {
            color: #000;
            background-color: #fff;
            border-color: #dee2e6 !important;
            transition: all 0.3s ease;
          }

          .delivery-tabs .nav-link:hover:not(.active) {
            background-color: #f8f9fa !important;
            color: #b40304 !important;
            border-color: #b40304 !important;
          }

          .delivery-tabs .nav-link.active {
            background-color: #b40304 !important;
            color: #fff !important;
            border-color: transparent !important;
            outline: none !important;
            box-shadow: none !important;
          }

          /* [A11Y FIXED]: Indikator border fokus untuk interaksi Keyboard */
          .delivery-tabs .nav-link:focus-visible {
            outline: 3px solid #111 !important;
            outline-offset: -3px;
            box-shadow: 0 0 0 4px rgba(180, 3, 4, 0.4) !important;
          }

          /* Delivery Card Styling */
          .delivery-card-container {
            overflow: hidden;
            border-radius: 4px;
            /* Subtle rounding */
            height: 280px;
            /* Fixed height for consistency */
            transition: all 0.4s ease;
          }

          .delivery-card-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
          }

          .delivery-card-container .img-cover {
            transition: transform 0.6s ease;
            z-index: 1;
            filter: brightness(0.7);
            /* Darken bg a bit to pop logos */
          }

          .delivery-card-container:hover .img-cover {
            transform: scale(1.1);
          }

          .delivery-card-content {
            position: relative;
            z-index: 2;
            padding: 2rem;
          }

          .img-client {
            max-height: 100px;
            width: auto;
            transition: transform 0.3s ease;
            filter: drop-shadow(0 5px 15px rgba(0, 0, 0, 0.2));
          }

          .delivery-card-container:hover .img-client {
            transform: scale(1.08);
          }

          /* Platform Colors */
          .bg-grabfood {
            background-color: #00b14f !important;
          }

          .bg-gofood {
            background-color: #00aa13 !important;
          }

          /* Custom Scroll Behavior for Tabs on Mobile */
          @media (max-width: 768px) {
            .delivery-tabs {
              flex-wrap: nowrap;
              overflow-x: auto;
              -webkit-overflow-scrolling: touch;
              padding-bottom: 10px;
            }

            .delivery-tabs .nav-item {
              flex: 0 0 auto;
            }

            .delivery-card-container {
              height: 220px;
            }
          }
        </style>

        <!-- Navigation Tabs -->
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
            <div class="container-fluid px-0">
              <div class="row g-3 g-lg-4">
                <!-- Home Delivery (GloriaFood) -->
                <div class="col-12 col-md-6 col-lg-4">
                  <div
                    class="bg-dark position-relative delivery-card-container d-flex align-items-center justify-content-center">
                    <div class="delivery-card-content text-center w-100">
                      <div id="Delivery_Gloria_Food">
                        <span data-glf-cuid="9e72489a-49f1-496d-a753-c535e7babe5b"
                          data-glf-ruid="196905ff-9f7c-47fb-83ca-d08ba5e042f1">
                          <!-- [A11Y FIXED: Tambahkan tabindex dan role agar div clickable dibaca screen reader] -->
                          <div class="d-block delivery-trigger" style="cursor:pointer;" tabindex="0" role="button" aria-label="Order Delivery via GloriaFood">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/home-delivery.png"
                              alt="Home Delivery" class="img-fluid img-client">
                          </div>
                        </span>
                      </div>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/delivery-background.jpg"
                      class="img-cover position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Background">
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

                    $custom_bg = get_sub_field('banner_background_image');
                    $bg_url = $custom_bg ? (is_array($custom_bg) ? $custom_bg['url'] : wp_get_attachment_image_url($custom_bg, 'full')) : get_template_directory_uri() . '/images/delivery-background.jpg';
                    ?>
                    <div class="col-12 col-md-6 col-lg-4">
                      <div
                        class="<?php echo $bg_class; ?> position-relative delivery-card-container d-flex align-items-center justify-content-center">
                        <div class="delivery-card-content text-center w-100">
                          <!-- [A11Y FIXED: Tambahkan aria-label agar tidak ambigu dan string check WP image param] -->
                          <a rel="nofollow" id="<?php echo esc_attr($banner_id); ?>"
                            href="<?php the_sub_field('banner_link'); ?>" class="text-white stretched-link delivery-trigger"
                            target="_blank" aria-label="Order Delivery via <?php echo esc_attr($banner_id); ?>">
                            <?php
                            $delivery_image = get_sub_field('delivery_image');
                            echo wp_get_attachment_image($delivery_image, "full", false, array("class" => "img-fluid img-client"));
                            ?>
                          </a>
                        </div>
                        <img src="<?php echo esc_url($bg_url); ?>"
                          class="img-cover position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Background">
                      </div>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
            </div>
          </div>

          <!-- Sanur Tab -->
          <div class="tab-pane fade" id="sanur" role="tabpanel" aria-labelledby="sanur-tab">
            <div class="container-fluid px-0">
              <div class="row g-3 g-lg-4">
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

                    $custom_bg = get_sub_field('banner_background_image');
                    $bg_url = $custom_bg ? (is_array($custom_bg) ? $custom_bg['url'] : wp_get_attachment_image_url($custom_bg, 'full')) : get_template_directory_uri() . '/images/delivery-background.jpg';
                    ?>
                    <div class="col-12 col-md-6 col-lg-4">
                      <div
                        class="<?php echo $bg_class; ?> position-relative delivery-card-container d-flex align-items-center justify-content-center">
                        <div class="delivery-card-content text-center w-100">
                          <!-- [A11Y FIXED: Tambahkan aria-label agar tidak ambigu dan string check WP image param] -->
                          <a rel="nofollow" id="<?php echo esc_attr($banner_id); ?>"
                            href="<?php the_sub_field('banner_link'); ?>" class="text-white stretched-link delivery-trigger"
                            target="_blank" aria-label="Order Delivery via <?php echo esc_attr($banner_id); ?>">
                            <?php
                            $delivery_image = get_sub_field('delivery_image');
                            echo wp_get_attachment_image($delivery_image, "full", false, array("class" => "img-fluid img-client"));
                            ?>
                          </a>
                        </div>
                        <img src="<?php echo esc_url($bg_url); ?>"
                          class="img-cover position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Background">
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

<?php get_footer();
