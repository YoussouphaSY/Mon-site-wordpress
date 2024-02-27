<?php
function soccerclubacademy_footer( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	// Footer Panel // 
	$wp_customize->add_panel( 
		'footer_section', 
		array(
			'priority'      => 34,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Footer', 'soccer-club-academy'),
		) 
	);

	
	// Footer Bottom // 
	$wp_customize->add_section(
        'footer_bottom',
        array(
            'title' 		=> __('Footer Bottom','soccer-club-academy'),
			'panel'  		=> 'footer_section',
			'priority'      => 3,
		)
    );
	
	
	// Footer Copyright 
	$soccerclubacademy_foo_copy = esc_html__('Copyright &copy; [current_year] [site_title] | Powered by [theme_author]', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'footer_copyright',
    	array(
			'default' => $soccerclubacademy_foo_copy,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_copyright',
		array(
		    'label'   		=> __('Copyright','soccer-club-academy'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'textarea',
			'transport'         => $selective_refresh,
		)  
	);		

	
	// copyrightttext color
	$copyrightttextcol = esc_html__('#fff', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'copyrightttextcol',
    	array(
			'default' => $copyrightttextcol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 10,
		)
	);	

	$wp_customize->add_control( 
		'copyrightttextcol',
		array(
		    'label'   		=> __('Copyright Text Color','soccer-club-academy'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// copyrighttlink color
	$copyrighttlinkcol = esc_html__('#c50301', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'copyrighttlinkcol',
    	array(
			'default' => $copyrighttlinkcol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 10,
		)
	);	

	$wp_customize->add_control( 
		'copyrighttlinkcol',
		array(
		    'label'   		=> __('Copyright Link Color','soccer-club-academy'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footerbg color
	$footerbgcol = esc_html__('#000', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'footerbgcol',
    	array(
			'default' => $footerbgcol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 10,
		)
	);	

	$wp_customize->add_control( 
		'footerbgcol',
		array(
		    'label'   		=> __('BG Color','soccer-club-academy'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// scrolltotopicon color
	$scrolltotopiconcol = esc_html__('#fff', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'scrolltotopiconcol',
    	array(
			'default' => $scrolltotopiconcol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 10,
		)
	);	

	$wp_customize->add_control( 
		'scrolltotopiconcol',
		array(
		    'label'   		=> __('Scroll To Top Icon Color','soccer-club-academy'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// scrolltotopbg color
	$scrolltotopbgcol = esc_html__('#c50301', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'scrolltotopbgcol',
    	array(
			'default' => $scrolltotopbgcol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 10,
		)
	);	

	$wp_customize->add_control( 
		'scrolltotopbgcol',
		array(
		    'label'   		=> __('Scroll To Top BG Color','soccer-club-academy'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// scrolltotopbghover color
	$scrolltotopbghovercol = esc_html__('#fe9903', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'scrolltotopbghovercol',
    	array(
			'default' => $scrolltotopbghovercol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 10,
		)
	);	

	$wp_customize->add_control( 
		'scrolltotopbghovercol',
		array(
		    'label'   		=> __('Scroll To Top Hover Color','soccer-club-academy'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

}
add_action( 'customize_register', 'soccerclubacademy_footer' );
// Footer selective refresh
function soccerclubacademy_footer_partials( $wp_customize ){	
	// footer_copyright
	$wp_customize->selective_refresh->add_partial( 'footer_copyright', array(
		'selector'            => '.copy-right .copyright-text',
		'settings'            => 'footer_copyright',
		'render_callback'  => 'soccerclubacademy_footer_copyright_render_callback',
	) );
	
	}
add_action( 'customize_register', 'soccerclubacademy_footer_partials' );


// copyright_content
function soccerclubacademy_footer_copyright_render_callback() {
	return get_theme_mod( 'footer_copyright' );
}