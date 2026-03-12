<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package goldenmonkey
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">	
	<?php wp_head(); ?>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-53QR2DZ');</script>
  <!-- End Google Tag Manager -->
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <div class="fixed-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 py-2 text-white">
          <nav class="navbar navbar-expand-lg navbar-light text-uppercase">
            <div class="container-fluid justify-content-end">
              <div class="navbar-brand me-auto"  aria-label="Logo">
              <img src="<?php bloginfo('template_url'); ?>/images/golden-monkey-logo.svg" alt="Golden Monkey" width="80px" height="89px" class="logo-1">
              <img src="<?php bloginfo('template_url'); ?>/images/golden-monkey-logo-black.svg" alt="Golden Monkey" width="80px" height="89px" class="logo-2 d-none">
              </div>
              <div class="row d-lg-none landing-row w-50 gy-1 gy-lg-0">
                <div class="col-12">
                <a href="<?php bloginfo('template_url'); ?>/reservations/" class="d-block btn btn-reserve fw-bold rounded-0 me-3 fs-10" aria-label="Reservations">Reservations</a>
                </div>
                <div class="col-12">
                <a href="<?php bloginfo('template_url'); ?>/delivery/" class="d-block btn btn-reserve fw-bold rounded-0 me-3 fs-10" aria-label="Delivery">Delivery</a>
                </div>
              </div>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>              
              <div class="collapse navbar-collapse pt-3 pt-lg-0" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                <?php
                  wp_nav_menu([
                    'menu'            => 'Main Menu',
                    'container'		    => false,
                    'items_wrap'	    => '%3$s',
                    'container' 	    => '',
                    'depth'           => 2,
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker()
                  ]);
                ?>                  
                </ul>
                <a href="<?php bloginfo('url')?>/delivery/" class="btn btn-reserve fw-bold ms-4 d-none d-lg-block" aria-label="Home Delivery">Home Delivery</a> 
                <a href="<?php bloginfo('url')?>/reservations/" class="btn btn-reserve fw-bold ms-4 d-none d-lg-block" aria-label="Reservations">Reservations</a>                                
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
