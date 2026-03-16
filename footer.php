<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package goldenmonkey
 */

?>

<style>
  .bg-red {
    background-color: #6f0100;
  }

  .bg-footer {
    background-color: #6f0100;
  }

  .title-footer {
    font-size: 1.5rem;
    font-weight: 800;
    text-transform: uppercase;
  }
</style>

<div class="bg-footer text-white white-link">
  <div class="container py-5">
    <div class="row py-3 py-lg-5 gy-5">
      <div class="col-12 col-lg-8">
        <div class="row">
          <!-- Ubud Location -->
          <div class="col-12 col-md-6 mb-4 mb-md-0">
            <h4 class="text-white title-footer">Golden Monkey Ubud</h4>
            <div class="pe-md-4 address-text">
              <?php echo wpautop(get_field('address_ubud', 'option')); ?>
              <div class="mt-3">
                <p class="mt-3">
                  <?php echo get_field('operational_hours_ubud', 'option'); ?>
                </p>
                <a href="tel:+<?php echo get_field('whatsapp_number_ubud', 'option'); ?>" target=" _blank"
                  class="text-white d-block mb-2">
                  Call Us:
                  <?php echo format_phone_number(get_field('whatsapp_number_ubud', 'option')); ?>
                </a>
                <a href="mailto:<?php echo get_field('email_ubud', 'option'); ?>" target="_blank"
                  class="text-white d-block mb-2">
                  <?php echo get_field('email_ubud', 'option'); ?>
                  </>
                  <a href="<?php echo get_field('google_maps_url_ubud', 'option'); ?>" target="_blank"
                    class="btn btn-sm btn-outline-light rounded-0 mt-2">Get Directions</a>
              </div>
            </div>
          </div>
          <!-- Sanur Location -->
          <div class="col-12 col-md-6">
            <h4 class="text-white title-footer">Golden Monkey Sanur</h4>
            <div class="address-text">
              <?php echo wpautop(get_field('address_sanur', 'option')); ?>
              <div class="mt-3">
                <p class="mt-3">
                  <?php echo get_field('operational_hours_sanur', 'option'); ?>
                </p>
                <a href="https://api.whatsapp.com/send/?phone=<?php echo get_field('whatsapp_number_sanur', 'option'); ?>&text=<?php echo urlencode(get_field('whatsapp_text_sanur', 'option')); ?>"
                  target="_blank" class="text-white d-block mb-2">
                  Call Us:
                  <?php echo format_phone_number(get_field('whatsapp_number_sanur', 'option')); ?>
                </a>
                <a href="mailto:<?php echo get_field('email_sanur', 'option'); ?>" target="_blank"
                  class="text-white d-block mb-2">
                  <?php echo get_field('email_sanur', 'option'); ?>
                </a>
                <a href="<?php echo get_field('google_maps_url_sanur', 'option'); ?>" target="_blank"
                  class="btn btn-sm btn-outline-light rounded-0 mt-2">Get Directions</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="px-lg-4">
          <h4 class="text-white title-footer">Follow Us</h4>
          <ul class="list-inline list-social mb-4">
            <li class="list-inline-item">
              <a href="https://www.instagram.com/goldenmonkeyrestaurant/" target="_blank" aria-label="Instagram">
                <img src="<?php bloginfo('template_url'); ?>/images/instagram-rounded-retangle.svg"
                  alt="Follow us on Instagram" title="Instagram" width="45" height="45">
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.facebook.com/goldenmonkeyrestaurant" target="_blank" aria-label="Facebook">
                <img src="<?php bloginfo('template_url'); ?>/images/facebook-logo-rounded-retangle.svg"
                  alt="Follow us on Facebook" title="Facebook" width="45" height="45">
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.tripadvisor.com/Restaurant_Review-g297701-d10915653-Reviews-Golden_Monkey-Ubud_Gianyar_Regency_Bali.html"
                target="_blank" aria-label="TripAdvisor">
                <img src="<?php bloginfo('template_url'); ?>/images/tripadvisor-rounded-retangle.svg"
                  alt="Review us on Tripadvisor" title="Tripadvisor" width="45" height="45">
              </a>
            </li>
          </ul>
          <img src="<?php bloginfo('template_url'); ?>/images/credit-card.png" alt="Credit Card Payment Gateway"
            class="mb-2" height="30" width="261">
          <div>
            <!--a href="https://chse.kemenparekraf.go.id/detail-tersertifikasi/golden-monkey-chinese-restaurant" target="_blank" aria-label="CHSE KEMENPAREKRAF"><img height="90" width="90" src="https://www.goldenmonkeyubud.com/wp-content/uploads/2022/03/chse-certified.webp" alt="CHSE KEMENPAREKRAF"></a-->
            <a target="_blank"
              href="https://www.tripadvisor.com/Restaurant_Review-g297701-d10915653-Reviews-Golden_Monkey-Ubud_Gianyar_Regency_Bali.html"
              aria-label="Tripadvisor Award"><img height="90" width="90"
                src="https://www.goldenmonkeyubud.com/wp-content/uploads/2022/03/tripadvisor-award-white.webp"
                alt="Tripadvisor Award"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="px-4 px-lg-0">
          &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. <a href="https://www.gaiada.com/" target="_blank"
            aria-label="Developed by Gaia Digital Agency" style="color:#000">Developed by Gaia Digital Agency.</a></div>
      </div>
    </div>
  </div>
</div>

<style>
  .whatsapp-btn {
    display: none;
  }

  @media(min-width: 992px) {
    .whatsapp-btn {
      display: block;
    }
  }
</style>
<div class="position-fixed bottom-0 start-0 end-0 d-lg-none d-none bg-footer">
  <div class="pt-4 pb-2 d-flex justify-content-center">
    <div class="item px-4">
      <div class="inner">
        <a href="https://www.goldenmonkeyubud.com/delivery/">
          <svg xmlns="http://www.w3.org/2000/svg" fill="#7c8ea3" width="20" height="20"
            viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path
              d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
          </svg>
        </a>
      </div>
    </div>
    <div class="item px-4">
      <div class="inner">
        <a
          href="https://www.google.com/maps?gs_lcrp=EgZjaHJvbWUqDAgAECMYJxiABBiKBTIMCAAQIxgnGIAEGIoFMhAIARAuGK8BGMcBGIAEGI4FMgYIAhBFGDkyBwgDEAAYgAQyBwgEEAAYgAQyBggFEEUYPDIGCAYQRRg8MgYIBxBFGDyoAgCwAgA&um=1&ie=UTF-8&fb=1&gl=id&sa=X&geocode=KT_WyXdsPdItMesxnVlwLT8J&daddr=Jl.+Dewisita,+Ubud,+Kecamatan+Ubud,+Kabupaten+Gianyar,+Bali+80571">
          <svg xmlns="http://www.w3.org/2000/svg" fill="#7c8ea3" width="20" height="20"
            viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path
              d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm50.7-186.9L162.4 380.6c-19.4 7.5-38.5-11.6-31-31l55.5-144.3c3.3-8.5 9.9-15.1 18.4-18.4l144.3-55.5c19.4-7.5 38.5 11.6 31 31L325.1 306.7c-3.2 8.5-9.9 15.1-18.4 18.4zM288 256a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
          </svg>
        </a>
      </div>
    </div>
    <div class="item">
      <div class="inner pb-4 ps-4 pe-4 pt-3 bg-footer" style="margin-top: -40px; border-radius: 50%;">
        <div class="inner p-3" style="background-color: #54acd3; border-radius: 50%;">
          <a href="https://www.goldenmonkeyubud.com/menu/">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="30" height="30"
              viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path
                d="M249.6 471.5c10.8 3.8 22.4-4.1 22.4-15.5V78.6c0-4.2-1.6-8.4-5-11C247.4 52 202.4 32 144 32C93.5 32 46.3 45.3 18.1 56.1C6.8 60.5 0 71.7 0 83.8V454.1c0 11.9 12.8 20.2 24.1 16.5C55.6 460.1 105.5 448 144 448c33.9 0 79 14 105.6 23.5zm76.8 0C353 462 398.1 448 432 448c38.5 0 88.4 12.1 119.9 22.6c11.3 3.8 24.1-4.6 24.1-16.5V83.8c0-12.1-6.8-23.3-18.1-27.6C529.7 45.3 482.5 32 432 32c-58.4 0-103.4 20-123 35.6c-3.3 2.6-5 6.8-5 11V456c0 11.4 11.7 19.3 22.4 15.5z" />
            </svg>
          </a>
        </div>
      </div>
    </div>
    <div class="item px-4">
      <div class="inner">
        <a href="https://www.goldenmonkeyubud.com/reservations/">
          <svg xmlns="http://www.w3.org/2000/svg" fill="#7c8ea3" width="20" height="20"
            viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path
              d="M0 48V487.7C0 501.1 10.9 512 24.3 512c5 0 9.9-1.5 14-4.4L192 400 345.7 507.6c4.1 2.9 9 4.4 14 4.4c13.4 0 24.3-10.9 24.3-24.3V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48z" />
          </svg>
        </a>
      </div>
    </div>
    <div class="item px-4">
      <div class="inner">
        <a
          href="https://api.whatsapp.com/send/?phone=628113866001&text=Golden+Monkey%21+I%27m+craving+for+the+best+Chinese+food+in+town...+&type=phone_number&app_absent=0">
          <svg xmlns="http://www.w3.org/2000/svg" fill="#7c8ea3" width="25" height="25"
            viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path
              d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
          </svg>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- <div class="whatsapp-btn">
  <a href="https://wa.me/628113866001?text=Golden%20Monkey!%20I'm%20craving%20for%20the%20best%20Chinese%20food%20in%20town...%20" id="floating-wa" class="wa" target="_blank" aria-label="Contact us via Whatsapp">
    <img src="<?php bloginfo('template_url'); ?>/images/whatsapp.svg" alt="Whatsapp" height="60" width="60">
  </a>
</div> -->

<?php wp_footer(); ?>
<script>
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll >= 10) {
      $(".fixed-top").addClass("bg-white-blur");
      $(".fixed-top").addClass("shadow");

      $(".navbar").removeClass("navbar-light");
      $(".navbar").addClass("navbar-dark");

      $(".logo-2").removeClass("d-none");
      $(".logo-1").addClass("d-none");

    } else {
      $(".fixed-top").removeClass("shadow");
      $(".fixed-top").removeClass("bg-white-blur");

      $(".navbar").removeClass("navbar-dark");
      $(".navbar").addClass("navbar-light");

      $(".logo-1").removeClass("d-none");
      $(".logo-2").addClass("d-none");
    }
  });
  <?php if (is_front_page() && get_field('popup_title')): ?>
    $(window).on('load', function () {
      if (!sessionStorage.getItem('shown-modal')) {
        $('#GoldenMonkeyOffer').modal('show');
        sessionStorage.setItem('shown-modal', 'true');
      }
    });
  <?php endif; ?>
  <?php if (is_page_template('page-menu.php')): ?>
    $('.c_header').click(function () {
      $(this).find('.counter').toggleClass('counter-plus counter-minus');
    });
  <?php endif; ?>
</script>

<!-- Cookies -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    // Flag untuk mendeteksi interaksi pengguna
    window.interactedCookie = false;

    // Fungsi delegasi event
    function delegate(el, evt, sel, handler) {
      el.addEventListener(evt, function (event) {
        var t = event.target;
        while (t && t !== this) {
          if (t.matches(sel)) {
            handler.call(t, event);
            return;
          }
          t = t.parentNode;
        }
      });
    }

    // Pantau jika pengguna mengklik banner cookie
    delegate(document, 'click', '.cky-consent-container', () => {
      window.interactedCookie = true; // Terdeteksi interaksi
    });

    // Otomatis klik tombol "Accept All" jika tidak ada interaksi dalam 4 detik
    setTimeout(() => {
      const acceptButton = document.querySelector('.cky-btn-accept'); // Tombol "Accept All"
      const banner = document.querySelector('.cky-consent-container'); // Banner cookie

      if (acceptButton && banner && !window.interactedCookie) {
        acceptButton.click(); // Klik tombol "Accept All"
        console.log('Accept All button clicked');

        // Tambahkan efek smooth untuk menghilangkan banner
        banner.classList.add('hide'); // Tambahkan class 'hide' untuk animasi
        console.log('Banner hidden with smooth effect');
      } else {
        console.log('User interacted or elements not found');
      }
    }, 2000);
  });
</script>

<!-- End Cookies -->

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

<script async="" src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"
  integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"></script>
<script src="https://www.fbgcdn.com/embedder/js/ewm2.js" defer async></script>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-53QR2DZ" height="0" width="0"
    style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>

</html>