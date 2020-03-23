<?php
/**
 * FINELINE TAPING functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package FINELINE_TAPING
 */

if (!function_exists('finelinetaping_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function finelinetaping_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on FINELINE TAPING, use a find and replace
		 * to change 'finelinetaping' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('finelinetaping', get_template_directory() . '/languages');

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
		register_nav_menus(array(
			'menu-1' => esc_html__('Primary', 'finelinetaping'),
		));

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('finelinetaping_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support('custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		));
	}
endif;
add_action('after_setup_theme', 'finelinetaping_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function finelinetaping_content_width()
{
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters('finelinetaping_content_width', 640);
}
add_action('after_setup_theme', 'finelinetaping_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function finelinetaping_widgets_init()
{
	register_sidebar(array(
		'name'          => esc_html__('Sidebar', 'finelinetaping'),
		'id'            => 'sidebar-1',
		'description'   => esc_html__('Add widgets here.', 'finelinetaping'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}
add_action('widgets_init', 'finelinetaping_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function finelinetaping_scripts()
{
	wp_enqueue_style('finelinetaping-style', get_stylesheet_uri());

	wp_enqueue_script('finelinetaping-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

	wp_enqueue_script('finelinetaping-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

	// My Integration files

	wp_enqueue_style('finelinetaping-crimson-font', 'https://fonts.googleapis.com/css?family=Muli:400,700&display=swap');

	wp_enqueue_style('finelinetaping-bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.css');
	wp_enqueue_style('finelinetaping-ionicons-css', get_template_directory_uri() . '/assets/fonts/ionicons/css/ionicons.min.css');
	wp_enqueue_style('finelinetaping-flaticon-css', get_template_directory_uri() . '/assets/fonts/law-icons/font/flaticon.css');
	wp_enqueue_style('finelinetaping-font-awesome-css', get_template_directory_uri() . '/assets/fonts/fontawesome/css/font-awesome.min.css');
	wp_enqueue_style('finelinetaping-logo-css', get_template_directory_uri() . '/assets/css/logo.css');
	wp_enqueue_style('finelinetaping-slick-css', get_template_directory_uri() . '/assets/css/slick.css');
	wp_enqueue_style('finelinetaping-slick-theme-css', get_template_directory_uri() . '/assets/css/slick-theme.css');

	wp_enqueue_style('finelinetaping-owl-carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
	wp_enqueue_style('finelinetaping-owl-theme-default-css', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');

	wp_enqueue_style('finelinetaping-helpers-css', get_template_directory_uri() . '/assets/css/helpers.css');
	wp_enqueue_style('finelinetaping-style-css', get_template_directory_uri() . '/assets/css/style.css');


	wp_enqueue_style('finelinetaping-base-css', get_template_directory_uri() . '/css/base.css');
	wp_enqueue_style('finelinetaping-vendor-css', get_template_directory_uri() . '/css/vendor.css');
	wp_enqueue_style('finelinetaping-main-css', get_template_directory_uri() . '/css/main.css');
	//wp_enqueue_style( 'finelinetaping-autoptimize-css', get_template_directory_uri() . '/assets/css/autoptimize_56c00677bffd4f274188a634160cadf0.css' );
	wp_enqueue_style('finelinetaping-myscript-css', get_template_directory_uri() . '/css/myscript.css');

	// Header scripts
	wp_enqueue_script('finelinetaping-modernizr', get_template_directory_uri() . '/js/modernizr.js', array(), '20191315', false);
	wp_enqueue_script('finelinetaping-pace', get_template_directory_uri() . '/js/pace.min.js', array(), '20191415', false);


	// Footer scripts
	wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', false, '3.3.1', true);
	wp_enqueue_script('jquery');

	wp_enqueue_script('finelinetaping-popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '20151215', true);
	wp_enqueue_script('finelinetaping-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '20151215', true);
	wp_enqueue_script('finelinetaping-slick-fix', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '20151215', true);
	wp_enqueue_script('finelinetaping-owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '20151215', true);
	wp_enqueue_script('finelinetaping-logo', get_template_directory_uri() . '/assets/js/logo.js', array(), '20151215', true);
	wp_enqueue_script('finelinetaping-jquery-waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array(), '20151215', true);
	wp_enqueue_script('finelinetaping-jquery-easing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array(), '20151215', true);
	wp_enqueue_script('finelinetaping-mainn', get_template_directory_uri() . '/assets/js/main.js', array(), '20151215', true);
	wp_enqueue_script('finelinetaping-jquery-2', get_template_directory_uri() . '/js/jquery-2.1.3.min.js', array(), '20151215', true);
	wp_enqueue_script('finelinetaping-plugins', get_template_directory_uri() . '/js/plugins.js', array(), '20151215', true);
	wp_enqueue_script('finelinetaping-main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true);
	wp_enqueue_script('finelinetaping-my', get_template_directory_uri() . '/js/myscript.js', array(), '20151215', true);
	wp_enqueue_script('finelinetaping-mymap', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBSPQI75_QClLdKdfJLSLej9pSzV06zbqM&callback=initMap', array(), '20151215', true);


	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'finelinetaping_scripts');

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

require get_template_directory() . '/gallery.php';
require get_template_directory() . '/custom-post-type.php';
require get_template_directory() . '/inc/ajax.php';

// shortcodes

//About
function about_page($atts, $content = null)
{

	//[page_about]

	//get the attributes
	$atts = shortcode_atts(
		array(),
		$atts,
		'page_about'
	);

	//return HTML
	ob_start();
	include 'template-parts/home-about.php';
	return ob_get_clean();
}
add_shortcode('page_about', 'about_page');

//Services
function service_page($atts, $content = null)
{

	//[page_services]

	//get the attributes
	$atts = shortcode_atts(
		array(),
		$atts,
		'page_service'
	);

	//return HTML
	ob_start();
	include 'template-parts/home-services.php';
	return ob_get_clean();
}
add_shortcode('page_service', 'service_page');

//Testimonials
function testimonials_page($atts, $content = null)
{

	//[page_testimonials]

	//get the attributes
	$atts = shortcode_atts(
		array(),
		$atts,
		'page_testimonials'
	);

	//return HTML
	ob_start();
	include 'template-parts/home-testimonials.php';
	return ob_get_clean();
}
add_shortcode('page_testimonials', 'testimonials_page');

//career
function career_page($atts, $content = null)
{

	//[page_career]

	//get the attributes
	$atts = shortcode_atts(
		array(),
		$atts,
		'page_career'
	);

	//return HTML
	ob_start();
	include 'template-parts/home-career.php';
	return ob_get_clean();
}
add_shortcode('page_career', 'career_page');

//Contact From
function contact_page($atts, $content = null)
{

	//[contact_form]

	//get the attributes
	$atts = shortcode_atts(
		array(),
		$atts,
		'contact_form'
	);

	//return HTML
	ob_start();
	include 'inc/templates/page-contact.php';
	return ob_get_clean();
}
add_shortcode('contact_form', 'contact_page');

//Gallery Content
function content_gallery($atts, $content = null)
{

	//[gallery_content]

	//get the attributes
	$atts = shortcode_atts(
		array(),
		$atts,
		'gallery_content'
	);

	//return HTML
	ob_start();
	include 'inc/templates/page-gallery.php';
	return ob_get_clean();
}
add_shortcode('gallery_content', 'content_gallery');


//Projects Content
function content_projects($atts, $content = null)
{
	//[projects_content]

	//get the attributes
	$atts = shortcode_atts(
		array(),
		$atts,
		'projects_content'
	);

	//return HTML
	ob_start();
	include 'inc/templates/page-projects.php';
	return ob_get_clean();
}
add_shortcode('projects_content', 'content_projects');
