<?php $i = get_field('count');?>
<?php if( have_rows('article_list') ): ?>
    <div class="container">
        <?php $count = $i; ?>    
        <?php while ( have_rows('article_list') ) : the_row(); ?>
        <?php if(get_sub_field('layout_option') == 'Two Column'): ?>
            <div class="row gx-0 bg-second-brand mt-3 my-lg-5">
                <div class="col-12 col-lg-6 align-self-center <?php if($count%2==0): ?>order-2 order-lg-2<?php else: ?>order-2 order-lg-1<?php endif; ?>">
                    <div class="text-justify <?php if($count%2==0): ?>ps-lg-5<?php else: ?>pe-lg-5<?php endif; ?>">
                        <?php if(get_sub_field('article_title')): ?>
                            <h2 class="text-header text-start my-3 mb-lg-5 mt-lg-0 fw-bold"><?php the_sub_field('article_title'); ?></h2>
                        <?php endif; ?>
                        <?php echo get_sub_field('article_content'); ?>
                        <?php if( have_rows('article_button') ): ?>
                            <?php while ( have_rows('article_button') ) : the_row(); ?>
                                <a href="<?php bloginfo('url')?><?php the_sub_field('button_link');?>" class="btn btn-outline-light rounded-0"><?php the_sub_field('button_text');?></a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-12 col-lg-6 h-75 <?php if($count%2==0): ?>order-1 order-lg-1<?php else: ?>order-1 order-lg-2<?php endif; ?>">
                    <?php $article_img = get_sub_field('article_image'); ?>                    
                    <?php echo wp_get_attachment_image($article_img, "full", "", array( "class" => "img-cover" )); ?>
                </div>
            </div>
            <?php $count ++; ?>
            <?php else: ?>
                <div class="row">
                    <div class="col-12 text-justify">
                        <?php if(get_sub_field('article_title')): ?>
                            <h2 class="text-header my-3 mb-lg-5 mt-lg-0 fw-bold"><?php echo get_sub_field('article_title'); ?></h2>
                        <?php endif; ?>
                        <?php the_sub_field('article_content'); ?> 
                        <?php $article_img = get_sub_field('article_image'); ?>       
                        <?php echo wp_get_attachment_image($article_img, "full", "", array( "class" => "img-cover" )); ?>
                    </div>
                </div>   
            <?php endif; ?>                      
        <?php endwhile; ?>
    </div>
<?php endif; ?>