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

    <?php if( have_rows('menu_gallery') ): ?>
      <div class="row py-5">
        <?php while ( have_rows('menu_gallery') ) : the_row(); ?>
        <div class="col-6 col-lg-3 g-3">
          <?php $image = get_sub_field('image'); ?>
          <?php echo wp_get_attachment_image($image, "full", "", array( "class" => "img-menu" )); ?>
        </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>

    <?php if( have_rows('menu_list') ): ?>
    <div class="row" data-masonry="{&quot;percentPosition&quot;: true }" style="position: relative; height: 1001px;">
      <?php while ( have_rows('menu_list') ) : the_row(); ?>
      <div class="col-sm-12 col-lg-6 mb-4" style="position: absolute; left: 0%; top: 0px;">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title fs-2"><?php the_sub_field('menu_title');?></h3>
            <?php if( have_rows('products') ): ?>
              <?php while ( have_rows('products') ) : the_row(); ?>
              <div class="row list-dotted gx-0 pb-2">
                <div class="col-6"><span class="bg-white pe-2 fs-5"><?php the_sub_field('product_name');?></span></div>
                <div class="col-6 price-right-text"><span class="bg-white ps-2 fs-5"><?php the_sub_field('product_price');?></span></div>
                <span><?php the_sub_field('product_desc');?></span>
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

</article>