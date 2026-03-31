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
            <!-- <h2 class="fw-bold text-uppercase mb-4">Contact Us</h2> -->
            <p class="fs-5 text-muted"><?php echo get_field('footer_title'); ?></p>
        </div>

        <div class="col-lg-10">
            <!-- Location Tabs -->
            <ul class="nav nav-pills justify-content-center mb-5" id="contactTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active px-5 py-3 fw-bold text-uppercase rounded-0 border"
                        id="contact-ubud-tab" data-bs-toggle="pill" data-bs-target="#contact-ubud" type="button"
                        role="tab" aria-controls="contact-ubud" aria-selected="true">Ubud</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link px-5 py-3 fw-bold text-uppercase rounded-0 border" id="contact-sanur-tab"
                        data-bs-toggle="pill" data-bs-target="#contact-sanur" type="button" role="tab"
                        aria-controls="contact-sanur" aria-selected="false">Sanur</button>
                </li>
            </ul>

            <div class="tab-content" id="contactTabContent">
                <!-- Ubud Contact Info -->
                <div class="tab-pane fade show active" id="contact-ubud" role="tabpanel" aria-labelledby="contact-ubud-tab">
                    <div class="row gy-4 mb-5">
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm bg-light p-4 p-md-5">
                                <h2 class="h4 fw-bold mb-4 text-uppercase">Golden Monkey Ubud</h2>
                                <div class="mb-4">
                                    <h3 class="text-muted small fw-bold text-uppercase mb-2">Address</h3>
                                    <div class="fs-5"><a
                                            href="<?php echo get_field('google_maps_url_ubud', 'option'); ?>"
                                            class="text-dark fs-5 fw-bold"
                                            target="_blank"><?php echo wpautop(get_field('address_ubud', 'option')); ?>
                                        </a></div>
                                </div>
                                <div class="mb-4">
                                    <h3 class="text-muted small fw-bold text-uppercase mb-2">WhatsApp Number</h3>
                                    <a href="https://api.whatsapp.com/send/?phone=<?php echo get_field('whatsapp_number_ubud', 'option'); ?>&text=<?php echo urlencode(get_field('whatsapp_text_ubud', 'option')); ?>"
                                        class="text-dark fs-5 fw-bold" target="_blank">
                                        <?php echo format_phone_number(get_field('whatsapp_number_ubud', 'option')); ?>
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
                                <?php echo do_shortcode(get_field('shortcode_contact_form_ubud')); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sanur Contact Info -->
                <div class="tab-pane fade" id="contact-sanur" role="tabpanel" aria-labelledby="contact-sanur-tab">
                    <div class="row gy-4 mb-5">
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm bg-light p-4 p-md-5">
                                <h2 class="h4 fw-bold mb-4 text-uppercase">Golden Monkey Sanur</h2>
                                <div class="mb-4">
                                    <h3 class="text-muted small fw-bold text-uppercase mb-2">Address</h3>
                                    <div class="fs-5"><a
                                            href="<?php echo get_field('google_maps_url_sanur', 'option'); ?>"
                                            class="text-dark fs-5 fw-bold"
                                            target="_blank"><?php echo wpautop(get_field('address_sanur', 'option')); ?>
                                        </a></div>
                                </div>
                                <div class="mb-4">
                                    <h3 class="text-muted small fw-bold text-uppercase mb-2">WhatsApp Number</h3>
                                    <a href="https://api.whatsapp.com/send/?phone=<?php echo get_field('whatsapp_number_sanur', 'option'); ?>&text=<?php echo urlencode(get_field('whatsapp_text_sanur', 'option')); ?>"
                                        class="text-dark fs-5 fw-bold" target="_blank">
                                        <?php echo format_phone_number(get_field('whatsapp_number_sanur', 'option')); ?>
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
                                <?php
                                $shortcode_sanur = get_field('shortcode_contact_form_sanur');
                                if ($shortcode_sanur) {
                                    echo do_shortcode($shortcode_sanur);
                                }
                                ?>
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

    #contactTab .nav-link:hover:not(.active) {
        background-color: #f8f9fa !important;
        color: #b40304 !important;
        border-color: #b40304 !important;
    }

    #contactTab .nav-link.active {
        background-color: #b40304 !important;
        color: #fff !important;
        border-color: transparent !important;
        outline: none !important;
        box-shadow: none !important;
    }

    /* [A11Y FIXED]: Indikator fokus yang tajam untuk pengguna keyboard navigasi Tab */
    #contactTab .nav-link:focus-visible {
        outline: 3px solid #111 !important;
        outline-offset: -3px;
        box-shadow: 0 0 0 4px rgba(180, 3, 4, 0.4) !important;
    }
    /* Restyling Pesan Error Form (CF7) agar rapi */
    div.wpcf7-response-output {
        margin: 0 0 1.5rem 0 !important;
        padding: 1rem !important;
        border-radius: 4px !important;
        border: 1px solid #dc3545 !important;
        background-color: #fff8f8 !important;
        color: #dc3545 !important;
        font-weight: 500;
        text-align: center;
    }

    /* Warna hijau jika form berhasil */
    div.wpcf7-mail-sent-ok {
        border-color: #00b14f !important;
        background-color: #f0fff4 !important;
        color: #00aa13 !important;
    }

    /* Efek sorot/Hover untuk link Address dan WhatsApp */
    #contactTabContent .card .mb-4 a.text-dark {
        transition: color 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }

    #contactTabContent .card .mb-4 a.text-dark:hover {
        color: #b40304 !important; /* Warna identitas brand/Monash Red */
    }
</style>

<script>
    // Skrip untuk Memindahkan pesan respon form CF7 ke atas tombol submit
    document.addEventListener('DOMContentLoaded', moveCf7Response);
    document.addEventListener('wpcf7invalid', moveCf7Response);
    document.addEventListener('wpcf7spam', moveCf7Response);
    document.addEventListener('wpcf7mailsent', moveCf7Response);
    document.addEventListener('wpcf7mailfailed', moveCf7Response);
    document.addEventListener('wpcf7submit', moveCf7Response);

    function moveCf7Response() {
        var forms = document.querySelectorAll('.wpcf7-form');
        forms.forEach(function(form) {
            var response = form.querySelector('.wpcf7-response-output');
            var submitBtn = form.querySelector('.wpcf7-submit');
            
            if (response && submitBtn) {
                // Biasanya tombol dibungkus elemen <p> atau <div> dalam WP Editor
                var parent = submitBtn.parentNode;
                if (parent && parent.className !== 'wpcf7-form') {
                    form.insertBefore(response, parent);
                } else {
                    form.insertBefore(response, submitBtn);
                }
            }
        });
    }

    // Trik Otomatis untuk menyamakan kelas gaya input tipe "number" / "tel" persis dengan tipe "text"
    document.addEventListener('DOMContentLoaded', function() {
        var textInput = document.querySelector('.wpcf7-form input[type="text"], .wpcf7-form input[type="email"]');
        var numberInputs = document.querySelectorAll('.wpcf7-form input[type="number"], .wpcf7-form input[type="tel"]');
        
        if (textInput && numberInputs.length > 0) {
            // Saring dan ambil semua kelas kosmetik (seperti form-control, py-2, bg-light) 
            var baseClasses = textInput.className.split(' ').filter(function(c) {
                return !c.startsWith('wpcf7');
            }).join(' ');

            // Suntikkan kelas yang sama ke tipe angka
            numberInputs.forEach(function(nInput) {
                nInput.className = nInput.className + ' ' + baseClasses;
                // Cadangan paksaan seandainya bootstrap border rewel
                if(!nInput.classList.contains('form-control')) {
                    nInput.classList.add('form-control');
                }
            });
        }
    });
</script>

<?php get_template_part('template-parts/footer', 'banner'); ?>

<?php
get_footer();
