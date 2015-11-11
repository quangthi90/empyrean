<?php

function registerText(){
	$groupPageTitle = "Page Title";
	$groupLabels = "Texts";

	pll_register_string("Welcome","welcome", $groupPageTitle, false);
	pll_register_string("Home","home", $groupPageTitle, false);
	pll_register_string("About Us","about_us", $groupPageTitle, false);
	pll_register_string("Gallery","gallery",  $groupPageTitle, false);
	pll_register_string("Design Forum","design_forum",  $groupPageTitle, false);
	pll_register_string("Contact","contact",  $groupPageTitle, false);
	pll_register_string("Policy","policy",  $groupPageTitle, false);
	pll_register_string("Music","music",  $groupLabels, false);
	pll_register_string("ON","on",  $groupLabels, false);
	pll_register_string("OFF","off",  $groupLabels, false);
	pll_register_string("Copyright &copy; 2015 Empyrean Design. All rights reserved.","copyright",  $groupLabels, true);

	pll_register_string("FULL NAME","lblFullName",  $groupLabels, false);
	pll_register_string("EMAIL","lblEmail",  $groupLabels, false);
	pll_register_string("SCHOOL","lblSchool",  $groupLabels, false);
	pll_register_string("CLIENT'S CONTACT", "lblContact",$groupLabels, false);
	pll_register_string("CONTENT", "lblContent", $groupLabels, false);
	pll_register_string("FACULTY","lblFaculty",  $groupLabels, false);
	pll_register_string("YEAR STARTED","lblYearStarted",  $groupLabels, false);
	pll_register_string("WHAT's YOUR CURRENT/FUTURE ASPIRATION","lblAspiration",  $groupLabels, true);
	pll_register_string("Send", "lblSend", $groupLabels, false);
	pll_register_string("Client's Enquiry","lblClientEnquiry",  $groupLabels, false);
	pll_register_string("* All above information will be kept confidential and will not be used by any third party.", "lblFormConfidentialInfo", $groupLabels, true);
	pll_register_string("Job Opportunity","lblJobOpportunity",  $groupLabels, false);
	pll_register_string("<p>We are actively recruiting new staff for our business expansion or forming of a new division. You may be an office staff or designer or a project manager. <br/>Interested personal may email to us direct at: <a href='mailto: hr@empyreandesign.com'>hr@empyreandesign.com</a></p>","lblJobOpportunityContent",  $groupLabels, true);
	
}

if ( ! function_exists( 'app_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 */
function app_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on twentyfifteen, use a find and replace
	 * to change 'twentyfifteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'empyrean', get_template_directory() . '/languages' );

	registerText();

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
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'empyrean' )
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
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	show_admin_bar(false);
}
endif; // app_setup
add_action( 'after_setup_theme', 'app_setup' );

/**
 * Register widget area.
 * 
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function app_widgets_init() {
}
add_action( 'widgets_init', 'app_widgets_init' );

if ( ! function_exists( 'app_fonts_url' ) ) :
/**
 * Register Google fonts
 * 
 *
 * @return string Google fonts URL for the theme.
 */
function app_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';
	$fonts[] = 'Lato';

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * JavaScript Detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Fifteen 1.1
 */
function app_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'app_javascript_detection', 0 );

/**
 * Enqueue scripts and styles.
 * 
 */
function app_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'app-fonts', app_fonts_url(), array(), null );

	// Load our main stylesheet.
	wp_enqueue_style( 'style-normalize', get_template_directory_uri().'/css/normalize.min.css' );
	wp_enqueue_style( 'style-popup', get_template_directory_uri().'/js/vendor/popup/magnific-popup.css' );
	wp_enqueue_style( 'style-carousel', get_template_directory_uri().'/js/vendor/carousel/owl.carousel.css' );
	wp_enqueue_style( 'style-main', get_template_directory_uri().'/css/main.css' );

	wp_enqueue_script( 'app-js-jquery', get_template_directory_uri() . '/js/vendor/jquery-1.11.2.min.js');
	wp_enqueue_script( 'app-js-popup', get_template_directory_uri() . '/js/vendor/popup/jquery.magnific-popup.min.js' );
	wp_enqueue_script( 'app-js-backstretch', get_template_directory_uri() . '/js/vendor/jquery.backstretch.min.js' );
	wp_enqueue_script( 'app-js-carousel', get_template_directory_uri() . '/js/vendor/carousel/owl.carousel.min.js' );
	wp_enqueue_script( 'app-js-main', get_template_directory_uri() . '/js/main.js' );     
}
add_action( 'wp_enqueue_scripts', 'app_scripts' );

require get_template_directory() . '/inc/template-tags.php';