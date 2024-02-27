<?php
if ( ! function_exists( 'soccerclubacademy_setup' ) ) :
function soccerclubacademy_setup() {

// Root path/URI.
define( 'SOCCERCLUBACADEMY_PARENT_DIR', get_template_directory() );
define( 'SOCCERCLUBACADEMY_PARENT_URI', get_template_directory_uri() );

// Root path/URI.
define( 'SOCCERCLUBACADEMY_PARENT_INC_DIR', SOCCERCLUBACADEMY_PARENT_DIR . '/inc');
define( 'SOCCERCLUBACADEMY_PARENT_INC_URI', SOCCERCLUBACADEMY_PARENT_URI . '/inc');

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );
	
	add_theme_support( 'custom-header' );
	
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	
	//Add selective refresh for sidebar widget
	add_theme_support( 'customize-selective-refresh-widgets' );
	
	/*
	 * Make theme available for translation.
	 */
	load_theme_textdomain( 'soccer-club-academy' );
		
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary_menu' => esc_html__( 'Primary Menu', 'soccer-club-academy' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	
	
	add_theme_support('custom-logo');

	/*
	 * WooCommerce Plugin Support
	 */
	add_theme_support( 'woocommerce' );
	
	// Gutenberg wide images.
	add_theme_support( 'align-wide' );
	
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'assets/css/editor-style.css', soccerclubacademy_google_font() ) );
	
	//Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'soccerclubacademy_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'soccerclubacademy_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function soccerclubacademy_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'soccerclubacademy_content_width', 1170 );
}
add_action( 'after_setup_theme', 'soccerclubacademy_content_width', 0 );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function soccerclubacademy_widgets_init() {
	
	register_sidebar( array(
		'name' => __( 'Sidebar Widget Area', 'soccer-club-academy' ),
		'id' => 'soccerclubacademy-sidebar-primary',
		'description' => __( 'The Primary Widget Area', 'soccer-club-academy' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4><div class="title"><span class="shap"></span></div>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Widget Area', 'soccer-club-academy' ),
		'id' => 'soccerclubacademy-footer-widget-area',
		'description' => __( 'The Footer Widget Area', 'soccer-club-academy' ),
		'before_widget' => '<div class="footer-widget col-lg-3 col-sm-6 wow fadeIn" data-wow-delay="0.2s"><aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside></div>',
		'before_title' => '<h5 class="widget-title w-title">',
		'after_title' => '</h5><span class="shap"></span>',
	) );

	register_sidebar( array(
		'name' => __( 'WooCommerce Widget Area', 'soccer-club-academy' ),
		'id' => 'soccerclubacademy-woocommerce-sidebar',
		'description' => __( 'This Widget area for WooCommerce Widget', 'soccer-club-academy' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4><div class="title"><span class="shap"></span></div>',
	) );
}
add_action( 'widgets_init', 'soccerclubacademy_widgets_init' );

/**
 * All Styles & Scripts.
 */

require_once get_template_directory() . '/inc/enqueue.php';

/**
 * Nav Walker fo Bootstrap Dropdown Menu.
 */

require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Implement the Custom Header feature.
 */
require_once get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require_once get_template_directory() . '/inc/extras.php';


/**
 * Customizer additions.
 */
 require_once get_template_directory() . '/inc/soccerclubacademy-customizer.php';

require_once get_template_directory() . '/inc/tab-control.php';




// for header
function soccerclubacademy_header_reset_settings() {
    remove_theme_mod('hide_show_sticky');
    remove_theme_mod('topheader_icon1');
    remove_theme_mod('topheader_icon1link');
    remove_theme_mod('topheader_icon2');
    remove_theme_mod('topheader_icon2link');
    remove_theme_mod('topheader_icon3');
    remove_theme_mod('topheader_icon3link');
    remove_theme_mod('topheader_icon4');
    remove_theme_mod('topheader_icon4link');
    remove_theme_mod('topheader_iconcol');
    remove_theme_mod('topheader_iconbgcol');
    remove_theme_mod('topheader_menuscol');
    remove_theme_mod('topheader_menushovercol');
    remove_theme_mod('topheader_submenuscol');
    remove_theme_mod('topheader_submenushovercol');
    remove_theme_mod('topheader_submenusbgcol');
    remove_theme_mod('topheader_submenusarrowcol');
    remove_theme_mod('topheader_menusbgcol');
    remove_theme_mod('topheader_mobilemenutogglecol');
    remove_theme_mod('topheader_mobilemenutogglehvrcol');
	remove_theme_mod('topheader_mobilemenubgcol');
    wp_send_json_success(
        array(
            'success' => true,
            'message' => "Reset Completed",
        )
    );
}
add_action( 'wp_ajax_soccerclubacademy_header_reset_settings', 'soccerclubacademy_header_reset_settings' );


// for slider
function soccerclubacademy_slider_reset_settings() {
    remove_theme_mod('slider1');
    remove_theme_mod('slider1');
    remove_theme_mod('slider1');
    remove_theme_mod('slider1');
    remove_theme_mod('slider1');
    remove_theme_mod('leftside_image');
    remove_theme_mod('centerslider_image');
    remove_theme_mod('slider_titlecol');
    remove_theme_mod('slider_descriptioncol');
    remove_theme_mod('slider_buttontextcol');
    remove_theme_mod('slider_buttontexthovercol');
    remove_theme_mod('slider_buttonbgcol');
    remove_theme_mod('slider_buttonbghovercol');
    remove_theme_mod('slider_bordercol');
    wp_send_json_success(
        array(
            'success' => true,
            'message' => "Reset Completed",
        )
    );
}
add_action( 'wp_ajax_soccerclubacademy_slider_reset_settings', 'soccerclubacademy_slider_reset_settings' );


// for service
function soccerclubacademy_service_reset_settings() {
    remove_theme_mod('Service1');
    remove_theme_mod('service_icon1');
    remove_theme_mod('Service2');
    remove_theme_mod('service_icon2');
    remove_theme_mod('Service3');
    remove_theme_mod('service_icon3');
    remove_theme_mod('Service4');
    remove_theme_mod('service_icon4');
    remove_theme_mod('Service5');
    remove_theme_mod('service_icon5');
    remove_theme_mod('Service6');
    remove_theme_mod('service_icon6');
    remove_theme_mod('center_image');
	remove_theme_mod('feature_titlecol');
	remove_theme_mod('feature_boxtitlecol');
	remove_theme_mod('feature_descriptioncol');
	remove_theme_mod('feature_iconbtncol');
	remove_theme_mod('feature_iconcol');
	remove_theme_mod('feature_iconhoverbgcol');
    wp_send_json_success(
        array(
            'success' => true,
            'message' => "Reset Completed",
        )
    );
}
add_action( 'wp_ajax_soccerclubacademy_service_reset_settings', 'soccerclubacademy_service_reset_settings' );



add_filter( 'nav_menu_link_attributes', 'soccerclubacademy_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function soccerclubacademy_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}

