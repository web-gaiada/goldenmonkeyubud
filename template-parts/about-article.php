<?php $i = get_field('count'); ?>
<?php if (have_rows('article_list')): ?>
    <div class="container py-lg-5">
        <?php $count = $i; ?>
        <?php while (have_rows('article_list')):
            the_row(); ?>
            <?php if (get_sub_field('layout_option') == 'Two Column'): ?>
                <div class="row gx-0 bg-second-brand mb-5 overflow-hidden border-0">
                    <!-- Text Column -->
                    <div
                        class="col-12 col-lg-6 align-self-center <?php if ($count % 2 == 0): ?>order-2 order-lg-2<?php else: ?>order-2 order-lg-1<?php endif; ?>">
                        <div class="p-4 p-md-5 <?php if ($count % 2 == 0): ?>ps-lg-5<?php else: ?>pe-lg-5<?php endif; ?>">
                            <?php if (get_sub_field('article_title')): ?>
                                <h2 class="display-6 fw-bold mb-4 text-uppercase" style="letter-spacing: 2px; color: #111;">
                                    <?php the_sub_field('article_title'); ?>
                                </h2>
                            <?php endif; ?>

                            <div class="article-body fs-5 mb-5" style="line-height: 1.8; color: #333;">
                                <?php echo get_sub_field('article_content'); ?>
                            </div>

                            <?php if (have_rows('article_button')): ?>
                                <div class="mt-4">
                                    <?php while (have_rows('article_button')):
                                        the_row(); ?>
                                        <a href="<?php bloginfo('url') ?><?php the_sub_field('button_link'); ?>"
                                            class="btn btn-outline-dark rounded-0 px-4 py-2 fw-bold text-uppercase"><?php the_sub_field('button_text'); ?></a>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- Image Column -->
                    <div
                        class="col-12 col-lg-6 <?php if ($count % 2 == 0): ?>order-1 order-lg-1<?php else: ?>order-1 order-lg-2<?php endif; ?>">
                        <?php $article_img = get_sub_field('article_image'); ?>
                        <?php echo wp_get_attachment_image($article_img, "full", "", array("class" => "img-cover w-100 h-100", "style" => "object-fit: cover; min-height: 400px;")); ?>
                    </div>
                </div>
                <?php $count++; ?>
            <?php else: ?>
                <div class="row mb-5">
                    <div class="col-12 p-4 p-md-5">
                        <?php if (get_sub_field('article_title')): ?>
                            <h2 class="display-6 fw-bold mb-4 text-uppercase text-center" style="letter-spacing: 2px; color: #111;">
                                <?php echo get_sub_field('article_title'); ?>
                            </h2>
                        <?php endif; ?>
                        <div class="article-body fs-5 mb-4" style="line-height: 1.8; color: #333;">
                            <?php the_sub_field('article_content'); ?>
                        </div>
                        <?php $article_img = get_sub_field('article_image'); ?>
                        <div class="text-center mt-4">
                            <?php echo wp_get_attachment_image($article_img, "full", "", array("class" => "img-fluid shadow-sm")); ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endwhile; ?>
    </div>
<?php endif; ?>

<style>
    .article-body p {
        margin-bottom: 1.5rem;
    }

    .img-cover {
        transition: transform 0.5s ease;
    }

    .row:hover .img-cover {
        transform: scale(1.02);
    }
</style>