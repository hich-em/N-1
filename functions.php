<?php
/**
 * Number one functions and definitions
 *
 * @package Number one
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'number_one_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function number_one_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Number one, use a find and replace
	 * to change 'number-one' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'number-one', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'number-one' ),
	) );
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link'
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'number_one_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
add_theme_support( 'post-thumbnails' );
endif; // number_one_setup
add_action( 'after_setup_theme', 'number_one_setup' );


/*
function install_plug()
{

}
add_action( 'after_setup_theme', 'install_plug' );*/

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function number_one_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'number-one' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'number_one_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function number_one_scripts() {
	wp_enqueue_style( 'number-one-style', get_stylesheet_uri() );

	wp_enqueue_script( 'number-one-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'number-one-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'number_one_scripts' );

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

add_action('admin_menu', 'setup_theme_admin_menus');
function setup_theme_admin_menus() {
  add_menu_page('Theme settings', 'N°1 Options', 'manage_options', 
        'None_theme_settings', 'theme_settings_page');
  add_submenu_page('None_theme_settings', 
        'N°1 Option Elements', 'Settings', 'manage_options', 
        'N-One-elements', 'theme_front_page_settings'); 
}
function theme_front_page_settings() {
include "optionN1.php";
}

function theme_settings_page() {
include "Options.php";
}

function make_Noneoptions()
{
	$x=esc_url( home_url( '/' ) );
$op2=update_option( 'desc_site', array($x.'wp-content/themes/number-one/img/logo.png','Welcome to N°1 WP themes','This theme is Free licensed <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>'),'','' );
$op3=update_option( 'imgservice', array($x."wp-content/themes/number-one/img/logo.png",$x."wp-content/themes/number-one/img/logo.png",$x."wp-content/themes/number-one/img/logo.png" ),'','' );
$op6=update_option( 'titleservice', array("service1","service2","service3" ),'','' );
$op11=update_option( 'descservice',array("shortdesc1","shortdesc2","shortdesc3" ),'','' );
$op3=update_option( 'imgteam', array($x."wp-content/themes/number-one/img/team/member1.jpg",$x."wp-content/themes/number-one/img/team/member2.jpg",$x."wp-content/themes/number-one/img/team/member3.jpg",$x."wp-content/themes/number-one/img/team/member4.jpg" ),'','' );
$op6=update_option( 'nameteam', array("member1","member2","member3","member4" ),'','' );
$op11=update_option( 'descteam',array("PDG","CEO","Secrétaire général ","Ajent" ),'','' );
$op11=update_option( 'section1name','Section1','','' );
$op11=update_option( 'section1id','Section1','','' );
$op11=update_option( 'section2name','Section2','','' );
$op11=update_option( 'section2id','Section2','','' );

}
add_action("after_switch_theme", "make_Noneoptions");