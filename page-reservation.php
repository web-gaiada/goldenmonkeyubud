<?php
/**
 * Template Name: Reservation Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldenmonkey
 */

get_header();
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
                    <div class="card border-0 shadow-sm p-4 p-md-5 bg-light text-center">
                        <h4 class="fw-bold mb-4">Golden Monkey Ubud Reservation</h4>
                        <p class="mb-5 lead">Book your table at our Ubud location for an authentic Chinese dining
                            experience.</p>

                        <?php if (get_field('reservation_url_ubud', 'option')): ?>
                            <div class="ratio ratio-16x9 bg-white shadow-sm rounded mb-4" style="min-height: 600px;">
                                <iframe src="<?php echo get_field('reservation_url_ubud', 'option'); ?>" frameborder="0"
                                    style="width:100%; height:100%; border:none;"></iframe>
                            </div>
                            <div class="mt-4">
                                <a href="<?php echo get_field('reservation_url_ubud', 'option'); ?>" target="_blank"
                                    class="btn btn-dark btn-lg rounded-0 px-5 py-3 fw-bold text-uppercase">Open in New
                                    Window</a>
                            </div>
                        <?php else: ?>
                            <div class="alert alert-info">Reservation link for Ubud is not set yet.</div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Sanur Reservation Content -->
                <div class="tab-pane fade" id="res-sanur-content" role="tabpanel" aria-labelledby="res-sanur-tab">
                    <div class="card border-0 shadow-sm p-4 p-md-5 bg-light text-center">
                        <h4 class="fw-bold mb-4">Golden Monkey Sanur Reservation</h4>
                        <p class="mb-5 lead">Experience our signature Cantonese dishes at our vibrant Sanur restaurant.
                        </p>

                        <?php if (get_field('reservation_url_sanur', 'option')): ?>
                            <div class="ratio ratio-16x9 bg-white shadow-sm rounded mb-4" style="min-height: 600px;">
                                <iframe src="<?php echo get_field('reservation_url_sanur', 'option'); ?>" frameborder="0"
                                    style="width:100%; height:100%; border:none;"></iframe>
                            </div>
                            <div class="mt-4">
                                <a href="<?php echo get_field('reservation_url_sanur', 'option'); ?>" target="_blank"
                                    class="btn btn-dark btn-lg rounded-0 px-5 py-3 fw-bold text-uppercase">Open in New
                                    Window</a>
                            </div>
                        <?php else: ?>
                            <div class="alert alert-info">Reservation link for Sanur is not set yet.</div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5 pt-5 border-top">
        <?php get_template_part('template-parts/about', 'map'); ?>
    </div>
</div>

<style>
    #resTab .nav-link {
        color: #000;
        background-color: #fff;
        border-color: #dee2e6 !important;
        transition: all 0.3s ease;
    }

    #resTab .nav-link.active {
        background-color: #b40304 !important;
        color: #fff !important;
        border-color: #b40304 !important;
    }

    .lead {
        color: #555;
        font-size: 1.1rem;
    }
</style>
<?php get_template_part('template-parts/footer', 'banner'); ?>
<?php
get_footer();
