<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldenmonkey
 */

get_header();

$news_header_img = get_field('header_image_news', 'option');
$news_title = get_field('header_title', 'option') ?: str_replace('Category: ', '', get_the_archive_title());
$news_subtitle = get_field('header_news_sub_title', 'option') ?: strip_tags(get_the_archive_description());
?>

<!-- Header Section (Matching other pages) -->
<div class="position-relative overflow-hidden bg-brand" style="height: 45vh; min-height: 350px;">
  <!-- Background Image from ACF Options -->
  <?php if ($news_header_img): ?>
    <img src="<?php echo esc_url($news_header_img); ?>" class="position-absolute top-0 start-0 w-100 h-100" alt="<?php echo esc_attr($news_title); ?>" style="z-index: 0; object-fit: cover; object-position: center;">
  <?php endif; ?>

  <!-- Background Overlay -->
  <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.5); z-index: 1;"></div>

  <!-- Header Content -->
  <div class="position-absolute top-50 start-50 translate-middle text-center text-white w-100 px-3" style="z-index: 2;">
    <h1 class="fw-bold display-4 text-uppercase mb-0">
      <?php echo esc_html($news_title); ?>
    </h1>
    <?php if ($news_subtitle): ?>
      <div class="archive-description fs-5 mt-3 fw-light opacity-75">
        <?php echo esc_html($news_subtitle); ?>
      </div>
    <?php endif; ?>
  </div>
</div>

<div class="bg-white py-5">
  <main id="primary" class="container py-lg-4">
    <div class="row g-4">
      <?php if (have_posts()): ?>
        <?php
        /* Start the Loop */
        while (have_posts()):
          the_post();
          get_template_part('template-parts/content', 'media');
        endwhile;
        ?>

        <!-- Pagination Section -->
        <div class="col-12 text-center mt-5">
          <div class="pagination pt-5 border-top">
            <?php
            the_posts_pagination([
              'mid_size' => 2,
              'prev_text' => __('&larr; Previous', 'goldenmonkey'),
              'next_text' => __('Next &rarr;', 'goldenmonkey'),
              'class' => 'pagination justify-content-center'
            ]);
            ?>
          </div>
        </div>

      <?php else: ?>
        <?php get_template_part('template-parts/content', 'none'); ?>
      <?php endif; ?>
    </div>
  </main>
</div>

<style>
  /* Pagination Styling - Clean & Premium */
  .pagination {
    margin-top: 3rem;
    align-items: center;
    justify-content: center;
  }

  .pagination .nav-links {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 8px;
    flex-wrap: wrap;
  }

  .pagination .page-numbers {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 48px;
    height: 48px;
    padding: 0 12px;
    background-color: #fff;
    border: 1px solid #dee2e6;
    color: #111;
    text-decoration: none;
    font-weight: 700;
    font-size: 0.9rem;
    transition: all 0.3s ease;
    border-radius: 0;
  }

  /* Current Page */
  .pagination .page-numbers.current {
    background-color: #b40304;
    color: #fff;
    border-color: #b40304;
    pointer-events: none;
  }

  /* Dots (...) */
  .pagination .page-numbers.dots {
    border-color: transparent;
    background-color: transparent;
    color: #999;
  }

  /* Hover State */
  .pagination .page-numbers:hover:not(.current):not(.dots) {
    background-color: #111;
    color: #fff;
    border-color: #111;
  }

  /* Next & Previous Icons Styling */
  .pagination .page-numbers.next,
  .pagination .page-numbers.prev {
    font-size: 1.2rem;
    background-color: #f8f9fa;
  }

  @media (max-width: 576px) {
    .pagination .page-numbers {
      min-width: 40px;
      height: 40px;
      font-size: 0.8rem;
    }
  }
</style>

<?php get_template_part('template-parts/footer', 'banner'); ?>
<?php get_footer();
