<?php

function registerText(){
	$groupPageTitle = "Page Title";
	$groupContent = "Page Title";
	$groupLabels = "Texts";

	pll_register_string("welcome","Welcome", $groupPageTitle, false);
	pll_register_string("home","Home", $groupPageTitle, false);
	pll_register_string("about_us","About Us", $groupPageTitle, false);
	pll_register_string("gallery", "Gallery", $groupPageTitle, false);
	pll_register_string("design_forum", "Design Forum", $groupPageTitle, false);
	pll_register_string("contact", "Contact", $groupPageTitle, false);
	pll_register_string("policy", "Policy", $groupPageTitle, false);

	pll_register_string("our_mission", "Our Mission", $groupLabels, false);
	pll_register_string("our_mission_content", "It is our belief that nothing exists by itself in this world. We co-exist with one another and we are interdependent on one another. This creates greater dimension and contributes colours to the earth. Good designs are not good enough; a great product is one that will be able to sell itself. We believe that the design that sells is the design that is most relevant and appealing to the consumer...", $groupContent, true);
	pll_register_string("our_story", "Our Story", $groupLabels, false);
	pll_register_string("our_story_content", "Empyrean Design was founded in 1992 by Eric Haywood Chang. Having graduated from LaSalle College of the Arts in Singapore; majoring in Interior Designing and minor in Product Designing and Fine Arts, he is a self-taught architect that possesses many years of experience and expertise in the related field. He is passionate about design, arts, and music...", $groupContent, true);

	pll_register_string("music", "Music", $groupLabels, false);
	pll_register_string("on", "ON", $groupLabels, false);
	pll_register_string("off", "OFF", $groupLabels, false);
	pll_register_string("cancel", "Cancel", $groupLabels, false);
	pll_register_string("copyright", "Copyright &copy; 2015 Empyrean Design. All rights reserved.", $groupLabels, true);
	
	pll_register_string("lblClientEnquiry", "Client's Enquiry", $groupLabels, false);
	pll_register_string("lblFormConfidentialInfo", "* All information will be kept confidential and will not be used by any third party.", $groupLabels, true);
	pll_register_string("lblJobOpportunity", "Job Opportunity", $groupLabels, false);
	pll_register_string("lblJobOpportunityContent", "We are actively recruiting new staff for our business expansion or forming of a new division. You may be an office staff or designer or a project manager. <br/>Interested personal may email to us direct at: <a href='mailto: hr@empyreandesign.com'>hr@empyreandesign.com</a>", $groupLabels, true);		
	pll_register_string("forumdesign_objective_label", "International Students' Design Forum", $groupLabels, false);
	pll_register_string("forumdesign_objective_content", "The objectives of this design forum is to help build students' confidence in design. <br> We will help them in seeing the physical world in a new realm in order to be more design conscious in problem solving.<br> They will learn through the macro and micro views of components, hence enlarging their perspective in perception in their design concept. </p> <p class='center'> <strong> - When one cannot see beyond the dimensions of life, nothing profitable can be created. - <br> Eric's Haywood Chang's quote </strong> </p> <p> Upon registering with us, students from any design faculty may submit their work for design critics or for discussion.<br> In returned, we will post up these works (after having approval from individual student) for sharing so that more can learn and benefit from it.", $groupLabels, true);
	pll_register_string("forumdesign_contact_label", "International Design Student Contact", $groupLabels, false);
	pll_register_string("forumdesign_contact_info", "We would like to know you better, kindly help fill in the as below and all information will be confidential.", $groupLabels, true);
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
		'primary' => __( 'Primary Menu', 'empyrean' )
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

	if(pll_current_language() == 'my'){
		wp_enqueue_style( 'style-language-my', get_template_directory_uri().'/css/myanmar.css' );
	}

	//wp_enqueue_script( 'app-js-jquery', get_template_directory_uri() . '/js/vendor/jquery-1.11.2.min.js');
	wp_enqueue_script( 'app-js-popup', get_template_directory_uri() . '/js/vendor/popup/jquery.magnific-popup.min.js' );
	if ( is_home() ){
		wp_enqueue_script( 'app-js-backstretch', get_template_directory_uri() . '/js/vendor/jquery.backstretch.min.js' );
	}
	wp_enqueue_script( 'app-js-main', get_template_directory_uri() . '/js/main.js' );     
}
add_action( 'wp_enqueue_scripts', 'app_scripts' );

function getPageLink($page_slug){
	$page = get_page_by_path($page_slug);
    if ($page) {
        $translationId = pll_get_post($page->ID, pll_current_language());
		return get_page_link($translationId);
    } 
    return home_url();
}
require get_template_directory() . '/inc/template-tags.php';