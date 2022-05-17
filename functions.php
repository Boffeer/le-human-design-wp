<?php

/**
 * le-human-design functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package le-human-design
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function lhd_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on le-human-design, use a find and replace
		* to change 'lhd' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('lhd', get_template_directory() . '/languages');

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
			'menu-1' => esc_html__('Primary', 'lhd'),
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
			'lhd_custom_background_args',
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
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'lhd_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lhd_content_width()
{
	$GLOBALS['content_width'] = apply_filters('lhd_content_width', 640);
}
add_action('after_setup_theme', 'lhd_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lhd_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'lhd'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'lhd'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'lhd_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function lhd_scripts()
{
	wp_enqueue_style('normalize', get_stylesheet_directory_uri() . '/css/normalize.css', array(), _S_VERSION);
	wp_enqueue_style('splide-css', get_stylesheet_directory_uri() . '/css/splide.min.css', array(), _S_VERSION);
	wp_enqueue_style('poppa-cs', get_stylesheet_directory_uri() . '/assets/poppa/poppa.min.css', array(), _S_VERSION);
	wp_enqueue_style('poppa-cs', get_stylesheet_directory_uri() . '/assets/bayan/bayan.min.css', array(), _S_VERSION);
	wp_enqueue_style('lhd-style', get_stylesheet_directory_uri() . '/css/index.min.css', array(), _S_VERSION);

	wp_enqueue_script('splide-js', get_stylesheet_directory_uri() . '/js/splide.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('poppa-js', get_stylesheet_directory_uri() . '/assets/poppa/poppa.js', array(), _S_VERSION, true);
	wp_enqueue_script('bayan-js', get_stylesheet_directory_uri() . '/assets/bayan/bayan.js', array(), _S_VERSION, true);
	wp_enqueue_script('lhd-scripts', get_stylesheet_directory_uri() . '/js/index.js', array(), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'lhd_scripts');

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
