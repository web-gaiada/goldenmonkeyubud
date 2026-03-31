<?php
/**
 * Template Name: Linktree Page
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
  <style>
    :root {
      --brand-red: #b40304;
      --brand-dark: #1a1a1a;
      --bg-light: #fdfdfd;
      --text-main: #333333;
      --text-muted: #666666;
      --shadow-soft: 0 4px 20px rgba(0, 0, 0, 0.06);
      --shadow-hover: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    body.page-template-page-linktree {
      background-color: var(--bg-light);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
      color: var(--text-main);
      margin: 0;
      padding: 40px 20px;
    }

    .linktree-main-container {
      width: 100%;
      max-width: 500px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .linktree-title {
      color: var(--brand-red);
    }

    .linktree-header {
      width: 100%;
      text-align: center;
      margin-bottom: 30px;
      color: var(--brand-red);
    }

    .linktree-logo {
      max-width: 150px;
      height: auto;
      margin: 0 auto;
      transition: transform 0.3s ease;
      color: var(--brand-red);
    }

    .linktree-logo:hover {
      transform: scale(1.05);
    }

    .linktree-wrapper {
      width: 100%;
      margin-bottom: 30px;
    }

    .linktree-tabs-nav {
      background-color: #fff;
      border-radius: 100px;
      padding: 5px;
      box-shadow: var(--shadow-soft);
      margin-bottom: 25px;
      display: flex;
      border: 1px solid #f0f0f0;
      list-style: none;
    }

    .linktree-tabs-nav .nav-item {
      flex: 1;
    }

    .linktree-tabs-nav .nav-link {
      border-radius: 100px !important;
      padding: 12px 10px;
      color: var(--text-muted);
      font-weight: 700;
      font-size: 0.85rem;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      transition: all 0.3s ease;
      cursor: pointer;
      border: none;
      background: transparent;
      width: 100%;
      display: block;
      text-align: center;
    }

    .linktree-tabs-nav .nav-link.active {
      background-color: var(--brand-red) !important;
      color: #fff !important;
      box-shadow: 0 4px 12px rgba(180, 3, 4, 0.25);
    }

    .linktree-buttons-list {
      display: flex;
      flex-direction: column;
      gap: 14px;
    }

    /* PERFECT CENTERING CSS GRID */
    .linktree-btn {
      display: grid;
      grid-template-columns: 50px 1fr 50px;
      /* Kolom 1: Ikon, Kolom 2: Teks (Center), Kolom 3: Penyeimbang */
      align-items: center;
      width: 100%;
      padding: 16px 0;
      background-color: #fff;
      color: var(--text-main);
      text-decoration: none !important;
      font-weight: 600;
      font-size: 1rem;
      border-radius: 12px;
      border: 1px solid #f0f0f0;
      box-shadow: var(--shadow-soft);
      transition: all 0.3s ease;
      text-align: center;
    }

    .linktree-btn i {
      grid-column: 1;
      font-size: 1.2rem;
      display: flex;
      justify-content: center;
    }

    .linktree-btn span {
      grid-column: 2;
    }

    /* Element penyeimbang di kolom 3 */
    .linktree-btn::after {
      content: '';
      grid-column: 3;
      width: 50px;
    }

    .linktree-btn:hover {
      transform: translateY(-2px);
      box-shadow: var(--shadow-hover);
      border-color: var(--brand-red);
      color: var(--brand-red);
    }

    .btn-wa i {
      color: #25D366;
    }

    .btn-maps i {
      color: #EA4335;
    }

    .btn-menu i,
    .btn-rsvp i {
      color: var(--brand-red);
    }

    .btn-gofood i {
      color: #ee2737;
    }

    .btn-grabfood i {
      color: #00b14f;
    }

    .linktree-info {
      text-align: center;
      font-size: 0.8rem;
      color: var(--text-muted);
      margin-top: -4px;
      margin-bottom: 6px;
      line-height: 1.4;
    }

    .linktree-footer {
      width: 100%;
      text-align: center;
      margin-top: 10px;
    }

    .footer-socials {
      display: flex;
      justify-content: center;
      gap: 15px;
      margin-bottom: 15px;
    }

    .footer-socials a {
      color: var(--text-muted);
      font-size: 1.3rem;
      transition: color 0.3s ease;
    }

    .footer-socials a:hover {
      color: var(--brand-red);
    }

    .footer-copyright {
      font-size: 0.8rem;
      color: #bbb;
      margin-bottom: 5px;
    }

    .footer-back-link {
      display: inline-block;
      color: var(--brand-red);
      text-decoration: none;
      font-weight: 600;
      font-size: 0.85rem;
    }

    .footer-back-link:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body <?php body_class('page-template-page-linktree'); ?>>
  <?php wp_body_open(); ?>

  <div class="linktree-main-container">

    <header class="linktree-header">
      <?php
      $custom_logo_id = get_theme_mod('custom_logo');
      if ($custom_logo_id) {
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
        echo '<a href="' . home_url('/') . '"><img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" class="linktree-logo"></a>';
      } else {
        echo '<a href="' . home_url('/') . '" style="text-decoration:none;"><h1 class="linktree-title">' . get_bloginfo('name') . '</h1></a>';
      }
      ?>
    </header>

    <div class="linktree-wrapper">

      <ul class="nav linktree-tabs-nav" id="linktreeTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="tab-ubud" data-bs-toggle="pill" data-bs-target="#content-ubud"
            type="button" role="tab">Ubud</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="tab-sanur" data-bs-toggle="pill" data-bs-target="#content-sanur" type="button"
            role="tab">Sanur</button>
        </li>
      </ul>

      <div class="tab-content" id="linktreeTabContent">

        <!-- ================= UBUD CONTENT ================= -->
        <div class="tab-pane fade show active" id="content-ubud" role="tabpanel">
          <div class="linktree-buttons-list">
            <?php
            $wa_number_ubud = get_field('whatsapp_number_ubud', 'option');
            $wa_text_ubud = get_field('whatsapp_text_ubud', 'option');
            $maps_url_ubud = get_field('google_maps_url_ubud', 'option');
            $address_ubud = strip_tags(get_field('address_ubud', 'option'));
            $gofood_ubud = get_field('go_food_url_ubud', 'option');
            $grabfood_ubud = get_field('grab_food_url_ubud', 'option');

            $wa_link_ubud = 'https://api.whatsapp.com/send/?phone=' . esc_attr($wa_number_ubud) . '&text=' . urlencode($wa_text_ubud);
            ?>

            <a href="<?php echo home_url('/menu/?loc=ubud'); ?>" class="linktree-btn btn-rsvp"><i
                class="fas fa-utensils"></i><span>Food Menu</span></a>

            <a href="<?php echo home_url('/reservations/?loc=ubud'); ?>" class="linktree-btn btn-rsvp"><i
                class="fas fa-calendar-check"></i><span>Reservation</span></a>

            <a href="<?php echo esc_url($wa_link_ubud); ?>" target="_blank" class="linktree-btn btn-wa"><i
                class="fab fa-whatsapp"></i><span>WhatsApp Ubud</span></a>

            <a href="<?php echo esc_url($maps_url_ubud); ?>" target="_blank" class="linktree-btn btn-maps"><i
                class="fas fa-map-marker-alt"></i><span>Google Maps Ubud</span></a>
            <?php if ($gofood_ubud): ?>
              <a href="<?php echo esc_url($gofood_ubud); ?>" target="_blank" class="linktree-btn btn-gofood"><i
                  class="fas fa-motorcycle"></i><span>Go Food Ubud</span></a>
            <?php endif; ?>

            <?php if ($grabfood_ubud): ?>
              <a href="<?php echo esc_url($grabfood_ubud); ?>" target="_blank" class="linktree-btn btn-grabfood"><i
                  class="fas fa-motorcycle"></i><span>Grab Food Ubud</span></a>
            <?php endif; ?>
          </div>
        </div>

        <!-- ================= SANUR CONTENT ================= -->
        <div class="tab-pane fade" id="content-sanur" role="tabpanel">
          <div class="linktree-buttons-list">
            <?php
            $wa_number_sanur = get_field('whatsapp_number_sanur', 'option');
            $wa_text_sanur = get_field('whatsapp_text_sanur', 'option');
            $maps_url_sanur = get_field('google_maps_url_sanur', 'option');
            $address_sanur = strip_tags(get_field('address_sanur', 'option'));
            $gofood_sanur = get_field('go_food_url_sanur', 'option');
            $grabfood_sanur = get_field('grab_food_url_sanur', 'option');

            $wa_link_sanur = 'https://api.whatsapp.com/send/?phone=' . esc_attr($wa_number_sanur) . '&text=' . urlencode($wa_text_sanur);
            ?>

            <a href="<?php echo home_url('/menu/?loc=sanur'); ?>" class="linktree-btn btn-rsvp"><i
                class="fas fa-utensils"></i><span>Food Menu</span></a>

            <a href="<?php echo home_url('/reservations/?loc=sanur'); ?>" class="linktree-btn btn-rsvp"><i
                class="fas fa-calendar-check"></i><span>Reservation</span></a>


            <a href="<?php echo esc_url($wa_link_sanur); ?>" target="_blank" class="linktree-btn btn-wa"><i
                class="fab fa-whatsapp"></i><span>WhatsApp Sanur</span></a>

            <a href="<?php echo esc_url($maps_url_sanur); ?>" target="_blank" class="linktree-btn btn-maps"><i
                class="fas fa-map-marker-alt"></i><span>Google Maps Sanur</span></a>

            <?php if ($gofood_sanur): ?>
              <a href="<?php echo esc_url($gofood_sanur); ?>" target="_blank" class="linktree-btn btn-gofood"><i
                  class="fas fa-motorcycle"></i><span>Go Food Sanur</span></a>
            <?php endif; ?>

            <?php if ($grabfood_sanur): ?>
              <a href="<?php echo esc_url($grabfood_sanur); ?>" target="_blank" class="linktree-btn btn-grabfood"><i
                  class="fas fa-motorcycle"></i><span>Grab Food Sanur</span></a>
            <?php endif; ?>
          </div>
        </div>

      </div>
    </div>

    <footer class="linktree-footer">
      <div class="footer-socials">
        <a href="https://instagram.com/goldenmonkeyubud" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://facebook.com/goldenmonkeyubud" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="<?php echo home_url('/'); ?>"><i class="fas fa-globe"></i></a>
      </div>
      <div class="footer-copyright">
        &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
      </div>
      <a href="<?php echo home_url('/'); ?>" class="footer-back-link">
        Visit Website
      </a>
    </footer>

  </div>

  <?php wp_footer(); ?>
</body>

</html>