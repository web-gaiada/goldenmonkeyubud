<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldenmonkey
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('col-12 col-lg-4 media-list'); ?>>
    <div class="bg-dark text-white position-relative h-100">
        <div class="p-5 d-flex align-items-center flex-column h-100 justify-content-center featured-text text-center">
            <header class="entry-header">
                <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" class="stretched-link text-white">', '</a></h2>' ); ?>
            </header>	

            <div class="entry-content">
                <?php echo get_field('intro_text'); ?>
            </div><!-- .entry-content -->
        </div>
        <?php if ( has_post_thumbnail() ) : ?>            
            <?php the_post_thumbnail('large', array('class' => 'img-cover')); ?>            
        <?php endif; ?>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
