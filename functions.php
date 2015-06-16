<?php
/**
 * DCC 2015 functions and definitions
 *
 * @package DCC 2015
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'dcc_2015_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function dcc_2015_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on DCC 2015, use a find and replace
	 * to change 'dcc-2015' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'dcc-2015', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'dcc-2015' ),
		'social' => __( 'Social Links', 'dcc-marketing' )
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	/*add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );*/

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'dcc_2015_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	add_image_size( 'excerpt', 450, 200, TRUE );
	add_image_size( 'homeblog', 200, 200, TRUE );

}
endif; // dcc_2015_setup
add_action( 'after_setup_theme', 'dcc_2015_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function dcc_2015_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'dcc-2015' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'dcc_2015_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function dcc_2015_scripts() {

	wp_enqueue_style( 'dcc-2015-style', get_stylesheet_uri(), array( 'dashicons' ) );

	wp_enqueue_script( 'dcc-2015-navigation', get_template_directory_uri() . '/js/navigation.min.js', array(), '20120206', true );

	wp_enqueue_script( 'dcc-2015-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.min.js', array(), '20130115', true );

	wp_enqueue_script( 'dcc-2015-cat-select', get_template_directory_uri() . '/js/cat-select.min.js', array(), '20150412', true );

	/*if ( is_page( 'contact' ) ) {

		wp_enqueue_script( 'dcc-2015-acf-google-maps', 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false', array(), '20150202', true );
		wp_enqueue_script( 'dcc-2015-acf-maps', get_template_directory_uri() . '/js/acf-map.min.js', array( 'jquery', 'dcc-2015-acf-google-maps' ), '20150202', true );


	}*/

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_style( 'dcc-2015-google-fonts', dcc_2015_fonts_url(), array(), '20150423' );

}
add_action( 'wp_enqueue_scripts', 'dcc_2015_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Employee Directory functions.
 */
require get_template_directory() . '/inc/employee-directory.php';

/**
 * Load Slushman Themekit
 */
require get_template_directory() . '/inc/themekit.php';

/**
 * Load Slushman Themekit
 */
require get_template_directory() . '/inc/menukit.php';


function dcc_2015_category_select() {

	$return = '';

	$return .= '<div class="cats-list">';
	$return .= '<h3 class="cats-list-label">';
	$return .= __( 'Categories' );
	$return .= '</h3>';
	$return .= '<form id="category-select" class="category-select" action="';
	$return .= esc_url( site_url( '/' ) );
	$return .= '" method="get"><label>';

	$args['hide_if_empty']  = TRUE;
	$args['class'] 			= 'catswitch';
	$args['echo'] 			= 0;
	$args['show_option_all'] = 'Select category';

	$select 	= wp_dropdown_categories( $args );
	$replace 	= "<select$1 onchange='return this.form.submit()'>";
	$select  	= preg_replace( '#<select([^>]*)>#', $replace, $select );

	$return .= $select;
	$return .= '<noscript><input type="submit" value="View" /></noscript></label></form></div>';

	return $return;

}
