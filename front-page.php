<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldenmonkey
 */
get_header();
?>
<link rel='stylesheet' id='joinchat-css'
  href='https://www.goldenmonkeyubud.com/wp-content/plugins/creame-whatsapp-me/public/css/joinchat.min.css?ver=6.0.10'
  media='all' />
<style>
  .wpsr-review-content {
      max-height: 80px;
      overflow-y: auto;
      padding-right: 5px;
      margin-bottom: 10px;
  }
  .wpsr-review-content::-webkit-scrollbar {
      width: 4px;
  }
  .wpsr-review-content::-webkit-scrollbar-track {
      background: #f1f1f1;
  }
  .wpsr-review-content::-webkit-scrollbar-thumb {
      background: #b40304;
      border-radius: 10px;
  }
  .swiper .wpsr-review-template {
      margin-top: 50px;
      height: 272px;
      height: 100% !important;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      padding: 20px;
      background: #fff;
      border: 1px solid #eee;
  }
  @media (max-width: 768px) {
    #mapTabContent .ratio-21x9::before {
      display: none !important;
      content: none !important;
    }
    #mapTabContent .ratio-21x9 {
      padding-bottom: 0 !important;
      height: 500px !important; 
    }
    #mapTabContent .ratio-21x9 iframe {
      position: absolute !important;
      top: 0 !important;
      left: 0 !important;
      width: 100% !important;
      height: 100% !important;
    }
  }

  .swiper .wpsr-review-template {
    margin-top: 64px;
    height: 230px;
    /* overflow: hidden; */
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  /* Styling link Read More agar terlihat profesional */
  .wpsr-review-content a {
    color: #b40304 !important;
    font-weight: bold;
    text-decoration: none !important;
    display: inline-block;
    margin-top: 10px;
  }

  .wpsr-review-content a:hover {
    text-decoration: underline !important;
  }

  .swiper .wpsr-col-12 {
    max-width: none;
  }

  #wpsr-reviews-grid-1266 {
    display: none
  }

  /* Custom Swiper Buttons - Arrows Only */
  .swiper-button-next,
  .swiper-button-prev {
    background-color: transparent !important;
    width: auto !important;
    height: auto !important;
    box-shadow: none !important;
    color: #333 !important;
    transition: all 0.3s ease;
  }

  .swiper-button-next:after,
  .swiper-button-prev:after {
    font-size: 30px !important;
    /* Ukuran panah sedikit diperbesar karena tanpa lingkaran */
    font-weight: bold;
  }

  .swiper-button-next:hover,
  .swiper-button-prev:hover {
    background-color: transparent !important;
    color: #b40304 !important;
    /* Berubah warna menjadi merah saat di-hover */
    transform: scale(1.2);
    /* Sedikit efek membesar saat di-hover */
  }

  .swiper-container {
    padding: 0 40px;
  }
</style>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<?php
if (have_posts()):
  while (have_posts()):
    the_post();
    ?>
    <div class="position-relative">
      <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
        <!-- [A11Y FIXED]: Mengubah <p> menjadi <h1> untuk hierarki heading utama agar SEO dan screen reader lebih baik -->
        <h1 class="fw-bold header-text fs-1"><?php the_field('header_title'); ?></h1>
        <?php if (have_rows('header_button')): ?>
          <?php while (have_rows('header_button')):
            the_row(); ?>
            <!-- [A11Y FIXED]: Mengganti typo "arial-label" menjadi "aria-label", tapi idealnya biarkan screen reader membaca teks tombol langsung -->
            <a href="<?php bloginfo('url') ?><?php the_sub_field('button_link'); ?>"
              class="btn btn-outline-light rounded-0 btn-lg mt-5"
              aria-label="<?php echo esc_attr(get_sub_field('button_text')) . ' at Golden Monkey Ubud'; ?>"><?php the_sub_field('button_text'); ?></a>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <?php $header_image = get_field('header_image'); ?>
      <?php echo wp_get_attachment_image($header_image, "full", false, array("class" => "img-header")); ?>
    </div>
    <?php
    get_template_part('template-parts/about', 'article');
    get_template_part('template-parts/footer', 'section');
    ?>

    <div class="container px-4 py-4 py-lg-5 mt-4">
      <h2 style="color: black; text-align: center; color: #111111; font-weight: bold;">Reviews of
        Golden Monkey Restaurant</h2><br />
      <div class="swiper-container swiper">
        <div class="swiper-wrapper mb-4 mb-lg-5">
          <?php echo do_shortcode('[wp_social_ninja id="1266" platform="reviews"]'); ?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Navigation (Optional) [A11Y FIXED: Tambah atribut aksesibilitas pada Carousel control] -->
        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"></div>
        <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"></div>
      </div>
    </div>

    <div class="pt-4 bg-light">
      <div class="container py-4 py-lg-5">
        <!-- <h2 class="text-center fw-bold mb-3" style="color: #111111;">Find Us</h2> -->
        <!-- Map Tabs (Centered in Container) -->
        <ul class="nav nav-pills justify-content-center" id="mapTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active px-5 py-3 fw-bold text-uppercase rounded-0 border" id="map-ubud-tab"
              data-bs-toggle="pill" data-bs-target="#map-ubud-content" type="button" role="tab"
              aria-controls="map-ubud-content" aria-selected="true">Ubud</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link px-5 py-3 fw-bold text-uppercase rounded-0 border" id="map-sanur-tab"
              data-bs-toggle="pill" data-bs-target="#map-sanur-content" type="button" role="tab"
              aria-controls="map-sanur-content" aria-selected="false">Sanur</button>
          </li>
        </ul>
      </div>

      <!-- Map Content (Full Width / Edge-to-Edge) -->
      <div class="tab-content" id="mapTabContent">
        <div class="tab-pane fade show active" id="map-ubud-content" role="tabpanel" aria-labelledby="map-ubud-tab">
          <div class="ratio ratio-21x9 shadow-sm">
            <?php echo get_field('google_maps_embed_ubud', 'option'); ?>
          </div>
        </div>
        <div class="tab-pane fade" id="map-sanur-content" role="tabpanel" aria-labelledby="map-sanur-tab">
          <div class="ratio ratio-21x9 shadow-sm">
            <?php echo get_field('google_maps_embed_sanur', 'option'); ?>
          </div>
        </div>
      </div>
    </div>

    <style>
      #mapTab .nav-link {
        color: #000;
        background-color: #fff;
        border-color: #dee2e6 !important;
        transition: all 0.3s ease;
      }

      #mapTab .nav-link:hover:not(.active) {
        background-color: #f8f9fa !important;
        color: #b40304 !important;
        border-color: #b40304 !important;
      }

      #mapTab .nav-link.active {
        background-color: #b40304 !important;
        color: #fff !important;
        border-color: transparent !important;
        outline: none !important;
        box-shadow: none !important;
      }

      /* [A11Y FIXED]: Fokus visual untuk navigasi tombol Tab keyboard */
      #mapTab .nav-link:focus-visible {
        outline: 3px solid #111 !important;
        outline-offset: -3px;
        box-shadow: 0 0 0 4px rgba(180, 3, 4, 0.4) !important;
      }

      .ratio-21x9 {
        --bs-aspect-ratio: 40%;
      }

      @media (max-width: 768px) {
        .ratio-21x9 {
          --bs-aspect-ratio: 100%;
        }
      }
    </style>

    <?php
    get_template_part('template-parts/footer', 'banner');
    ?>

    <?php if (get_field('popup_title')): ?>
      <!-- [A11Y FIXED: Menambahkan aria-modal="true" dan menghapus role jika digantikan oleh atribut bawaan bootstrap tapi menambahkan dukungan dialog secara eksplisit] -->
      <div class="modal fade" id="GoldenMonkeyOffer" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="GoldenMonkeyOfferLabel" aria-modal="true" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body text-white text-center px-lg-5">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close modal window"></button>
              <h2 id="GoldenMonkeyOfferLabel" class="py-4 fs-4"><?php the_field('popup_title'); ?></h2>
              <p class="pb-4"><?php the_field('popup_text'); ?></p>
              <!-- [A11Y FIXED: aria-label dihapus agar pembaca layar otomatis membaca isi teks href yang lebih akurat dan relevan, daripada tertimpa "Golden Monkey Popup"] -->
              <a href="<?php the_field('popup_link'); ?>" class="btn btn-light text-uppercase fw-bold py-2 px-3">
                <?php the_field('popup_button_text'); ?>
              </a>
              <span class="mx-2 fs-5 d-block d-lg-inline">OR</span>
              <a href="<?php the_field('popup_link2'); ?>" class="btn btn-light text-uppercase fw-bold py-2 px-3">
                <?php the_field('popup_button_text2'); ?>
              </a>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>
  <?php
  endwhile;
endif;
?>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const reviewGroups = document.querySelectorAll('div[role="group"]');
    const swiperWrapper = document.querySelector('.swiper-wrapper');

    reviewGroups.forEach(function (reviewGroup) {
      const ratingElement = reviewGroup.querySelector('div[data-rating]');
      const commentElement = reviewGroup.querySelector('.wpsr-review-content');

      if (ratingElement && ratingElement.getAttribute('data-rating') === '5' && commentElement && commentElement.textContent.trim() !== '') {
        const swiperSlide = document.createElement('div');
        swiperSlide.classList.add('swiper-slide');
        swiperSlide.appendChild(reviewGroup);
        swiperWrapper.appendChild(swiperSlide);
      } else {
        reviewGroup.style.display = 'none';
      }
    });

    const swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 4,
      loop: true,
      autoHeight: false, // Jaga agar tinggi baris slider tetap seragam
      alignItems: 'stretch',
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
      },
      breakpoints: {
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 4 }
      }
    });

    // Handle klik pada link di dalam review agar mengarah ke Google Review
    jQuery(document).on('click', '.wpsr-review-content a', function (e) {
      // URL Google Review Resmi untuk Golden Monkey Ubud
      const googleReviewUrl = 'https://search.google.com/local/reviews?placeid=ChIJX9bJd2zN0i0Re8xnVlwLT8k';
      
      jQuery(this).attr('href', googleReviewUrl);
      jQuery(this).attr('target', '_blank');
      jQuery(this).attr('rel', 'noopener noreferrer');
    });
  });
</script>
<?php
get_footer();
