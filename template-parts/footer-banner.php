<?php
// Determine the source of the jumbotron data
$jumbotron_source = have_rows('jumbotron') ? null : 263;

if (have_rows('jumbotron', $jumbotron_source)): ?>
    <section class="footer-banner-wrapper">
        <?php while (have_rows('jumbotron', $jumbotron_source)):
            the_row(); ?>
            <div class="position-relative overflow-hidden footer-banner-item">

                <!-- Background Image -->
                <?php
                $section_image = get_sub_field('section_image');
                echo wp_get_attachment_image($section_image, "full", "", array("class" => "img-cover position-absolute top-0 start-0 w-100 h-100 object-fit-cover"));
                ?>

                <!-- Dark Overlay for Readability -->
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-50" style="z-index: 1;"></div>

                <!-- Content Content -->
                <div class="position-relative py-5 py-lg-0 h-100-desktop d-flex align-items-center justify-content-center text-center text-white"
                    style="z-index: 2; min-height: 450px;">
                    <div class="container px-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <h3 style="font-size: 40px;" class="display-5 fw-bold mb-3 text-uppercase letter-spacing-2">
                                    <?php the_sub_field('section_title'); ?>
                                </h3>

                                <div class="fs-5 mb-5 fw-light opacity-90 banner-subtitle">
                                    <?php echo get_sub_field('section_subtitle'); ?>
                                </div>

                                <?php if (have_rows('section_button')): ?>
                                    <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
                                        <?php while (have_rows('section_button')):
                                            the_row(); ?>
                                            <a href="<?php echo esc_url(home_url(get_sub_field('button_link'))); ?>"
                                                class="btn btn-reserve px-5 py-3 fw-bold text-uppercase rounded-0"
                                                aria-label="<?php the_sub_field('button_text'); ?>">
                                                <?php the_sub_field('button_text'); ?>
                                            </a>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </section>

    <style>
        .footer-banner-wrapper {
            background-color: #000;
        }

        /* Hover Behavior yang identik dengan Reservation Menu Navbar */
        .btn-reserve {
            background: #b40304;
            color: #fff !important;
            border: 1px solid #b40304;
            transition: all 0.3s ease;
        }

        .btn-reserve:hover {
            background: #fff !important;
            color: #b40304 !important;
            border-color: #b40304 !important;
        }

        .letter-spacing-2 {
            letter-spacing: 2px;
        }

        .banner-subtitle p {
            margin-bottom: 0;
        }

        .footer-banner-item .img-cover {
            transition: transform 1.5s ease;
        }

        .footer-banner-item:hover .img-cover {
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .footer-banner-item h3 {
                font-size: 1.75rem;
            }

            .footer-banner-item .fs-5 {
                font-size: 1rem !important;
            }
        }
    </style>
<?php endif; ?>