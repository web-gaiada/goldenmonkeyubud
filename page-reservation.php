<?php
/**
 * Template Name: Reservation Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldenmonkey
 */

get_header();

// Fetch map data from options
$map_ubud = get_field('google_maps_embed_ubud', 'option');
$map_sanur = get_field('google_maps_embed_sanur', 'option');
$map_title = get_field('map_title', 'option') ?: 'Visit Us';
$map_subtitle = get_field('map_subtitle', 'option');
?>
<?php get_template_part('template-parts/content', 'header'); ?>

<div id="reservations" class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 mb-5">
            <h3 class="mb-4 text-center fw-bold text-uppercase"><?php the_field('sub_title'); ?></h3>

            <!-- Reservation Tabs -->
            <ul class="nav nav-pills justify-content-center mb-5" id="resTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active px-5 py-3 fw-bold text-uppercase rounded-0 border" id="res-ubud-tab"
                        data-bs-toggle="pill" data-bs-target="#res-ubud-content" type="button" role="tab"
                        aria-controls="res-ubud-content" aria-selected="true">Ubud</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link px-5 py-3 fw-bold text-uppercase rounded-0 border" id="res-sanur-tab"
                        data-bs-toggle="pill" data-bs-target="#res-sanur-content" type="button" role="tab"
                        aria-controls="res-sanur-content" aria-selected="false">Sanur</button>
                </li>
            </ul>
        </div>

        <div class="col-lg-10">
            <div class="tab-content" id="resTabContent">
                <!-- Ubud Reservation Content -->
                <div class="tab-pane fade show active" id="res-ubud-content" role="tabpanel"
                    aria-labelledby="res-ubud-tab">
                    <div class="card border-0 shadow-sm p-4 p-md-5 bg-light text-center mb-5">
                        <h2 class="fw-bold mb-4">Golden Monkey Ubud Reservation</h2>
                        <p class="mb-5 lead">Book your table at our Ubud location for an authentic Chinese dining
                            experience.</p>

                        <?php if (get_field('reservation_url_ubud', 'option')): ?>
                            <div class="reservation-form-container bg-white shadow-sm rounded mb-4 overflow-hidden">
                                <iframe src="<?php echo get_field('reservation_url_ubud', 'option'); ?>" frameborder="0"
                                    scrolling="auto" class="resdiary-iframe"
                                    style="width:100%; min-height: 650px; border:none; display: block;"></iframe>
                            </div>
                        <?php else: ?>
                            <div class="alert alert-info">Reservation link for Ubud is not set yet.</div>
                        <?php endif; ?>
                    </div>

                    <!-- Map for Ubud -->
                    <div class="mt-5 pt-5 border-top text-center">
                        <h2 class="mb-4 fw-bold"><?php echo $map_title; ?> - Ubud</h2>
                        <?php if ($map_subtitle): ?>
                            <p class="fs-5"><?php echo $map_subtitle; ?></p>
                        <?php endif; ?>
                        <div class="ratio ratio-21x9 shadow-sm rounded border overflow-hidden bg-light">
                            <?php if ($map_ubud): ?>
                                <?php echo $map_ubud; ?>
                            <?php else: ?>
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15783.550723239068!2d115.2639564!3d-8.5102855!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23d6c77c9d63f%3A0x93f2d70599d31eb!2sGolden%20Monkey%20Ubud!5e0!3m2!1sen!2sid!4v1711952888959!5m2!1sen!2sid"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <!-- Sanur Reservation Content -->
                <div class="tab-pane fade" id="res-sanur-content" role="tabpanel" aria-labelledby="res-sanur-tab">
                    <div class="card border-0 shadow-sm p-4 p-md-5 bg-light text-center mb-5">
                        <h2 class="fw-bold mb-4">Golden Monkey Sanur Reservation</h2>
                        <p class="mb-5 lead">Experience our signature Cantonese dishes at our vibrant Sanur restaurant.
                        </p>

                        <?php if (get_field('reservation_url_sanur', 'option')): ?>
                            <div class="reservation-form-container bg-white shadow-sm rounded mb-4 overflow-hidden">
                                <iframe src="<?php echo get_field('reservation_url_sanur', 'option'); ?>" frameborder="0"
                                    scrolling="auto" class="resdiary-iframe"
                                    style="width:100%; min-height: 650px; border:none; display: block;"></iframe>
                            </div>
                        <?php else: ?>
                            <div class="alert alert-info">Reservation link for Sanur is not set yet.</div>
                        <?php endif; ?>
                    </div>

                    <!-- Map for Sanur -->
                    <div class="mt-5 pt-5 border-top text-center">
                        <h3 class="mb-4 fw-bold"><?php echo $map_title; ?> - Sanur</h3>
                        <?php if ($map_subtitle): ?>
                            <p class="fs-5"><?php echo $map_subtitle; ?></p>
                        <?php endif; ?>
                        <div class="ratio ratio-21x9 shadow-sm rounded border overflow-hidden bg-light">
                            <?php if ($map_sanur): ?>
                                <?php echo $map_sanur; ?>
                            <?php else: ?>
                                <div class="alert alert-info">Map for Sanur is not set yet.</div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    #resTab .nav-link {
        color: #000;
        background-color: #fff;
        border-color: #dee2e6 !important;
        transition: all 0.3s ease;
    }

    #resTab .nav-link:hover:not(.active) {
        background-color: #f8f9fa !important;
        color: #b40304 !important;
        border-color: #b40304 !important;
    }

    #resTab .nav-link.active,
    #resTab .nav-link:focus {
        background-color: #b40304 !important;
        color: #fff !important;
        border-color: transparent !important;
        outline: none !important;
        box-shadow: none !important;
    }

    .lead {
        color: #555;
        font-size: 1.1rem;
    }

    /* Target specific iframes if needed */
    .ratio iframe {
        width: 100%;
        height: 100%;
        border: 0;
    }

    .reservation-form-container {
        position: relative;
        width: 100%;
        background: #fff;
    }

    /* Mobile specific adjustments for iframe height if necessary */
    @media (max-width: 768px) {
        .resdiary-iframe {
            min-height: 1000px !important;
        }
    }
</style>

<script>
    // Script to handle auto-tab from URL parameter
    // document.addEventListener('DOMContentLoaded', function () {
    //     const urlParams = new URLSearchParams(window.location.search);
    //     const loc = urlParams.get('loc');

    //     if (loc === 'sanur') {
    //         const sanurBtn = document.getElementById('res-sanur-tab');
    //         if (sanurBtn && typeof bootstrap !== 'undefined') {
    //             const tab = new bootstrap.Tab(sanurBtn);
    //             tab.show();
    //         } else if (sanurBtn) {
    //             sanurBtn.click();
    //         }
    //     } else if (loc === 'ubud') {
    //         const ubudBtn = document.getElementById('res-ubud-tab');
    //         if (ubudBtn && typeof bootstrap !== 'undefined') {
    //             const tab = new bootstrap.Tab(ubudBtn);
    //             tab.show();
    //         } else if (ubudBtn) {
    //             ubudBtn.click();
    //         }
    //     }
    // });

    document.addEventListener("DOMContentLoaded", () => {
        const url = new URL(window.location)
        const hash = url.hash
        const sanurBtn = document.getElementById('res-sanur-tab');
        const ubudBtn = document.getElementById('res-ubud-tab');

        if (hash === '#sanur') {
            if (sanurBtn && typeof bootstrap !== 'undefined') {
                const tab = new bootstrap.Tab(sanurBtn);
                tab.show();
            } else if (sanurBtn) {
                sanurBtn.click();
            }
            
        } else if (hash === '#ubud') {
            if (ubudBtn && typeof bootstrap !== 'undefined') {
                const tab = new bootstrap.Tab(ubudBtn);
                tab.show();
            } else if (ubudBtn) {
                ubudBtn.click();
            }
        }

        sanurBtn.addEventListener('click', () => {
            window.location.hash = '#sanur'
        })
        ubudBtn.addEventListener('click', () => {
            window.location.hash = '#ubud'
        })
    })
</script>

<?php get_template_part('template-parts/footer', 'banner'); ?>
<?php
get_footer();
