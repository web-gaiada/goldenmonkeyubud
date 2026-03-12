<div class="position-relative">
    <div class="container py-3 py-lg-5">
        <div class="row ">
            <?php if( have_rows('delivery') ): ?>            
                <?php while ( have_rows('delivery') ) : the_row(); ?>
                <div class="col-4 g-1 g-lg-5">
                    <div class="bg-dark position-relative footer-section-height">
                        <div class="d-flex h-100 align-items-center text-white featured-text justify-content-center">
                            <div class="p-3 p-lg-5">
                                <a href="<?php bloginfo('url')?><?php the_sub_field('delivery_link'); ?>" class="text-white stretched-link">                    
                                <div class="d-block">
                                    <img src="<?php bloginfo('template_url'); ?>/images/line.svg" class="img-section pb-3 pb-lg-5">
                                    <?php $icon_image = get_sub_field('icon_image'); ?>
                                    <?php echo wp_get_attachment_image($icon_image, "full", "", array( "class" => "img-section img-icon-size" )); ?>
                                    <h2 class="pt-3 pt-lg-5 section-h2"><?php the_sub_field('delivery_text'); ?></h2>
                                </div>
                                </a>
                            </div>
                        </div>
                        <img src="<?php bloginfo('template_url'); ?>/images/delivery-background.jpg" class="img-cover">
                    </div>          
                </div>            
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>