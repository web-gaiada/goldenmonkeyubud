<?php
/**
 * Template part for displaying posts (Media/News Archive)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldenmonkey
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-12 col-md-6 col-lg-4'); ?>>
    <a href="<?php echo esc_url(get_permalink()); ?>" class="text-decoration-none">
        <div class="delivery-card-container position-relative bg-dark d-flex align-items-end" style="height: 350px;">
            
            <!-- Header Content & Overlay -->
            <div class="delivery-card-content p-4 p-lg-5 w-100">
                <header class="entry-header">
                    <h2 class="h4 fw-bold mb-3 text-white"><?php the_title(); ?></h2>
                </header>

                <?php if (get_field('intro_text')): ?>
                    <div class="entry-content text-white-50 small mb-0 d-none d-sm-block">
                        <?php
                        $intro = get_field('intro_text');
                        echo wp_trim_words($intro, 15, '...');
                        ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Featured Image -->
            <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('large', array('class' => 'img-cover position-absolute top-0 start-0 w-100 h-100 object-fit-cover')); ?>
            <?php else: ?>
                <div class="img-cover position-absolute top-0 start-0 w-100 h-100 bg-secondary opacity-25"></div>
            <?php endif; ?>

            <!-- Subtle Gradient Overlay -->
            <div class="position-absolute top-0 start-0 w-100 h-100"
                style="background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.2) 60%, rgba(0,0,0,0) 100%); z-index: 1;">
            </div>
        </div>
    </a>
</article>

<style>
    .delivery-card-container {
        overflow: hidden;
        border-radius: 4px;
        transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        cursor: pointer;
    }

    /* Hover State on the Container */
    .delivery-card-container:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.25);
    }

    .delivery-card-container .img-cover {
        transition: transform 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        z-index: 0;
        filter: brightness(0.75);
    }

    .delivery-card-container:hover .img-cover {
        transform: scale(1.05);
        filter: brightness(0.6);
    }

    .delivery-card-content {
        position: relative;
        z-index: 2;
    }

    .entry-header h2 {
        position: relative;
        display: inline-block;
        transition: color 0.3s ease;
    }

    /* Red Accent Line Under Title */
    .entry-header h2::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 0;
        height: 2px;
        background-color: #b40304;
        transition: width 0.3s ease;
    }

    /* Trigger line on container hover */
    .delivery-card-container:hover .entry-header h2::after {
        width: 40px;
    }

    /* Ensure text color stays white and doesn't get default link color */
    .text-decoration-none, .text-decoration-none:hover {
        text-decoration: none !important;
    }
</style>
