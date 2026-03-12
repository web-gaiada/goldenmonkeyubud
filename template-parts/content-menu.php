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

  <div class="container py-5">
    <!-- Tab Navigation -->
    <ul class="nav nav-pills justify-content-center mb-5" id="menuTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active px-5 py-3 fw-bold text-uppercase rounded-0 border" id="ubud-tab" data-bs-toggle="pill" data-bs-target="#ubud-content" type="button" role="tab" aria-controls="ubud-content" aria-selected="true">Ubud Menu</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link px-5 py-3 fw-bold text-uppercase rounded-0 border" id="sanur-tab" data-bs-toggle="pill" data-bs-target="#sanur-content" type="button" role="tab" aria-controls="sanur-content" aria-selected="false">Sanur Menu</button>
      </li>
    </ul>

    <div class="tab-content" id="menuTabContent">
      <!-- Ubud Menu Content -->
      <div class="tab-pane fade show active" id="ubud-content" role="tabpanel" aria-labelledby="ubud-tab">
        <?php if( have_rows('menu_gallery') ): ?>
          <div class="row py-4">
            <?php while ( have_rows('menu_gallery') ) : the_row(); ?>
            <div class="col-6 col-lg-3 g-3">
              <?php $image = get_sub_field('image'); ?>
              <?php echo wp_get_attachment_image($image, "full", "", array( "class" => "img-menu w-100 h-auto" )); ?>
            </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>

        <?php if( have_rows('menu_list') ): ?>
        <div class="row" data-masonry='{"percentPosition": true }'>
          <?php while ( have_rows('menu_list') ) : the_row(); ?>
          <div class="col-sm-12 col-lg-6 mb-4">
            <div class="card h-100">
              <div class="card-body">
                <h3 class="card-title fs-2 mb-4"><?php the_sub_field('menu_title');?></h3>
                <?php if( have_rows('products') ): ?>
                  <?php while ( have_rows('products') ) : the_row(); ?>
                  <div class="row list-dotted gx-0 pb-2">
                    <div class="col-6"><span class="bg-white pe-2 fs-5"><?php the_sub_field('product_name');?></span></div>
                    <div class="col-6 price-right-text"><span class="bg-white ps-2 fs-5"><?php the_sub_field('product_price');?></span></div>
                    <div class="col-12"><small class="text-muted"><?php the_sub_field('product_desc');?></small></div>
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
        <?php if( have_rows('menu_gallery_sanur') ): ?>
          <div class="row py-4">
            <?php while ( have_rows('menu_gallery_sanur') ) : the_row(); ?>
            <div class="col-6 col-lg-3 g-3">
              <?php $image = get_sub_field('image'); ?>
              <?php echo wp_get_attachment_image($image, "full", "", array( "class" => "img-menu w-100 h-auto" )); ?>
            </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>

        <?php if( have_rows('menu_list_sanur') ): ?>
        <div class="row" data-masonry='{"percentPosition": true }'>
          <?php while ( have_rows('menu_list_sanur') ) : the_row(); ?>
          <div class="col-sm-12 col-lg-6 mb-4">
            <div class="card h-100">
              <div class="card-body">
                <h3 class="card-title fs-2 mb-4"><?php the_sub_field('menu_title');?></h3>
                <?php if( have_rows('products') ): ?>
                  <?php while ( have_rows('products') ) : the_row(); ?>
                  <div class="row list-dotted gx-0 pb-2">
                    <div class="col-6"><span class="bg-white pe-2 fs-5"><?php the_sub_field('product_name');?></span></div>
                    <div class="col-6 price-right-text"><span class="bg-white ps-2 fs-5"><?php the_sub_field('product_price');?></span></div>
                    <div class="col-12"><small class="text-muted"><?php the_sub_field('product_desc');?></small></div>
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

    <div class="entry-content mt-5">
      <?php the_content(); ?>
    </div><!-- .entry-content -->

  </div>

</article>

<style>
  .nav-pills .nav-link {
    color: #000;
    background-color: #fff;
    border-color: #dee2e6 !important;
    transition: all 0.3s ease;
  }
  .nav-pills .nav-link.active {
    background-color: #b40304 !important; /* Warna merah khas Golden Monkey */
    color: #fff !important;
    border-color: #b40304 !important;
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
  // Script to re-layout Masonry when switching tabs
  document.addEventListener('DOMContentLoaded', function() {
    var tabEls = document.querySelectorAll('button[data-bs-toggle="pill"]');
    tabEls.forEach(function(tabEl) {
      tabEl.addEventListener('shown.bs.tab', function (event) {
        // Trigger window resize to force Masonry recalculation
        window.dispatchEvent(new Event('resize'));
        
        // Or manually trigger Masonry if needed
        var msnryEls = document.querySelectorAll('[data-masonry]');
        msnryEls.forEach(function(el) {
          if (typeof Masonry !== 'undefined') {
            var msnry = Masonry.data(el);
            if (msnry) msnry.layout();
          }
        });
      });
    });
  });
</script>