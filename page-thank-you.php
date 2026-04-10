<?php
/**
 * Template Name: Thank You Page
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
        // const url = new URL(window.location)
        // const hash = url.hash
        // const sanurBtn = document.getElementById('res-sanur-tab');
        // const ubudBtn = document.getElementById('res-ubud-tab');

        // if (hash === '#sanur') {
        //     if (sanurBtn && typeof bootstrap !== 'undefined') {
        //         const tab = new bootstrap.Tab(sanurBtn);
        //         tab.show();
        //     } else if (sanurBtn) {
        //         sanurBtn.click();
        //     }
            
        // } else if (hash === '#ubud') {
        //     if (ubudBtn && typeof bootstrap !== 'undefined') {
        //         const tab = new bootstrap.Tab(ubudBtn);
        //         tab.show();
        //     } else if (ubudBtn) {
        //         ubudBtn.click();
        //     }
        // }

        // sanurBtn.addEventListener('click', () => {
        //     window.location.hash = '#sanur'
        // })
        // ubudBtn.addEventListener('click', () => {
        //     window.location.hash = '#ubud'
        // })

        window.dataLayer = window.dataLayer || []

        // "?bookingReference=BG76PLKG&date=2026-04-30T00:00:00&time=18:15:00&partySize=5&micrositeName=GoldenMonkeySanur
        const url = new URLSearchParams(window.location.search)
        const partySize = url.get('partySize')
        const bookingId = url.get('bookingReference')
        const date = url.get('date')
        const time = url.get('time')
        const location = url.get('micrositeName')
        if(partySize && bookingId) {
            const data = {
                event: "purchase",
                party_size: partySize,
                transaction_id: bookingId,
                date,
                time,
                location
            }
            window.dataLayer.push(data)
        }

    })
</script>

<?php
get_footer();
