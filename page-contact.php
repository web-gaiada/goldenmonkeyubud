<?php
/**
 * Template Name: Contact Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldenmonkey
 */

get_header();
?>
<?php get_template_part('template-parts/content', 'header'); ?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10 text-center mb-5">
            <h2 class="fw-bold text-uppercase mb-4">Contact Us</h2>
            <p class="fs-5 text-muted"><?php echo get_field('footer_title'); ?></p>
        </div>

        <div class="col-lg-10">
            <!-- Location Tabs -->
            <ul class="nav nav-pills justify-content-center mb-5" id="contactTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active px-5 py-3 fw-bold text-uppercase rounded-0 border"
                        id="contact-ubud-tab" data-bs-toggle="pill" data-bs-target="#contact-ubud" type="button"
                        role="tab">Ubud</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link px-5 py-3 fw-bold text-uppercase rounded-0 border" id="contact-sanur-tab"
                        data-bs-toggle="pill" data-bs-target="#contact-sanur" type="button" role="tab">Sanur</button>
                </li>
            </ul>

            <div class="tab-content" id="contactTabContent">
                <!-- Ubud Contact Info -->
                <div class="tab-pane fade show active" id="contact-ubud" role="tabpanel">
                    <div class="row gy-4 mb-5">
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm bg-light p-4 p-md-5">
                                <h4 class="fw-bold mb-4 text-uppercase">Golden Monkey Ubud</h4>
                                <div class="mb-4">
                                    <h6 class="text-muted small fw-bold text-uppercase mb-2">Address</h6>
                                    <div class="fs-5"><?php echo wpautop(get_field('address_ubud', 'option')); ?></div>
                                </div>
                                <div class="mb-4">
                                    <h6 class="text-muted small fw-bold text-uppercase mb-2">WhatsApp Number</h6>
                                    <a href="https://api.whatsapp.com/send/?phone=<?php echo get_field('whatsapp_number_ubud', 'option'); ?>&text=<?php echo urlencode(get_field('whatsapp_text_ubud', 'option')); ?>"
                                        class="text-dark fs-5 fw-bold" target="_blank">
                                        <?php echo get_field('whatsapp_number_ubud', 'option'); ?>
                                    </a>
                                </div>
                                <div class="mt-auto">
                                    <a href="<?php echo get_field('google_maps_url_ubud', 'option'); ?>" target="_blank"
                                        class="btn btn-outline-dark rounded-0 px-4 py-2 w-100 fw-bold">Get
                                        Directions</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ratio ratio-1x1 shadow-sm rounded border overflow-hidden">
                                <?php echo get_field('google_maps_embed_ubud', 'option'); ?>
                            </div>
                        </div>
                    </div>

                    <!-- Form Ubud -->
                    <div class="mt-5 pt-5 border-top">
                        <div class="text-center mb-5">
                            <h3 class="fw-bold text-uppercase">Send us a Message (Ubud)</h3>
                            <p class="text-muted">Have a question or feedback for our Ubud location? We'd love to hear
                                from you.</p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-10 text-brand">
                                <?php echo do_shortcode('[contact-form-7 id="31b3b41" title="Contact Form - Ubud"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sanur Contact Info -->
                <div class="tab-pane fade" id="contact-sanur" role="tabpanel">
                    <div class="row gy-4 mb-5">
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm bg-light p-4 p-md-5">
                                <h4 class="fw-bold mb-4 text-uppercase">Golden Monkey Sanur</h4>
                                <div class="mb-4">
                                    <h6 class="text-muted small fw-bold text-uppercase mb-2">Address</h6>
                                    <div class="fs-5"><?php echo wpautop(get_field('address_sanur', 'option')); ?></div>
                                </div>
                                <div class="mb-4">
                                    <h6 class="text-muted small fw-bold text-uppercase mb-2">WhatsApp Number</h6>
                                    <a href="https://api.whatsapp.com/send/?phone=<?php echo get_field('whatsapp_number_sanur', 'option'); ?>&text=<?php echo urlencode(get_field('whatsapp_text_sanur', 'option')); ?>"
                                        class="text-dark fs-5 fw-bold" target="_blank">
                                        <?php echo get_field('whatsapp_number_sanur', 'option'); ?>
                                    </a>
                                </div>
                                <div class="mt-auto">
                                    <a href="<?php echo get_field('google_maps_url_sanur', 'option'); ?>"
                                        target="_blank"
                                        class="btn btn-outline-dark rounded-0 px-4 py-2 w-100 fw-bold">Get
                                        Directions</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ratio ratio-1x1 shadow-sm rounded border overflow-hidden">
                                <?php echo get_field('google_maps_embed_sanur', 'option'); ?>
                            </div>
                        </div>
                    </div>

                    <!-- Form Sanur -->
                    <div class="mt-5 pt-5 border-top">
                        <div class="text-center mb-5">
                            <h3 class="fw-bold text-uppercase">Send us a Message (Sanur)</h3>
                            <p class="text-muted">Have a question or feedback for our Sanur location? We'd love to hear
                                from you.</p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-10 text-brand">
                                <?php echo do_shortcode('[contact-form-7 id="5baa930" title="Contact Form - Sanur"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    #contactTab .nav-link {
        color: #000;
        background-color: #fff;
        border-color: #dee2e6 !important;
        transition: all 0.3s ease;
    }

    #contactTab .nav-link.active {
        background-color: #b40304 !important;
        color: #fff !important;
        border-color: #b40304 !important;
    }
</style>

<?php get_template_part('template-parts/footer', 'banner'); ?>

<?php
get_footer();
