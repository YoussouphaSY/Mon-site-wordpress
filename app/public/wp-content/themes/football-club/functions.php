<?php
function footballclub_css() {
	$parent_style = 'soccerclubacademy-parent-style';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'footballclub-style', get_stylesheet_uri(), array( $parent_style ));

}
add_action( 'wp_enqueue_scripts', 'footballclub_css',999);
 
// remove parent customizer settings
add_action( 'customize_register', 'footballclub_customize_register', 11 );
function footballclub_customize_register() {
	global $wp_customize;
	$wp_customize->remove_control( 'topheader_logowidth' );
	$wp_customize->remove_control( 'topheader_logoheight' );
	$wp_customize->remove_control( 'topheader_sitetitlecol' );
	$wp_customize->remove_control( 'topheader_taglinecol' );
	$wp_customize->remove_control( 'topheader_menushovercol' );
	$wp_customize->remove_control( 'topheader_submenusarrowcol' );
	$wp_customize->remove_control( 'topheader_submenushovercol' );
	$wp_customize->remove_control( 'topheader_menusbgcol' );
	$wp_customize->remove_control( 'leftside_image' );
	$wp_customize->remove_control( 'Service4' );
	$wp_customize->remove_control( 'service_icon4' );
	$wp_customize->remove_control( 'Service5' );
	$wp_customize->remove_control( 'service_icon5' );
	$wp_customize->remove_control( 'Service6' );
	$wp_customize->remove_control( 'service_icon6' );
	$wp_customize->remove_control( 'center_image' );


}	


// add Customizer Section
function footballclub_customizer ( $wp_customize ) {
	

	// top header Site Title Color
	$topheadersitetitlecolor = esc_html__('#fff', 'football-club' );
	$wp_customize->add_setting(
    	'topheader_sitetitlecolor',
    	array(
			'default' => $topheadersitetitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'topheader_sitetitlecolor',
		array(
		    'label'   		=> __('Site Title Color','football-club'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// top header Tagline Color
	$topheadertaglinecolor = esc_html__('#fff', 'football-club' );
	$wp_customize->add_setting(
    	'topheader_taglinecolor',
    	array(
			'default' => $topheadertaglinecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'topheader_taglinecolor',
		array(
		    'label'   		=> __('Tagline Color','football-club'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// Left Image
	
	$wp_customize->add_setting(
    	'serleft_image',
	    array(
	        'sanitize_callback' => 'esc_url_raw'
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'serleft_image',
	        array(
			    'label'   		=> __('Left Image','football-club'),
	            'section' => 'Service_setting',
	            'settings' => 'serleft_image',
	            'description' => __('Recommended Image Size: 536X434px', 'football-club')
	        )
	    )
	);




}
add_action( 'customize_register', 'footballclub_customizer' );




/**
 * Import Options From Parent Theme
 *
 */
function footballclub_parent_theme_options() {
	$soccerclubacademy_mods = get_option( 'theme_mods_soccerclubacademy' );
	if ( ! empty( $soccerclubacademy_mods ) ) {
		foreach ( $soccerclubacademy_mods as $soccerclubacademy_mod_k => $soccerclubacademy_mod_v ) {
			set_theme_mod( $soccerclubacademy_mod_k, $soccerclubacademy_mod_v );
		}
	}
}
add_action( 'after_switch_theme', 'footballclub_parent_theme_options' );


require( get_stylesheet_directory() . '/inc/customizer/customizer-pro/class-customize.php');