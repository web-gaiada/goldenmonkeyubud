<?php
/**
 * goldenmonkey functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package goldenmonkey
 */
add_filter('show_admin_bar', '__return_false');
require_once('wp-bootstrap-navwalker.php');

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('goldenmonkey_setup')):
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function goldenmonkey_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on goldenmonkey, use a find and replace
		 * to change 'goldenmonkey' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('goldenmonkey', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'goldenmonkey'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'goldenmonkey_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height' => 250,
				'width' => 250,
				'flex-width' => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'goldenmonkey_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function goldenmonkey_content_width()
{
	$GLOBALS['content_width'] = apply_filters('goldenmonkey_content_width', 640);
}
add_action('after_setup_theme', 'goldenmonkey_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function goldenmonkey_widgets_init()
{
	register_sidebar(
		array(
			'name' => esc_html__('Footer Address', 'goldenmonkey'),
			'id' => 'footer-add',
			'description' => esc_html__('Add widgets here.', 'goldenmonkey'),
			'before_widget' => '<section id="%1$s" class="px-4 px-lg-0 %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h4 class="normal-text fw-bold">',
			'after_title' => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name' => esc_html__('Footer Widget', 'goldenmonkey'),
			'id' => 'footer-widget',
			'description' => esc_html__('Add widgets here.', 'goldenmonkey'),
			'before_widget' => '<div class="col-12 col-lg-7"><section id="%1$s" class="px-4 px-lg-0 %2$s">',
			'after_widget' => '</section></div>',
			'before_title' => '<h4 class="normal-text fw-bold">',
			'after_title' => '</h4>',
		)
	);
}
add_action('widgets_init', 'goldenmonkey_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function goldenmonkey_scripts()
{
	wp_enqueue_style('goldenmonkey-style', get_template_directory_uri() . '/css/style.min.css');

	wp_enqueue_script('jquery-latest', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '3.5.1', true);
	wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js', array(), '5.0.0', true);
}
add_action('wp_enqueue_scripts', 'goldenmonkey_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_filter('get_the_archive_title', function ($title) {
	if (is_category()) {
		$title = single_cat_title('', false);
	} elseif (is_tag()) {
		$title = single_tag_title('', false);
	} elseif (is_author()) {
		$title = '<span class="vcard">' . get_the_author() . '</span>';
	}
	return $title;
});

add_image_size('gallery-sml', 400, 600, true);

/**
 * Svg support.
 */
function add_file_types_to_uploads($file_types)
{
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes);
	return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

/**
 * Add ACF Options Page for Global Settings (Locations Master Data)
 */
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' => 'Global Settings',
		'menu_title' => 'Global Settings',
		'menu_slug' => 'global-settings',
		'capability' => 'edit_posts',
		'redirect' => false
	));

	acf_add_options_sub_page(array(
		'page_title' => 'Location: Ubud',
		'menu_title' => 'Ubud Settings',
		'parent_slug' => 'global-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' => 'Location: Sanur',
		'menu_title' => 'Sanur Settings',
		'parent_slug' => 'global-settings',
	));
}

// buatkan aku function untuk mem format nomor telepon agar lebih mudah dibaca
function format_phone_number($phone)
{
	// remove all non-numeric characters
	$phone = preg_replace('/\D+/', '', $phone);

	$prefix = '';
	// format phone number 628113866001, agar otomatis ada separator yang rapi
	// dan jika diawali dengan 62, maka dijadikan (+62), contoh nomor yang diinput 628113866001
	if (strpos($phone, '62') === 0) {
		$prefix = '(+62) ';
		$phone = substr($phone, 2);
	} elseif (strpos($phone, '0') === 0) {
		$prefix = '0';
		$phone = substr($phone, 1);
	}

	// Pemisahan format menjadi 3-4-x contoh: 811-3866-001
	if (strlen($phone) >= 9) {
		$p1 = substr($phone, 0, 3);
		$p2 = substr($phone, 3, 4);
		$p3 = substr($phone, 7);

		$formatted = $p1 . '-' . $p2 . ($p3 ? '-' . $p3 : '');
	} else {
		$formatted = rtrim(chunk_split($phone, 4, '-'), '-');
	}

	return $prefix . $formatted;
}

/**
 * Memperbaiki hilangnya active state pada menu saat pagination diklik (terutama Custom Links seperti /news/)
 * dan otomatis mengaktifkan menu yang relevan saat berada di halaman page/2, dll.
 */
add_filter('nav_menu_css_class', 'goldenmonkey_fix_pagination_nav_class', 10, 2);
function goldenmonkey_fix_pagination_nav_class($classes, $item) {
	$uri = $_SERVER['REQUEST_URI'] ?? '';
	
	// Jika URL yang diakses mengandung kata '/news' atau '/media', 
	// Pastikan item menu dengan nama atau URL 'News' / 'Media' mendapat class active.
	// Sangat tangguh untuk pagination seperti /news/page/2/ walaupun link-nya relative.
	$is_news_page = (preg_match('/\/news\b/i', $uri) || preg_match('/\/media\b/i', $uri));
	$is_news_item = (stripos($item->title, 'news') !== false || stripos($item->title, 'media') !== false || stripos($item->url, '/news') !== false || stripos($item->url, '/media') !== false);

	if ($is_news_page && $is_news_item) {
		$classes[] = 'current-menu-item';
		$classes[] = 'active';
	}
	
	// Bisa dijaga fallback standar untuk halaman is_home() atau single post
	if ((is_home() || is_archive() || is_singular('post')) && $is_news_item) {
		$classes[] = 'current-menu-item';
		$classes[] = 'active';
	}
	
	return array_unique($classes);
}