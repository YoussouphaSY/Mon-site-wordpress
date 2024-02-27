<?php
function soccerclubacademy_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Header Settings Panel
	=========================================*/
	$wp_customize->add_panel( 
		'header_section', 
		array(
			'priority'      => 2,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Header', 'soccer-club-academy'),
		) 
	);

	
	/*=========================================
	Soccer Club Academy Site Identity
	=========================================*/
	$wp_customize->add_section(
        'title_tagline',
        array(
        	'priority'      => 1,
            'title' 		=> __('Site Identity','soccer-club-academy'),
			'panel'  		=> 'header_section',
		)
    );


	

	// topheader Logo Width
    $wp_customize->add_setting('topheader_logowidth',array(
        'default' => 100,
        'sanitize_callback' => 'soccerclubacademy_sanitize_float'
    ));
    $wp_customize->add_control(new soccerclubacademy_Custom_Control( $wp_customize, 'topheader_logowidth',array(
	    'label' => __('Logo Width','soccer-club-academy'),
	    'section' => 'title_tagline',
	    'input_attrs' => array(
	            'min' => 0,
	            'max' => 500,
	            'step' => 1,
	        ),
    )));

    // topheader Logo Width
    $wp_customize->add_setting('topheader_logoheight',array(
        'default' => 100,
        'sanitize_callback' => 'soccerclubacademy_sanitize_float'
    ));
    $wp_customize->add_control(new soccerclubacademy_Custom_Control( $wp_customize, 'topheader_logoheight',array(
	    'label' => __('Logo Height','soccer-club-academy'),
	    'section' => 'title_tagline',
	    'input_attrs' => array(
	            'min' => 0,
	            'max' => 500,
	            'step' => 1,
	        ),
    )));


    // top header Site Title Color
	$topheadersitetitlecol = esc_html__('#fff', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'topheader_sitetitlecol',
    	array(
			'default' => $topheadersitetitlecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'topheader_sitetitlecol',
		array(
		    'label'   		=> __('Site Title Color','soccer-club-academy'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// top header Site Title brd Color
	$topheadersitetitlebrdcol = esc_html__('#c50301', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'topheader_sitetitlebrdcol',
    	array(
			'default' => $topheadersitetitlebrdcol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'topheader_sitetitlebrdcol',
		array(
		    'label'   		=> __('Site Title Border Color','soccer-club-academy'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// top header Tagline Color
	$topheadertaglinecol = esc_html__('#000', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'topheader_taglinecol',
    	array(
			'default' => $topheadertaglinecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'topheader_taglinecol',
		array(
		    'label'   		=> __('Tagline Color','soccer-club-academy'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	/*=========================================
	Top header
	=========================================*/
	$wp_customize->add_section(
        'top_header',
        array(
        	'priority'      => 2,
            'title' 		=> __('Header','soccer-club-academy'),
			'panel'  		=> 'header_section',
		)
    );	


    $wp_customize->add_setting('soccerclubacademy_reset_header_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new soccerclubacademy_Reset_Custom_Control($wp_customize, 'soccerclubacademy_reset_header_settings',array(
	  'type' => 'reset_control',
	   'priority' => 6,
	  'label' => __('Reset Header Settings', 'soccer-club-academy'),
	  'description' => 'soccerclubacademy_header_reset_settings',
	  'section' => 'top_header'
	)));



    $wp_customize->add_setting('soccerclubacademy_top_header_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new soccerclubacademy_Tab_Control($wp_customize, 'soccerclubacademy_top_header_tabs', array(
	   'section' => 'top_header',
	   'priority' => 7,
	   'buttons' => array(
	      array(
     		'name' => esc_html__('General', 'soccer-club-academy'),
 			'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'hide_show_sticky',
            	'topheader_icon1',
            	'topheader_icon1link',
            	'topheader_icon2',
            	'topheader_icon2link',
            	'topheader_icon3',
            	'topheader_icon3link',
            	'topheader_icon4',
            	'topheader_icon4link'

            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'soccer-club-academy'),
            'icon' => 'dashicons dashicons-art',
            'fields' => array(
            	'topheader_iconcol',
            	'topheader_iconbgcol',
            	'topheader_menuscol',
            	'topheader_menushovercol',
            	'topheader_submenuscol',
            	'topheader_submenushovercol',
            	'topheader_submenusbgcol',
            	'topheader_submenusarrowcol',
            	'topheader_menusbgcol',
				'topheader_mobilemenutogglecol',
				'topheader_mobilemenutogglehvrcol',
				'topheader_mobilemenubgcol'

            ),
         )
	    
    	),
	)));


	// general setting

	// sticky header
	$wp_customize->add_setting( 'hide_show_sticky',array(
        'default' => false,
        'sanitize_callback' => 'soccerclubacademy_switch_sanitization'
   	) );
   	$wp_customize->add_control( new soccerclubacademy_Toggle_Switch_Custom_Control( $wp_customize, 'hide_show_sticky',array(
        'label' => __( 'Show Sticky Header','soccer-club-academy' ),
        'section' => 'top_header'
   	)));

	// topheader icon 1
	$topheadericon1 = esc_html__('fa fa-facebook', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'topheader_icon1',
    	array(
			'default' => $topheadericon1,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'topheader_icon1',
		array(
		    'label'   		=> __('Icon 1','soccer-club-academy'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// topheader icon 1 link
	$topheadericon1link = esc_html__('#', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'topheader_icon1link',
    	array(
			'default' => $topheadericon1link,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'topheader_icon1link',
		array(
		    'label'   		=> __('Icon 1 Link','soccer-club-academy'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// topheader icon 2
	$topheadericon2 = esc_html__('fa fa-instagram', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'topheader_icon2',
    	array(
			'default' => $topheadericon2,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'topheader_icon2',
		array(
		    'label'   		=> __('Icon 2','soccer-club-academy'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);		


	// topheader icon 2 link
	$topheadericon2link = esc_html__('#', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'topheader_icon2link',
    	array(
			'default' => $topheadericon2link,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'topheader_icon2link',
		array(
		    'label'   		=> __('Icon 2 Link','soccer-club-academy'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// topheader icon 3
	$topheadericon3 = esc_html__('fa fa-twitter', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'topheader_icon3',
    	array(
			'default' => $topheadericon3,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'topheader_icon3',
		array(
		    'label'   		=> __('Icon 3','soccer-club-academy'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);		


	// topheader icon 3 link
	$topheadericon3link = esc_html__('#', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'topheader_icon3link',
    	array(
			'default' => $topheadericon3link,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'topheader_icon3link',
		array(
		    'label'   		=> __('Icon 3 Link','soccer-club-academy'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	



	// topheader icon 4
	$topheadericon4 = esc_html__('fa fa-google-plus', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'topheader_icon4',
    	array(
			'default' => $topheadericon4,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'topheader_icon4',
		array(
		    'label'   		=> __('Icon 4','soccer-club-academy'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);		


	// topheader icon 4 link
	$topheadericon4link = esc_html__('#', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'topheader_icon4link',
    	array(
			'default' => $topheadericon4link,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 8,
		)
	);	

	$wp_customize->add_control( 
		'topheader_icon4link',
		array(
		    'label'   		=> __('Icon 4 Link','soccer-club-academy'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// style setting

	// topheader icon color
	$topheadericoncol = esc_html__('#ffffff', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'topheader_iconcol',
    	array(
			'default' => $topheadericoncol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 9,
		)
	);	

	$wp_customize->add_control( 
		'topheader_iconcol',
		array(
		    'label'   		=> __('Icon Color','soccer-club-academy'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// topheader icon bg color
	$topheadericonbgcol = esc_html__('#3a393b', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'topheader_iconbgcol',
    	array(
			'default' => $topheadericonbgcol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 10,
		)
	);	

	$wp_customize->add_control( 
		'topheader_iconbgcol',
		array(
		    'label'   		=> __('Icon BG Color','soccer-club-academy'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader menus color
	$topheadermenuscol = esc_html__('#dededa', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'topheader_menuscol',
    	array(
			'default' => $topheadermenuscol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 10,
		)
	);	

	$wp_customize->add_control( 
		'topheader_menuscol',
		array(
		    'label'   		=> __('Menus Color','soccer-club-academy'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader menushover color
	$topheadermenushovercol = esc_html__('#c50301', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'topheader_menushovercol',
    	array(
			'default' => $topheadermenushovercol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 10,
		)
	);	

	$wp_customize->add_control( 
		'topheader_menushovercol',
		array(
		    'label'   		=> __('Active Menu & Hover Color','soccer-club-academy'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader submenus color
	$topheadersubmenuscol = esc_html__('#fff', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'topheader_submenuscol',
    	array(
			'default' => $topheadersubmenuscol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 10,
		)
	);	

	$wp_customize->add_control( 
		'topheader_submenuscol',
		array(
		    'label'   		=> __('SubMenus Color','soccer-club-academy'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader submenushover color
	$topheadersubmenushovercol = esc_html__('#000', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'topheader_submenushovercol',
    	array(
			'default' => $topheadersubmenushovercol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 10,
		)
	);	

	$wp_customize->add_control( 
		'topheader_submenushovercol',
		array(
		    'label'   		=> __('SubMenus Hover Color','soccer-club-academy'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader submenusbg color
	$topheadersubmenusbgcol = esc_html__('#c50301', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'topheader_submenusbgcol',
    	array(
			'default' => $topheadersubmenusbgcol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 10,
		)
	);	

	$wp_customize->add_control( 
		'topheader_submenusbgcol',
		array(
		    'label'   		=> __('SubMenus BG Color','soccer-club-academy'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader submenusarrow color
	$topheadersubmenusarrowcol = esc_html__('#c50301', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'topheader_submenusarrowcol',
    	array(
			'default' => $topheadersubmenusarrowcol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 10,
		)
	);	

	$wp_customize->add_control( 
		'topheader_submenusarrowcol',
		array(
		    'label'   		=> __('SubMenus Arrow Color','soccer-club-academy'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader menusbg color
	$topheadermenusbgcol = esc_html__('#000000b3', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'topheader_menusbgcol',
    	array(
			'default' => $topheadermenusbgcol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 10,
		)
	);	

	$wp_customize->add_control( 
		'topheader_menusbgcol',
		array(
		    'label'   		=> __('Menus BG Color','soccer-club-academy'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader mobilemenutoggle color
	$topheadermobilemenutogglecol = esc_html__('#c50301', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'topheader_mobilemenutogglecol',
    	array(
			'default' => $topheadermobilemenutogglecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 10,
		)
	);	

	$wp_customize->add_control( 
		'topheader_mobilemenutogglecol',
		array(
		    'label'   		=> __('Mobile Menu Toggle Color','soccer-club-academy'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader mobilemenutogglehvr color
	$topheadermobilemenutogglehvrcol = esc_html__('#fff', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'topheader_mobilemenutogglehvrcol',
    	array(
			'default' => $topheadermobilemenutogglehvrcol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 10,
		)
	);	

	$wp_customize->add_control( 
		'topheader_mobilemenutogglehvrcol',
		array(
		    'label'   		=> __('Mobile Menu Toggle Hover Color','soccer-club-academy'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader mobilemenubg color
	$topheadermobilemenubgcol = esc_html__('#000', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'topheader_mobilemenubgcol',
    	array(
			'default' => $topheadermobilemenubgcol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 10,
		)
	);	

	$wp_customize->add_control( 
		'topheader_mobilemenubgcol',
		array(
		    'label'   		=> __('Mobile Menu BG Color','soccer-club-academy'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	$wp_customize->register_control_type('soccerclubacademy_Tab_Control');
	$wp_customize->register_panel_type( 'soccerclubacademy_WP_Customize_Panel' );
	$wp_customize->register_section_type( 'soccerclubacademy_WP_Customize_Section' );

	

}
add_action( 'customize_register', 'soccerclubacademy_header_settings' );


if ( class_exists( 'WP_Customize_Panel' ) ) {
  	class soccerclubacademy_WP_Customize_Panel extends WP_Customize_Panel {
	   public $panel;
	   public $type = 'soccerclubacademy_panel';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'type', 'panel', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;
	      return $array;
    	}
  	}
}

if ( class_exists( 'WP_Customize_Section' ) ) {
  	class soccerclubacademy_WP_Customize_Section extends WP_Customize_Section {
	   public $section;
	   public $type = 'soccerclubacademy_section';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'panel', 'type', 'description_hidden', 'section', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;

	      if ( $this->panel ) {
	        $array['customizeAction'] = sprintf( 'Customizing &#9656; %s', esc_html( $this->manager->get_panel( $this->panel )->title ) );
	      } else {
	        $array['customizeAction'] = 'Customizing';
	      }
	      return $array;
    	}
  	}
}









