<?php
/**
 * Template part for displaying page content in Locations Page
 *
 * @package goldenmonkey
 */

// Mengambil data dari Global Settings (Options Page)
$locations = array(
    'ubud' => array(
        'title' => 'Golden Monkey Ubud',
        'address' => get_field('address_ubud', 'option'),
        'wa' => get_field('whatsapp_number_ubud', 'option'),
        'wa_text' => get_field('whatsapp_text_ubud', 'option'),
        'maps' => get_field('google_maps_embed_ubud', 'option'),
        'map_url' => get_field('google_maps_url_ubud', 'option'),
        'description' => get_field('description_ubud', 'option'),
        'gallery' => get_field('atmosphere_gallery_ubud', 'option'),
        'hours' => get_field('operational_hours_ubud', 'option'),
    ),
    'sanur' => array(
        'title' => 'Golden Monkey Sanur',
        'address' => get_field('address_sanur', 'option'),
        'wa' => get_field('whatsapp_number_sanur', 'option'),
        'wa_text' => get_field('whatsapp_text_sanur', 'option'),
        'maps' => get_field('google_maps_embed_sanur', 'option'),
        'map_url' => get_field('google_maps_url_sanur', 'option'),
        'description' => get_field('description_sanur', 'option'),
        'gallery' => get_field('atmosphere_gallery_sanur', 'option'),
        'hours' => get_field('operational_hours_sanur', 'option'),
    )
);
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <!-- Tab Navigation (Styled like Menu) -->
            <ul class="nav nav-pills justify-content-center mb-5" id="locationTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active px-5 py-3 fw-bold text-uppercase rounded-0 border" id="ubud-loc-tab"
                        data-bs-toggle="pill" data-bs-target="#ubud-loc" type="button" role="tab" aria-controls="ubud-loc" aria-selected="true">Ubud</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link px-5 py-3 fw-bold text-uppercase rounded-0 border" id="sanur-loc-tab"
                        data-bs-toggle="pill" data-bs-target="#sanur-loc" type="button" role="tab" aria-controls="sanur-loc" aria-selected="false">Sanur</button>
                </li>
            </ul>

            <div class="tab-content" id="locationTabContent">
                <?php foreach ($locations as $key => $loc): ?>
                    <div class="tab-pane fade <?php echo ($key == 'ubud') ? 'show active' : ''; ?>"
                        id="<?php echo $key; ?>-loc" role="tabpanel" aria-labelledby="<?php echo $key; ?>-loc-tab">

                        <!-- Description Article -->
                        <?php if ($loc['description']): ?>
                            <div class="text-center mb-5 px-lg-5">
                                <div class="description-text fs-5">
                                    <?php echo $loc['description']; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <!-- Atmosphere Gallery -->
                        <?php if ($loc['gallery']): ?>
                            <div class="mb-5 pb-5 border-bottom">
                                <h3 style="font-size: 30px;" class="text-center fw-bold mb-4 text-uppercase">Atmosphere</h3>
                                <div class="row g-3">
                                    <?php foreach ($loc['gallery'] as $image_id): ?>
                                        <div class="col-6 col-md-4">
                                            <div class="ratio ratio-1x1 shadow-sm rounded border overflow-hidden">
                                                <?php echo wp_get_attachment_image($image_id, 'medium_large', false, array('class' => 'w-100 h-100 object-fit-cover')); ?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div id="maps-address" class="row gy-4">
                            <!-- Left Column: Map -->
                            <div class="col-lg-7 d-flex">
                                <div class="shadow-sm rounded border overflow-hidden bg-light w-100 map-container">
                                    <?php 
                                        $map_iframe = $loc['maps'];
                                        // Add title attribute to iframe for accessibility if not present
                                        if (strpos($map_iframe, 'title=') === false) {
                                            $map_title = 'Google Maps location for ' . esc_attr($loc['title']);
                                            $map_iframe = str_replace('<iframe', '<iframe title="' . $map_title . '"', $map_iframe);
                                        }
                                        echo $map_iframe; 
                                    ?>
                                </div>
                            </div>

                            <!-- Right Column: Info -->
                            <div class="col-lg-5">
                                <div class="ps-lg-4">
                                    <h2 class="fw-bold mb-4 text-uppercase h3"><?php echo $loc['title']; ?></h2>

                                    <div class="mb-4">
                                        <h3 class="text-muted text-uppercase small fw-bold mb-2 fs-6">Address</h3>
                                        <div class="fs-5"><?php echo wpautop($loc['address']); ?></div>
                                        <div class="mt-3">
                                            <a href="<?php echo $loc['map_url']; ?>" target="_blank"
                                                class="btn btn-outline-dark rounded-0 px-4 py-2">
                                                <i class="fas fa-directions me-2" aria-hidden="true"></i> Get Directions
                                            </a>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <h3 class="text-muted text-uppercase small fw-bold mb-2 fs-6">Operating Hours</h3>
                                        <div class="fs-5">
                                            <?php echo $loc['hours']; ?>
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <h3 class="text-muted text-uppercase small fw-bold mb-2 fs-6">WhatsApp Contact</h3>
                                        <a href="https://api.whatsapp.com/send/?phone=<?php echo $loc['wa']; ?>&text=<?php echo urlencode($loc['wa_text']); ?>"
                                            class="btn btn-success btn-lg rounded-0 px-4 py-3 w-100 fw-bold"
                                            target="_blank">
                                            <i class="fab fa-whatsapp me-2" aria-hidden="true"></i> Chat on WhatsApp
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<style>
    #locationTab .nav-link {
        color: #000;
        background-color: #fff;
        border-color: #dee2e6 !important;
        transition: all 0.3s ease;
    }

    #locationTab .nav-link:hover:not(.active) {
        background-color: #f8f9fa !important;
        color: #b40304 !important;
        border-color: #b40304 !important;
    }

    #locationTab .nav-link.active {
        background-color: #b40304 !important;
        color: #fff !important;
        border-color: transparent !important;
        outline: none !important;
        box-shadow: none !important;
    }

    /* Peningkatan aksesibilitas indikator fokus Keyboard */
    #locationTab .nav-link:focus-visible {
        outline: 3px solid #111 !important;
        outline-offset: -3px;
        box-shadow: 0 0 0 4px rgba(180, 3, 4, 0.4) !important;
    }

    /* Modifikasi Peta agar mengisi ketinggian penuh mengikuti kolom sebelah kanannya secara mulus */
    .map-container iframe {
        width: 100% !important;
        height: 100% !important;
        min-height: 400px;
        display: block;
    }

    .text-danger {
        color: #b40304 !important;
    }

    .object-fit-cover {
        object-fit: cover;
    }
</style>