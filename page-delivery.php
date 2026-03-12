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
  <?php get_template_part( 'template-parts/content', 'header' ); ?>
	
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
  
    <?php if( have_rows('image_list') ): ?>
    <div class="position-relative">
      <div class="container">
        <div class="row ">
		<!--GloriaFood-->
          <div class="col-12 col-lg-4 g-1 g-lg-5">
            <div class="bg-dark position-relative delivery-section-height">
              <div class="d-flex h-100 align-items-center text-white featured-text justify-content-center">
                <div id="Delivery_Gloria_Food" class="p-3 p-lg-5">
				  <span data-glf-cuid="9e72489a-49f1-496d-a753-c535e7babe5b" data-glf-ruid="196905ff-9f7c-47fb-83ca-d08ba5e042f1" >
                  <div class="d-block delivery-trigger">
                  <img src="<?php bloginfo('template_url'); ?>/images/home-delivery.png" alt="Home Delivery" img-client> 
                  </div>
                </span>
                </div>
              </div>
              <img src="<?php bloginfo('template_url'); ?>/images/delivery-background.jpg" class="img-cover">
            </div>          
          </div>
		<!--Grab Food-->
		  <div class="col-12 col-lg-4 g-1 g-lg-5">
            <div class="bg-dark position-relative delivery-section-height">
              <div class="d-flex h-100 align-items-center text-white featured-text justify-content-center">
                <div class="p-3 p-lg-5">
                  <a rel="nofollow" id="grabfood" href="https://grab.onelink.me/2695613898?pid=inappsharing&c=6-C2WZC2LFE4BGEA&is_retargeting=true&af_dp=grab%3A%2F%2Fopen%3FscreenType%3DGRABFOOD%26sourceID%3DA4pcqCZkS4%26merchantIDs%3D6-C2WZC2LFE4BGEA&af_force_deeplink=true&af_web_dp=https%3A%2F%2Fwww.grab.com%2Fdownload" class="text-white stretched-link delivery-trigger" target="_blank" >  
                    <div class="d-block">
                     <img src="https://www.goldenmonkeyubud.com/wp-content/uploads/2021/11/grabfood-150.png" alt="Grab Food" target="_blank" img-client> 
                    </div>
                  </a>
                </div>
              </div>
              <img src="https://www.goldenmonkeyubud.com/wp-content/uploads/2023/10/delivery-bg-grab.webp" class="img-cover">
            </div>          
          </div>
		 <!--Shopee Food>
		  <div class="col-12 col-lg-4 g-1 g-lg-5">
            <div class="bg-dark position-relative delivery-section-height">
              <div class="d-flex h-100 align-items-center text-white featured-text justify-content-center">
                <div class="p-3 p-lg-5">
                  <a rel="nofollow" id="shopee" href="https://shopee.co.id/universal-link/now-food/shop/20015132?deep_and_deferred=1&shareChannel=copy_link" class="text-white stretched-link delivery-trigger" target="_blank" >  
                    <div class="d-block">
                     <img src="https://www.goldenmonkeyubud.com/wp-content/uploads/2021/11/shopee-food-white-150.png" alt="Shopee Food" target="_blank" img-client> 
                    </div>
                  </a>
                </div>
              </div>
              <img src="https://www.goldenmonkeyubud.com/wp-content/uploads/2023/10/delivery-bg-shopee.webp" class="img-cover">
            </div>          
          </div>
		<!--Go Food-->
		  <div class="col-12 col-lg-4 g-1 g-lg-5">
            <div class="bg-dark position-relative delivery-section-height">
              <div class="d-flex h-100 align-items-center text-white featured-text justify-content-center">
                <div class="p-3 p-lg-5">
                  <a rel="nofollow" id="gofood" href="https://gofood.link/a/CtgSwQL" class="text-white stretched-link delivery-trigger" target="_blank" >  
                    <div class="d-block">
                     <img src="https://www.goldenmonkeyubud.com/wp-content/uploads/2021/11/gofood-150.png" alt="Go Food" target="_blank" img-client> 
                    </div>
                  </a>
                </div>
              </div>
              <img src="https://www.goldenmonkeyubud.com/wp-content/uploads/2023/10/delivery-bg-gojek.webp" class="img-cover">
            </div>          
          </div>
        <!--<?php while ( have_rows('image_list') ) : the_row(); ?>
          <div class="col-12 col-lg-4 g-1 g-lg-5">
            <div class="bg-dark position-relative delivery-section-height">
              <div class="d-flex h-100 align-items-center text-white featured-text justify-content-center">
                <div class="p-3 p-lg-5">
                  <a rel="nofollow" id="<?php the_sub_field('banner_id'); ?>" href="<?php the_sub_field('banner_link'); ?>" class="text-white stretched-link delivery-trigger" target="_blank" >  
                    <div class="d-block">
                    <?php $delivery_image = get_sub_field('delivery_image'); ?>
                    <?php echo wp_get_attachment_image($delivery_image, "full", "", array( "class" => "img-client" )); ?> 
                    </div>
                  </a>
                </div>
              </div>
              <img src="<?php bloginfo('template_url'); ?>/images/delivery-background.jpg" class="img-cover">
            </div>          
          </div>
          <?php endwhile; ?>-->
        </div>
      </div>
    </div>
    <?php endif; ?>

  </div> 
</main>
  
<?php
get_footer();