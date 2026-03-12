<?php if( have_rows('jumbotron') ): ?>
    <?php while ( have_rows('jumbotron') ) : the_row(); ?>
    <div class="position-relative h-100-desktop">
        <div class="position-absolute top-50 start-50 translate-middle text-white text-center white-link">
            <h3 class="mb-4"><?php the_sub_field('section_title'); ?></h3>
            <?php echo get_sub_field('section_subtitle'); ?>
            <?php if( have_rows('section_button') ): ?>
                <?php while ( have_rows('section_button') ) : the_row(); ?>
                <a href="<?php bloginfo('url')?><?php the_sub_field('button_link');?>" class="btn btn-reserve fw-bold" aria-label="Order now"><?php the_sub_field('button_text');?></a>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <?php $section_image = get_sub_field('section_image'); ?>
        <?php echo wp_get_attachment_image($section_image, "full", "", array( "class" => "img-cover" )); ?>    
    </div> 
  <?php endwhile; ?>
  <?php else: ?>
    <?php while ( have_rows('jumbotron', 263) ) : the_row(); ?>
    <div class="position-relative h-100-desktop">    
        <div class="position-absolute top-50 start-50 translate-middle text-white text-center">
            <h3 class="mb-4 fw-bold"><?php the_sub_field('section_title'); ?></h3>
            <?php the_sub_field('section_subtitle'); ?>
            <?php if( have_rows('section_button') ): ?>
                <?php while ( have_rows('section_button') ) : the_row(); ?>
                <a href="<?php bloginfo('url')?><?php the_sub_field('button_link');?>" class="btn btn-reserve fw-bold" aria-label="Order now"><?php the_sub_field('button_text');?></a>
                <?php endwhile; ?>
            <?php endif; ?>      
        </div>
        <?php $section_image = get_sub_field('section_image'); ?>
        <?php echo wp_get_attachment_image($section_image, "full", "", array( "class" => "img-cover" )); ?>    
    </div> 
  <?php endwhile; ?>
<?php endif; ?>