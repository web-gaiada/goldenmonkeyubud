<div class="position-relative">
    <div class="container py-3 py-lg-5">
        <div class="row ">
            <?php if( have_rows('banner') ): ?>            
                <?php while ( have_rows('banner') ) : the_row(); ?>
                <div class="col-6 g-1 g-lg-5">
                    <div class="bg-dark position-relative footer-section-height">
                        <div class="d-flex h-100 align-items-center text-white featured-text justify-content-center">
                            <div class="p-3 p-lg-5">
                                <a href="<?php bloginfo('url')?><?php the_sub_field('banner_link'); ?>" class="text-white stretched-link">                    
                                <div class="d-block">
                                    <img src="<?php bloginfo('template_url'); ?>/images/line.svg" class="line-section pb-3 pb-lg-5" alt="Chinese Restaurant Ubud">
                                    <?php $icon_image = get_sub_field('icon_image'); ?>
                                    <?php echo wp_get_attachment_image($icon_image, "full", "", array( "class" => "img-section img-icon-size" )); ?>
                                    <h2 class="pt-3 pt-lg-5 section-h2"><?php the_sub_field('banner_text'); ?></h2>
                                </div>
                                </a>
                            </div>
                        </div>
                        <img src="<?php bloginfo('template_url'); ?>/images/section-background.jpg" class="img-cover"  alt="Chinese Restaurant Ubud">
                    </div>          
                </div>            
                <?php endwhile; ?>
            <?php else: ?>
                <?php while ( have_rows('banner', 3) ) : the_row(); ?>
                <div class="col-12 col-lg-4">
                  <div class="bg-dark position-relative footer-section-height">
                     <div class="d-flex h-100 align-items-center text-white featured-text justify-content-center">
                        <div class="p-5">
                           <a href="<?php bloginfo('url')?><?php the_sub_field('banner_link'); ?>" class="text-white stretched-link" aria-label="Banner">               <div class="d-block">
                                <img src="<?php bloginfo('template_url'); ?>/images/line.svg" class="pb-5" alt="Chinese Restaurant Ubud">
                                    <?php $icon_image = get_sub_field('icon_image'); ?>
                                    <?php echo wp_get_attachment_image($icon_image, "full", "", array( "class" => "img-section" )); ?>
                                    <h2 class="pt-5"><?php the_sub_field('banner_text'); ?></h2>
                                </div>
                                </a>
                            </div>
                        </div>
                        <img src="<?php bloginfo('template_url'); ?>/images/section-background.jpg" class="img-cover" alt="Chinese Restaurant Ubud">
                    </div>          
                </div>            
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>