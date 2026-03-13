<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldenmonkey
 */
get_header();
?>
<link rel='stylesheet' id='joinchat-css'
    href='https://www.goldenmonkeyubud.com/wp-content/plugins/creame-whatsapp-me/public/css/joinchat.min.css?ver=6.0.10'
    media='all' />
<style>
    .swiper .wpsr-review-template {
        margin-top: 64px;
        height: 230px;
    }

    .swiper .wpsr-col-12 {
        max-width: none;
    }

    #wpsr-reviews-grid-1266 {
        display: none
    }

    /* Custom Swiper Buttons - Arrows Only */
    .swiper-button-next,
    .swiper-button-prev {
        background-color: transparent !important;
        width: auto !important;
        height: auto !important;
        box-shadow: none !important;
        color: #333 !important;
        transition: all 0.3s ease;
    }

    .swiper-button-next:after,
    .swiper-button-prev:after {
        font-size: 30px !important;
        /* Ukuran panah sedikit diperbesar karena tanpa lingkaran */
        font-weight: bold;
    }

    .swiper-button-next:hover,
    .swiper-button-prev:hover {
        background-color: transparent !important;
        color: #b40304 !important;
        /* Berubah warna menjadi merah saat di-hover */
        transform: scale(1.2);
        /* Sedikit efek membesar saat di-hover */
    }

    .swiper-container {
        padding: 0 40px;
    }
</style>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<?php
if (have_posts()):
    while (have_posts()):
        the_post();
        ?>
        <div class="position-relative">
            <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
                <p class="fw-bold header-text"><?php the_field('header_title'); ?></p>
                <?php if (have_rows('header_button')): ?>
                    <?php while (have_rows('header_button')):
                        the_row(); ?>
                        <a href="<?php bloginfo('url') ?><?php the_sub_field('button_link'); ?>"
                            class="btn btn-outline-light rounded-0 btn-lg mt-5"
                            arial-label="Golden Monkey Ubud"><?php the_sub_field('button_text'); ?></a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <?php $header_image = get_field('header_image'); ?>
            <?php echo wp_get_attachment_image($header_image, "full", "", array("class" => "img-header")); ?>
        </div>
        <?php
        get_template_part('template-parts/about', 'article');
        get_template_part('template-parts/footer', 'section');
        ?>

        <div class="container" style="margin-top: 50px;">
            <h2 style="color: black; text-align: center; margin-top: 20px; color: #111111; font-weight: bold;">Reviews of Golden
                Monkey Ubud</h2><br />
            <div class="swiper-container swiper">
                <div class="swiper-wrapper mb-5">
                    <?php echo do_shortcode('[wp_social_ninja id="1266" platform="reviews"]'); ?>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Navigation (Optional) -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        <br />
        <br />

        <div class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center fw-bold mb-5" style="color: #111111;">Find Us</h2>
                <!-- Map Tabs (Centered in Container) -->
                <ul class="nav nav-pills justify-content-center mb-5" id="mapTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active px-5 py-3 fw-bold text-uppercase rounded-0 border" id="map-ubud-tab"
                            data-bs-toggle="pill" data-bs-target="#map-ubud-content" type="button" role="tab"
                            aria-controls="map-ubud-content" aria-selected="true">Ubud</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link px-5 py-3 fw-bold text-uppercase rounded-0 border" id="map-sanur-tab"
                            data-bs-toggle="pill" data-bs-target="#map-sanur-content" type="button" role="tab"
                            aria-controls="map-sanur-content" aria-selected="false">Sanur</button>
                    </li>
                </ul>
            </div>

            <!-- Map Content (Full Width / Edge-to-Edge) -->
            <div class="tab-content" id="mapTabContent">
                <div class="tab-pane fade show active" id="map-ubud-content" role="tabpanel" aria-labelledby="map-ubud-tab">
                    <div class="ratio ratio-21x9 shadow-sm">
                        <?php echo get_field('google_maps_embed_ubud', 'option'); ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="map-sanur-content" role="tabpanel" aria-labelledby="map-sanur-tab">
                    <div class="ratio ratio-21x9 shadow-sm">
                        <?php echo get_field('google_maps_embed_sanur', 'option'); ?>
                    </div>
                </div>
            </div>
        </div>

        <style>
            #mapTab .nav-link {
                color: #000;
                background-color: #fff;
                border-color: #dee2e6 !important;
                transition: all 0.3s ease;
            }

            #mapTab .nav-link.active {
                background-color: #b40304 !important;
                color: #fff !important;
                border-color: #b40304 !important;
            }

            .ratio-21x9 {
                --bs-aspect-ratio: 40%;
            }

            @media (max-width: 768px) {
                .ratio-21x9 {
                    --bs-aspect-ratio: 100%;
                }
            }
        </style>

        <?php
        get_template_part('template-parts/footer', 'banner');
        ?>

        <?php if (get_field('popup_title')): ?>
            <div class="modal fade" id="GoldenMonkeyOffer" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="GoldenMonkeyOfferLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body text-white text-center px-lg-5">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <h2 class="py-4 fs-4"><?php the_field('popup_title'); ?></h2>
                            <p class="pb-4"><?php the_field('popup_text'); ?></p>
                            <a href="<?php the_field('popup_link'); ?>" class="btn btn-light text-uppercase fw-bold py-2 px-3"
                                aria-label="Golden Monkey Popup"><?php the_field('popup_button_text'); ?></a>
                            <span class="mx-2 fs-5 d-block d-lg-inline">OR</span>
                            <a href="<?php the_field('popup_link2'); ?>" class="btn btn-light text-uppercase fw-bold py-2 px-3"
                                aria-label="Golden Monkey Popup"><?php the_field('popup_button_text2'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php
    endwhile;
endif;
?>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Initialize Swiper slider
        const swiper = new Swiper('.swiper-container', {
            slidesPerView: 1, // Show one review at a time
            spaceBetween: 4, // Space between slides
            loop: true, // Loop through reviews,
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            breakpoints: {
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 4,
                }
            }
        });

        // Select all elements with the role="group" attribute
        const reviewGroups = document.querySelectorAll('div[role="group"]');

        reviewGroups.forEach(function (reviewGroup) {
            // Find the rating element within each review group
            const ratingElement = reviewGroup.querySelector('div[data-rating]');
            // Find the comment element within each review group
            const commentElement = reviewGroup.querySelector('.wpsr-review-content'); // Ganti ".comment-class" dengan selector elemen komentar yang sesuai

            // Check if the data-rating attribute is equal to 5 and if there is a comment
            if (ratingElement && ratingElement.getAttribute('data-rating') === '5' && commentElement && commentElement.textContent.trim() !== '') {
                // If rating is 5 and comment is not empty, show this review group (by adding to Swiper wrapper)
                const swiperSlide = document.createElement('div');
                swiperSlide.classList.add('swiper-slide');
                swiperSlide.appendChild(reviewGroup);
                document.querySelector('.swiper-wrapper').appendChild(swiperSlide);
            } else {
                // Otherwise, hide the review group
                reviewGroup.style.display = 'none';
            }
        });
    });
</script>
<?php
get_footer();
