<?php
/**
 * The header for our theme
 *
 * @package goldenmonkey
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
  <!-- Google Tag Manager -->
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-53QR2DZ');</script>
  <!-- End Google Tag Manager -->

  <style>
    /* Base Navbar */
    .main-navbar {
      transition: all 0.4s ease;
      padding: 15px 0;
      background: transparent;
      z-index: 1030;
    }

    /* Scrolled State (Desktop & Mobile) */
    .main-navbar.scrolled {
      padding: 10px 0;
      background: rgba(255, 255, 255, 0.98) !important;
      box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    }

    /* Logo Styling */
    .navbar-brand img {
      transition: all 0.3s ease;
      height: 60px;
      width: auto;
    }

    .main-navbar.scrolled .navbar-brand img {
      height: 45px;
    }

    /* Menu Links - Desktop Default */
    .navbar-nav .nav-link {
      color: #fff !important;
      font-weight: 600;
      font-size: 0.8rem;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      padding: 10px 15px !important;
      transition: all 0.3s ease;
    }

    /* Menu Links - Scrolled Color */
    .main-navbar.scrolled .nav-link {
      color: #111 !important;
    }

    /* Active & Hover State Logic */
    .navbar-nav .nav-link:hover,
    .navbar-nav .current-menu-item>.nav-link,
    .navbar-nav .current_page_item>.nav-link,
    .navbar-nav .current_page_parent>.nav-link,
    .navbar-nav .current-menu-ancestor>.nav-link,
    .navbar-nav .current-page-ancestor>.nav-link,
    .navbar-nav .active>.nav-link {
      color: #b40304 !important;
      font-weight: 800;
    }

    /* Hover Line Effect (Desktop Only) */
    @media (min-width: 992px) {
      .navbar-nav .nav-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 15px;
        width: 0;
        height: 2px;
        background: #b40304;
        transition: width 0.3s ease;
      }

      /* Show line ONLY on hover */
      /* .navbar-nav .nav-link:hover::after {
        width: calc(100% - 30px);
      } */
    }

    /* CTA Buttons */
    .nav-cta {
      border-radius: 0;
      font-weight: 700 !important;
      text-transform: uppercase;
      font-size: 0.75rem !important;
      letter-spacing: 1px;
      padding: 12px 25px !important;
    }

    .btn-nav-reserve {
      background: #b40304;
      color: #fff !important;
      border: 1px solid #b40304;
      transition: all 0.3s ease;
    }

    .btn-nav-reserve:hover,
    .btn-nav-reserve.active {
      background: #fff !important;
      color: #b40304 !important;
      border-color: #b40304 !important;
      /* transform: translateY(-2px); */
    }

    .btn-nav-delivery {
      background: transparent;
      color: #fff !important;
      border: 1px solid #fff;
      transition: all 0.3s ease;
    }

    .btn-nav-delivery:hover,
    .btn-nav-delivery.active {
      background: #b40304 !important;
      color: #fff !important;
      border-color: #b40304 !important;
      /* transform: translateY(-2px); */
    }

    .main-navbar.scrolled .btn-nav-delivery {
      color: #111 !important;
      border-color: #111;
    }

    .main-navbar.scrolled .btn-nav-delivery:hover,
    .main-navbar.scrolled .btn-nav-delivery.active {
      color: #fff !important;
      font-weight: 700 !important;
      background: #b40304 !important;
      border-color: #b40304 !important;
    }

    /* Mobile Adjustments (THE FIX) */
    @media (max-width: 991px) {
      .main-navbar {
        padding: 10px 0;
        background: rgba(0, 0, 0, 0.6);
        /* Initial dark overlay */
        backdrop-filter: blur(5px);
      }

      /* Ensure Font is readable when scrolled on mobile */
      .main-navbar.scrolled .nav-link {
        color: #111 !important;
        /* Becomes dark on white background */
      }

      /* Logo height on mobile */
      .navbar-brand img {
        height: 40px;
      }

      /* Custom Toggler Icon */
      .navbar-toggler {
        border: none !important;
        outline: none !important;
        padding: 5px;
      }

      .navbar-toggler-icon {
        background-image: none !important;
        position: relative;
        width: 24px;
        height: 2px;
        background: #fff;
        /* Initial White */
        display: block;
        transition: 0.3s;
      }

      .navbar-toggler-icon::before,
      .navbar-toggler-icon::after {
        content: '';
        position: absolute;
        width: 24px;
        height: 2px;
        background: #fff;
        left: 0;
        transition: 0.3s;
      }

      .navbar-toggler-icon::before {
        top: -8px;
      }

      .navbar-toggler-icon::after {
        bottom: -8px;
      }

      /* Toggler Scrolled Color */
      .main-navbar.scrolled .navbar-toggler-icon,
      .main-navbar.scrolled .navbar-toggler-icon::before,
      .main-navbar.scrolled .navbar-toggler-icon::after {
        background: #111;
      }

      /* Mobile Menu Container (When Opened) */
      .navbar-collapse {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        background: #111 !important;
        /* Menu always dark for premium feel */
        padding: 100px 30px 40px;
        overflow-y: auto;
        z-index: -1;
      }

      /* Force menu text to be white when menu is OPEN, regardless of scroll */
      .navbar-collapse.show .nav-link {
        color: #fff !important;
        font-size: 1.3rem;
        /* border-bottom: 1px solid rgba(255, 255, 255, 0.1); */
        padding: 20px 0 !important;
      }

      /* Adjust Toggler when menu is open */
      .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon {
        background: transparent !important;
      }

      .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon::before {
        transform: rotate(45deg);
        top: 0;
        background: #fff !important;
      }

      .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon::after {
        transform: rotate(-45deg);
        bottom: 0;
        background: #fff !important;
      }

      .nav-cta {
        width: 100%;
        margin-top: 20px;
        text-align: center;
        padding: 15px !important;
      }
    }

    /* Mobile Reserve Button (Fixed in Top Bar) */
    .mobile-reserve-btn {
      background: #b40304;
      color: #fff !important;
      font-size: 0.65rem;
      font-weight: 800;
      padding: 8px 12px;
      letter-spacing: 1px;
      margin-right: 10px;
      z-index: 1031;
    }
  </style>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header class="fixed-top">
    <nav class="navbar navbar-expand-lg main-navbar">
      <div class="container px-3">
        <!-- Logo -->
        <a class="navbar-brand me-auto" href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php bloginfo('template_url'); ?>/images/golden-monkey-logo.svg" alt="Logo" class="logo-light">
          <img src="<?php bloginfo('template_url'); ?>/images/golden-monkey-logo-black.svg" alt="Logo"
            class="logo-dark d-none">
        </a>

        <!-- Mobile Quick Action -->
        <a href="<?php echo esc_url(home_url('/reservations/')); ?>"
          class="btn mobile-reserve-btn rounded-0 d-lg-none">RESERVE</a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
          aria-controls="mainNav" aria-expanded="false" aria-label="Menu">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu Content -->
        <div class="collapse navbar-collapse" id="mainNav">
          <ul class="navbar-nav ms-auto align-items-lg-center">
            <?php
            wp_nav_menu([
              'menu' => 'Main Menu',
              'container' => false,
              'items_wrap' => '%3$s',
              'depth' => 2,
              'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
              'walker' => new WP_Bootstrap_Navwalker()
            ]);
            ?>
            <!-- Action Buttons -->
            <li class="nav-item ms-lg-4 mt-4 mt-lg-0">
              <a href="<?php echo esc_url(home_url('/delivery/')); ?>"
                class="btn nav-cta btn-nav-delivery d-block d-lg-inline-block <?php echo is_page('delivery') ? 'active' : ''; ?>">Delivery</a>
            </li>
            <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
              <a href="<?php echo esc_url(home_url('/reservations/')); ?>"
                class="btn nav-cta btn-nav-reserve d-block d-lg-inline-block <?php echo is_page('reservations') ? 'active' : ''; ?>">Reservations</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const navbar = document.querySelector('.main-navbar');
      const logoLight = document.querySelector('.logo-light');
      const logoDark = document.querySelector('.logo-dark');

      function handleScroll() {
        if (window.scrollY > 50) {
          navbar.classList.add('scrolled');
          logoLight.classList.add('d-none');
          logoDark.classList.remove('d-none');
        } else {
          navbar.classList.remove('scrolled');
          logoLight.classList.remove('d-none');
          logoDark.classList.add('d-none');
        }
      }

      window.addEventListener('scroll', handleScroll);
      handleScroll(); // Run on init

      // Handle menu open body lock
      const mainNav = document.getElementById('mainNav');
      mainNav.addEventListener('show.bs.collapse', function () {
        document.body.style.overflow = 'hidden';
        navbar.classList.remove('scrolled'); // Force dark for menu overlay
        logoLight.classList.remove('d-none');
        logoDark.classList.add('d-none');
      });
      mainNav.addEventListener('hide.bs.collapse', function () {
        document.body.style.overflow = 'auto';
        handleScroll(); // Restore scroll state
      });
    });
  </script>