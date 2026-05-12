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
        <div class="col-12">
            <h3 class="mb-4 text-center fw-bold text-uppercase"><?php the_field('sub_title'); ?></h3>

            <!-- Reservation Tabs -->
            <ul class="nav nav-pills justify-content-center" id="resTab" role="tablist">
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
                <div class="tab-pane fade show active rd-widget" id="res-ubud-content" role="tabpanel"
                    aria-labelledby="res-ubud-tab">
                    <div class="card border-0 shadow-sm p-4 p-md-5 bg-light text-center mb-5">
                        <h2 class="fw-bold mb-4">Golden Monkey Ubud Reservation</h2>
                        <p class="mb-5 lead">Book your table at our Ubud location for an authentic Chinese dining
                            experience.</p>

                        <?php if (get_field('reservation_url_ubud', 'option')): ?>
                            <div class="reservation-form-container bg-white shadow-sm rounded mb-4 overflow-hidden">
                                <!-- <div id="rd-widget-frame"></div>
                                <input id="rdwidgeturl" name="rdwidgeturl" type="hidden" value="<?= get_field('reservation_url_ubud', 'option'); ?>" /> -->
                                <div class="rd-widget-frame"></div>
                                <input class="rdwidgeturl" name="rdwidgeturl" type="hidden" value="<?= get_field('reservation_url_ubud', 'option'); ?>" />
                                <!-- <iframe src="<?php echo get_field('reservation_url_ubud', 'option'); ?>" frameborder="0"
                                    scrolling="auto" class="resdiary-iframe"
                                    style="width:100%; min-height: 650px; border:none; display: block;"></iframe> -->
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
                <div class="tab-pane fade rd-widget" id="res-sanur-content" role="tabpanel" aria-labelledby="res-sanur-tab">
                    <div class="card border-0 shadow-sm p-4 p-md-5 bg-light text-center mb-5">
                        <h2 class="fw-bold mb-4">Golden Monkey Sanur Reservation</h2>
                        <p class="mb-5 lead">Experience our signature Cantonese dishes at our vibrant Sanur restaurant.
                        </p>

                        <?php if (get_field('reservation_url_sanur', 'option')): ?>
                            <div class="reservation-form-container bg-white shadow-sm rounded mb-4 overflow-hidden">
                                <!-- <iframe src="<?php echo get_field('reservation_url_sanur', 'option'); ?>" frameborder="0"
                                    scrolling="auto" class="resdiary-iframe"
                                    style="width:100%; min-height: 650px; border:none; display: block;"></iframe> -->
                                    <div class="rd-widget-frame"></div>
                                    <input class="rdwidgeturl" name="rdwidgeturl" type="hidden" value="<?= get_field('reservation_url_sanur', 'option'); ?>" />
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

<!-- <script type="text/javascript" data-no-optimize="1" src="https://booking.resdiary.com/bundles/WidgetV2Loader.js"></script> -->
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

<script id="reservation-logic">
(function() {
    function initReservation() {
        const sanurBtn = document.getElementById('res-sanur-tab');
        const ubudBtn = document.getElementById('res-ubud-tab');
        if (!sanurBtn || !ubudBtn) return;

        function loadScript(src, id, callback) {
            if (document.getElementById(id)) {
                if (callback) callback();
                return;
            }
            const script = document.createElement("script");
            script.src = src;
            script.id = id;
            script.type = "text/javascript";
            script.onload = callback;
            document.head.appendChild(script);
        }

        function waitForJQuery(cb) {
            if (window.jQuery) cb();
            else setTimeout(() => waitForJQuery(cb), 50);
        }

        function waitForJQueryUI(cb) {
            if (window.jQuery && window.jQuery.ui) cb();
            else setTimeout(() => waitForJQueryUI(cb), 50);
        }

        function loadResDiaryWidget(panelId) {
            const panel = document.querySelector(panelId);
            if (!panel) return;

            const urlInput = panel.querySelector(".rdwidgeturl");
            const frame = panel.querySelector(".rd-widget-frame");
            if (!urlInput || !frame) return;

            // Don't reload if already loaded or loading
            if (frame.getAttribute('data-loaded') === 'true' || frame.innerHTML.trim() !== "") return;
            
            frame.setAttribute('data-loaded', 'true');
            const url = urlInput.value;
            const link = document.createElement("a");
            link.href = url;

            const doLoad = () => {
                // console.log('Loading ResDiary for:', panelId);
                jQuery(frame).load(url, function(response, status, xhr) {
                    if (status === "error") {
                        console.error("ResDiary load error:", xhr.status, xhr.statusText);
                        frame.removeAttribute('data-loaded');
                    }
                });
            };

            waitForJQuery(() => {
                if (window.jQuery.ui) {
                    doLoad();
                } else {
                    loadScript(link.origin + "/bundles/jquery-ui.js", "jquiloader", () => {
                        waitForJQueryUI(doLoad);
                    });
                }
            });

            if (!window.jQuery) {
                loadScript(link.origin + "/bundles/jquery-core.js", "jqloader");
            }
        }

        function unloadResDiaryWidget(panelId) {
            const panel = document.querySelector(panelId);
            if (!panel) return;
            const frame = panel.querySelector(".rd-widget-frame");
            if (frame) {
                // console.log('Unloading ResDiary for:', panelId);
                frame.innerHTML = "";
                frame.removeAttribute('data-loaded');
            }
        }

        // Tab event listeners
        const tabButtons = [sanurBtn, ubudBtn];
        tabButtons.forEach(btn => {
            btn.addEventListener('shown.bs.tab', (event) => {
                const targetId = event.target.getAttribute('data-bs-target');
                const relatedTargetId = event.relatedTarget ? event.relatedTarget.getAttribute('data-bs-target') : null;

                if (relatedTargetId) {
                    unloadResDiaryWidget(relatedTargetId);
                }
                loadResDiaryWidget(targetId);

                // Update hash
                const hash = targetId === '#res-sanur-content' ? '#sanur' : '#ubud';
                if (window.location.hash !== hash) {
                    history.replaceState(null, null, hash);
                }
            });

            btn.addEventListener('click', () => {
                const targetId = btn.getAttribute('data-bs-target');
                window.location.hash = targetId === '#res-sanur-content' ? '#sanur' : '#ubud';
            });
        });

        // Initial state based on Hash
        const hash = window.location.hash;
        let initialBtn = ubudBtn;

        if (hash === '#sanur') {
            initialBtn = sanurBtn;
        } else if (hash === '#ubud') {
            initialBtn = ubudBtn;
        }

        if (initialBtn) {
            // console.log('Initial setup for:', initialBtn.id);
            
            // Handle different Bootstrap versions for tab activation
            try {
                if (typeof bootstrap !== 'undefined' && bootstrap.Tab) {
                    const tabInstance = bootstrap.Tab.getOrCreateInstance ? 
                        bootstrap.Tab.getOrCreateInstance(initialBtn) : 
                        new bootstrap.Tab(initialBtn);
                    tabInstance.show();
                } else if (window.jQuery && typeof window.jQuery.fn.tab === 'function') {
                    // Bootstrap 4 / jQuery fallback
                    window.jQuery(initialBtn).tab('show');
                } else {
                    initialBtn.click();
                }
            } catch (e) {
                console.warn('Bootstrap tab init failed, falling back to click:', e);
                initialBtn.click();
            }
            
            // Explicitly load for initial active tab with a slight delay
            // to ensure jQuery and other dependencies are fully ready
            setTimeout(() => {
                const targetId = initialBtn.getAttribute('data-bs-target');
                loadResDiaryWidget(targetId);
            }, 300);
        }
    }

    if (document.readyState === 'complete') {
        initReservation();
    } else {
        window.addEventListener('load', initReservation);
    }
})();
</script>

<?php get_template_part('template-parts/footer', 'banner'); ?>
<?php
get_footer();
