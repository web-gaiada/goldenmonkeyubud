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

  <?php get_template_part('template-parts/content', 'intro'); ?>

  <div class="container py-5">
    <!-- Tab Navigation -->
    <ul class="nav nav-pills justify-content-center mb-5" id="menuTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active px-5 py-3 fw-bold text-uppercase rounded-0 border" id="ubud-tab"
          data-bs-toggle="pill" data-bs-target="#ubud-content" type="button" role="tab" aria-controls="ubud-content"
          aria-selected="true">Ubud Menu</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link px-5 py-3 fw-bold text-uppercase rounded-0 border" id="sanur-tab" data-bs-toggle="pill"
          data-bs-target="#sanur-content" type="button" role="tab" aria-controls="sanur-content"
          aria-selected="false">Sanur Menu</button>
      </li>
    </ul>

    <div class="tab-content" id="menuTabContent">
      <!-- Ubud Menu Content -->
      <div class="tab-pane fade show active" id="ubud-content" role="tabpanel" aria-labelledby="ubud-tab">
        <?php if (have_rows('menu_gallery')): ?>
          <div class="row py-4">
            <?php while (have_rows('menu_gallery')):
              the_row(); ?>
              <div class="col-6 col-lg-3 g-3">
                <?php $image = get_sub_field('image'); ?>
                <?php echo wp_get_attachment_image($image, "full", false, array("class" => "img-menu w-100 h-auto")); ?>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>

        <?php if (get_field('file_menu_ubud')): ?>
          <div class="text-center py-4">
            <a href="<?php the_field('file_menu_ubud'); ?>"
              class="btn btn-outline-dark rounded-0 px-5 py-3 fw-bold text-uppercase" target="_blank"
              aria-label="Download Ubud Menu PDF">
              <i class="fas fa-file-pdf me-2"></i> See Our Menu (PDF)
            </a>
          </div>
        <?php endif; ?>

        <?php if (have_rows('menu_list')): ?>
          <div class="row" data-masonry='{"percentPosition": true }'>
            <?php while (have_rows('menu_list')):
              the_row(); ?>
              <div class="col-sm-12 col-lg-6 mb-4">
                <div class="card h-100">
                  <div class="card-body">
                    <!-- [A11Y FIXED: Ubah H3 menjadi H2 agar tidak skip level dari H1 di header] -->
                    <h2 class="card-title fs-2 mb-4"><?php the_sub_field('menu_title'); ?></h2>
                    <?php if (have_rows('products')): ?>
                      <?php while (have_rows('products')):
                        the_row(); ?>
                        <div class="row list-dotted gx-0 pb-2">
                          <div class="col-6"><span class="bg-white pe-2 fs-5"><?php the_sub_field('product_name'); ?></span>
                          </div>
                          <div class="col-6 price-right-text"><span
                              class="bg-white ps-2 fs-5"><?php the_sub_field('product_price'); ?></span></div>
                          <div class="col-12"><small class="text-muted"><?php the_sub_field('product_desc'); ?></small></div>
                        </div>
                      <?php endwhile; ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </div>

      <!-- Sanur Menu Content -->
      <div class="tab-pane fade" id="sanur-content" role="tabpanel" aria-labelledby="sanur-tab">
        <?php if (have_rows('menu_gallery_sanur')): ?>
          <div class="row py-4">
            <?php while (have_rows('menu_gallery_sanur')):
              the_row(); ?>
              <div class="col-6 col-lg-3 g-3">
                <?php $image = get_sub_field('image'); ?>
                <?php echo wp_get_attachment_image($image, "full", false, array("class" => "img-menu w-100 h-auto")); ?>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>

        <?php if (get_field('file_menu_sanur')): ?>
          <div class="text-center py-4">
            <a href="<?php the_field('file_menu_sanur'); ?>"
              class="btn btn-outline-dark rounded-0 px-5 py-3 fw-bold text-uppercase" target="_blank"
              aria-label="Download Sanur Menu PDF">
              <i class="fas fa-file-pdf me-2"></i> See Our Menu (PDF)
            </a>
          </div>
        <?php endif; ?>

        <?php if (have_rows('menu_list_sanur')): ?>
          <div class="row" data-masonry='{"percentPosition": true }'>
            <?php while (have_rows('menu_list_sanur')):
              the_row(); ?>
              <div class="col-sm-12 col-lg-6 mb-4">
                <div class="card h-100">
                  <div class="card-body">
                    <!-- [A11Y FIXED: Ubah H3 menjadi H2 agar tidak skip level dari H1 di header] -->
                    <h2 class="card-title fs-2 mb-4"><?php the_sub_field('menu_title'); ?></h2>
                    <?php if (have_rows('products')): ?>
                      <?php while (have_rows('products')):
                        the_row(); ?>
                        <div class="row list-dotted gx-0 pb-2">
                          <div class="col-6"><span class="bg-white pe-2 fs-5"><?php the_sub_field('product_name'); ?></span>
                          </div>
                          <div class="col-6 price-right-text"><span
                              class="bg-white ps-2 fs-5"><?php the_sub_field('product_price'); ?></span></div>
                          <div class="col-12"><small class="text-muted"><?php the_sub_field('product_desc'); ?></small></div>
                        </div>
                      <?php endwhile; ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>

    <!-- .entry-content -->
    <!-- <div class="entry-content mt-5">
      <?php //the_content(); ?>
    </div> -->

  </div>

</article>

<style>
  #menuTab .nav-link {
    color: #000;
    background-color: #fff;
    border-color: #dee2e6 !important;
    transition: all 0.3s ease;
  }

  #menuTab .nav-link:hover:not(.active) {
    background-color: #f8f9fa !important;
    color: #b40304 !important;
    border-color: #b40304 !important;
  }

  #menuTab .nav-link.active {
    background-color: #b40304 !important;
    color: #fff !important;
    border-color: transparent !important;
    outline: none !important;
    box-shadow: none !important;
  }

  /* [A11Y FIXED: Pisahkan style tab keyboard agar mendapatkan cincin sorot yang terlihat jelas bagi tuna netra atau pengguna tab] */
  #menuTab .nav-link:focus-visible {
    outline: 3px solid #111 !important;
    outline-offset: -3px;
    box-shadow: 0 0 0 4px rgba(180, 3, 4, 0.4) !important;
  }

  .list-dotted small {
    display: block;
    line-height: 1.4;
    color: #666;
  }

  /* Fix Masonry layout overlap on tab switch */
  .tab-pane {
    display: block !important;
    height: 0;
    overflow: hidden;
    visibility: hidden;
  }

  .tab-pane.active {
    height: auto;
    overflow: visible;
    visibility: visible;
  }
</style>

<script>
  // Script to handle auto-tab from URL parameter
  document.addEventListener('DOMContentLoaded', function () {
    const urlParams = new URLSearchParams(window.location.search);
    const loc = urlParams.get('loc');
    
    if (loc === 'sanur') {
      const sanurBtn = document.getElementById('sanur-tab');
      if (sanurBtn && typeof bootstrap !== 'undefined') {
        const tab = new bootstrap.Tab(sanurBtn);
        tab.show();
      } else if (sanurBtn) {
        sanurBtn.click();
      }
    } else if (loc === 'ubud') {
      const ubudBtn = document.getElementById('ubud-tab');
      if (ubudBtn && typeof bootstrap !== 'undefined') {
        const tab = new bootstrap.Tab(ubudBtn);
        tab.show();
      } else if (ubudBtn) {
        ubudBtn.click();
      }
    }

    // Script to re-layout Masonry when switching tabs
    var tabEls = document.querySelectorAll('button[data-bs-toggle="pill"]');
    tabEls.forEach(function (tabEl) {
      tabEl.addEventListener('shown.bs.tab', function (event) {
        // Trigger window resize to force Masonry recalculation
        window.dispatchEvent(new Event('resize'));

        // Or manually trigger Masonry if needed
        var msnryEls = document.querySelectorAll('[data-masonry]');
        msnryEls.forEach(function (el) {
          if (typeof Masonry !== 'undefined') {
            var msnry = Masonry.data(el);
            if (msnry) msnry.layout();
          }
        });
      });
    });
  });
</script>