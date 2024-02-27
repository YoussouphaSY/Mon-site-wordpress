<?php
function soccerclubacademy_blog_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
			'soccerclubacademy_frontpage_sections', array(
				'priority' => 32,
				'title' => esc_html__( 'Frontpage Sections', 'soccer-club-academy' ),
			)
		);
	


	/*=========================================
	Slider Section
	=========================================*/
	$wp_customize->add_section(
		'slider_setting', array(
			'title' => esc_html__( 'Slider Section', 'soccer-club-academy' ),
			'priority' => 13,
			'panel' => 'soccerclubacademy_frontpage_sections',
		)
	);
	

	$wp_customize->add_setting('soccerclubacademy_reset_slider_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new soccerclubacademy_Reset_Custom_Control($wp_customize, 'soccerclubacademy_reset_slider_settings',array(
	  'type' => 'reset_control',
	   'priority' => 6,
	  'label' => __('Reset Slider Settings', 'soccer-club-academy'),
	  'description' => 'soccerclubacademy_slider_reset_settings',
	  'section' => 'slider_setting'
	)));



    $wp_customize->add_setting('soccerclubacademy_top_slider_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new soccerclubacademy_Tab_Control($wp_customize, 'soccerclubacademy_top_slider_tabs', array(
	   'section' => 'slider_setting',
	   'priority' => 7,
	   'buttons' => array(
	      array(
     		'name' => esc_html__('General', 'soccer-club-academy'),
 			'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'slider1',
            	'slider2',
            	'slider3',
            	'slider4',
            	'slider5',
            	'leftside_image',
            	'centerslider_image'
            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'soccer-club-academy'),
            'icon' => 'dashicons dashicons-art',
            'fields' => array(
				'slider_titlecol',
				'slider_descriptioncol',
				'slider_buttontextcol',
				'slider_buttontexthovercol',
				'slider_buttonbgcol',
				'slider_buttonbghovercol',
				'slider_bordercol'
            ),
         )
	    
    	),
	)));


	
	
	//general settings

	// Slider 1
	$wp_customize->add_setting( 
    	'slider1',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'slider1',
		array(
		    'label'   		=> __('Slider 1','soccer-club-academy'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);		



	// Slider 2
	$wp_customize->add_setting(
    	'slider2',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'slider2',
		array(
		    'label'   		=> __('Slider 2','soccer-club-academy'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 3
	$wp_customize->add_setting(
    	'slider3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider3',
		array(
		    'label'   		=> __('Slider 3','soccer-club-academy'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 4
	$wp_customize->add_setting(
    	'slider4',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'slider4',
		array(
		    'label'   		=> __('Slider 4','soccer-club-academy'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);



	// Slider 5
	$wp_customize->add_setting(
    	'slider5',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'slider5',
		array(
		    'label'   		=> __('Slider 5','soccer-club-academy'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);


	// Left Side Image
	
	$wp_customize->add_setting(
    	'leftside_image',
	    array(
	        'sanitize_callback' => 'esc_url_raw'
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'leftside_image',
	        array(
			    'label'   		=> __('Left Side Image','soccer-club-academy'),
	            'section' => 'slider_setting',
	            'settings' => 'leftside_image',
	            'description' => __('Recommended Image Size: 916X755px', 'soccer-club-academy')
	        )
	    )
	);


	// Center slider Image
	
	$wp_customize->add_setting(
    	'centerslider_image',
	    array(
	        'sanitize_callback' => 'esc_url_raw'
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'centerslider_image',
	        array(
			    'label'   		=> __('Center Image','soccer-club-academy'),
	            'section' => 'slider_setting',
	            'settings' => 'centerslider_image',
	            'description' => __('Recommended Image Size: 106X106px', 'soccer-club-academy')
	        )
	    )
	);



	//style settings

	// slider title color
	$slidertitlecol = esc_html__('#fff', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'slider_titlecol',
    	array(
			'default' => $slidertitlecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 10,
		)
	);	

	$wp_customize->add_control( 
		'slider_titlecol',
		array(
		    'label'   		=> __('Title Color','soccer-club-academy'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// slider description color
	$sliderdescriptioncol = esc_html__('#afb0a2', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'slider_descriptioncol',
    	array(
			'default' => $sliderdescriptioncol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 10,
		)
	);	

	$wp_customize->add_control( 
		'slider_descriptioncol',
		array(
		    'label'   		=> __('Description Color','soccer-club-academy'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// slider buttontext color
	$sliderbuttontextcol = esc_html__('#fff', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'slider_buttontextcol',
    	array(
			'default' => $sliderbuttontextcol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 10,
		)
	);	

	$wp_customize->add_control( 
		'slider_buttontextcol',
		array(
		    'label'   		=> __('Button Text Color','soccer-club-academy'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider buttontexthover color
	$sliderbuttontexthovercol = esc_html__('#fff', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'slider_buttontexthovercol',
    	array(
			'default' => $sliderbuttontexthovercol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 10,
		)
	);	

	$wp_customize->add_control( 
		'slider_buttontexthovercol',
		array(
		    'label'   		=> __('Button Text Hover Color','soccer-club-academy'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider buttonbg color
	$sliderbuttonbgcol = esc_html__('#c50301', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'slider_buttonbgcol',
    	array(
			'default' => $sliderbuttonbgcol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 10,
		)
	);	

	$wp_customize->add_control( 
		'slider_buttonbgcol',
		array(
		    'label'   		=> __('Button BG Color','soccer-club-academy'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider buttonbghover color
	$sliderbuttonbghovercol = esc_html__('#fe9903', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'slider_buttonbghovercol',
    	array(
			'default' => $sliderbuttonbghovercol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 10,
		)
	);	

	$wp_customize->add_control( 
		'slider_buttonbghovercol',
		array(
		    'label'   		=> __('Button BG Hover Color','soccer-club-academy'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider border color
	$sliderbordercol = esc_html__('#c50301', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'slider_bordercol',
    	array(
			'default' => $sliderbordercol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 10,
		)
	);	

	$wp_customize->add_control( 
		'slider_bordercol',
		array(
		    'label'   		=> __('Border Color','soccer-club-academy'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



	/*=========================================
	Service Section
	=========================================*/
	$wp_customize->add_section(
		'Service_setting', array(
			'title' => esc_html__( 'Feature Section', 'soccer-club-academy' ),
			'priority' => 14,
			'panel' => 'soccerclubacademy_frontpage_sections',
		)
	);


	$wp_customize->add_setting('soccerclubacademy_reset_service_settings',array(
	'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new soccerclubacademy_Reset_Custom_Control($wp_customize, 'soccerclubacademy_reset_service_settings',array(
	'type' => 'reset_control',
		'priority' => 6,
	'label' => __('Reset Feature Settings', 'soccer-club-academy'),
	'description' => 'soccerclubacademy_service_reset_settings',
	'section' => 'Service_setting'
	)));


	$wp_customize->add_setting('soccerclubacademy_top_service_tabs', array(
		'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new soccerclubacademy_Tab_Control($wp_customize, 'soccerclubacademy_top_service_tabs', array(
		'section' => 'Service_setting',
		'priority' => 7,
		'buttons' => array(
		array(
			'name' => esc_html__('General', 'soccer-club-academy'),
			'icon' => 'dashicons dashicons-welcome-write-blog',
			'fields' => array(
				'feature_disable_section',
				'serleft_image',
				'Service1',
				'service_icon1',
				'Service2',
				'service_icon2',
				'Service3',
				'service_icon3',
				'Service4',
				'service_icon4',
				'Service5',
				'service_icon5',
				'Service6',
				'service_icon6',
				'center_image'

			),
			'active' => true,
		),
		array(
			'name' => esc_html__('Style', 'soccer-club-academy'),
			'icon' => 'dashicons dashicons-art',
			'fields' => array(
				'feature_titlecol',
				'feature_boxtitlecol',
				'feature_descriptioncol',
				'feature_iconbtncol',
				'feature_iconcol',
				'feature_iconhoverbgcol'
			),
		)
		
		),
	)));
  

	// hide show feature section
	$wp_customize->add_setting(
        'feature_disable_section',
        array(
            'sanitize_callback' => 'wp_kses_post',
        )
    ); 
    $wp_customize->add_control(
        new soccerclubacademy_Toggle_Switch_Custom_Control(
            $wp_customize,
            'feature_disable_section',
            array(
                'settings'      => 'feature_disable_section',
                'section'       => 'Service_setting',
                'label'         => __( 'Disable Section', 'soccer-club-academy' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'soccer-club-academy' ),
                    'off' => __( 'No', 'soccer-club-academy' )
                ),
            )
        )
    );


	// Service 1
	$wp_customize->add_setting( 
    	'Service1',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'Service1',
		array(
		    'label'   		=> __('Feature 1','soccer-club-academy'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);		


	// service icon 1
	$serviceicon1 = esc_html__('fa fa-trophy', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'service_icon1',
    	array(
			'default' => $serviceicon1,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'service_icon1',
		array(
		    'label'   		=> __('Feature Icon 1','soccer-club-academy'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// Service 2
	$wp_customize->add_setting(
    	'Service2',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'Service2',
		array(
		    'label'   		=> __('Feature 2','soccer-club-academy'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	

	// service icon 2
	$serviceicon2 = esc_html__('fa fa-trophy', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'service_icon2',
    	array(
			'default' => $serviceicon2,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_icon2',
		array(
		    'label'   		=> __('Feature Icon 2','soccer-club-academy'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// Service 3
	$wp_customize->add_setting(
    	'Service3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'Service3',
		array(
		    'label'   		=> __('Feature 3','soccer-club-academy'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// service icon 3
	$serviceicon3 = esc_html__('fa fa-trophy', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'service_icon3',
    	array(
			'default' => $serviceicon3,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'service_icon3',
		array(
		    'label'   		=> __('Feature Icon 3','soccer-club-academy'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// Service 4
	$wp_customize->add_setting(
    	'Service4',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'Service4',
		array(
		    'label'   		=> __('Feature 4','soccer-club-academy'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// service icon 4
	$serviceicon4 = esc_html__('fa fa-trophy', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'service_icon4',
    	array(
			'default' => $serviceicon4,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 8,
		)
	);	

	$wp_customize->add_control( 
		'service_icon4',
		array(
		    'label'   		=> __('Feature Icon 4','soccer-club-academy'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	



	// Service 5
	$wp_customize->add_setting(
    	'Service5',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 9,
		)
	);	

	$wp_customize->add_control( 
		'Service5',
		array(
		    'label'   		=> __('Feature 5','soccer-club-academy'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

// service icon 5
	$serviceicon5 = esc_html__('fa fa-trophy', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'service_icon5',
    	array(
			'default' => $serviceicon5,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 10,
		)
	);	

	$wp_customize->add_control( 
		'service_icon5',
		array(
		    'label'   		=> __('Feature Icon 5','soccer-club-academy'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// Service 6
	$wp_customize->add_setting(
    	'Service6',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 11,
		)
	);	

	$wp_customize->add_control( 
		'Service6',
		array(
		    'label'   		=> __('Feature 6','soccer-club-academy'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// service icon 6
	$serviceicon6 = esc_html__('fa fa-trophy', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'service_icon6',
    	array(
			'default' => $serviceicon6,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 12,
		)
	);	

	$wp_customize->add_control( 
		'service_icon6',
		array(
		    'label'   		=> __('Feature Icon 6','soccer-club-academy'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// Center Image
	
	$wp_customize->add_setting(
    	'center_image',
	    array(
	        'sanitize_callback' => 'esc_url_raw'
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'center_image',
	        array(
			    'label'   		=> __('Center Image','soccer-club-academy'),
	            'section' => 'Service_setting',
	            'settings' => 'center_image',
	            'description' => __('Recommended Image Size: 324X545px', 'soccer-club-academy')
	        )
	    )
	);


	// style

	// feature title color
	$featuretitlecol = esc_html__('#000', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'feature_titlecol',
    	array(
			'default' => $featuretitlecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 10,
		)
	);	

	$wp_customize->add_control( 
		'feature_titlecol',
		array(
		    'label'   		=> __('Heading Color','soccer-club-academy'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// feature boxtitle color
	$featureboxtitlecol = esc_html__('#000', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'feature_boxtitlecol',
    	array(
			'default' => $featureboxtitlecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 10,
		)
	);	

	$wp_customize->add_control( 
		'feature_boxtitlecol',
		array(
		    'label'   		=> __('Title Color','soccer-club-academy'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// feature description color
	$featuredescriptioncol = esc_html__('#c1c1c1', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'feature_descriptioncol',
    	array(
			'default' => $featuredescriptioncol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 10,
		)
	);	

	$wp_customize->add_control( 
		'feature_descriptioncol',
		array(
		    'label'   		=> __('Description Color','soccer-club-academy'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// feature iconbtn color
	$featureiconbtncol = esc_html__('#d40f0f', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'feature_iconbtncol',
    	array(
			'default' => $featureiconbtncol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 10,
		)
	);	

	$wp_customize->add_control( 
		'feature_iconbtncol',
		array(
		    'label'   		=> __('Icon Button Color','soccer-club-academy'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// feature icon color
	$featureiconcol = esc_html__('#f9c3c7', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'feature_iconcol',
    	array(
			'default' => $featureiconcol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 10,
		)
	);	

	$wp_customize->add_control( 
		'feature_iconcol',
		array(
		    'label'   		=> __('Icon Color','soccer-club-academy'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// feature iconhoverbg color
	$featureiconhoverbgcol = esc_html__('#fe9903', 'soccer-club-academy' );
	$wp_customize->add_setting(
    	'feature_iconhoverbgcol',
    	array(
			'default' => $featureiconhoverbgcol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 10,
		)
	);	

	$wp_customize->add_control( 
		'feature_iconhoverbgcol',
		array(
		    'label'   		=> __('Icon Hover BG Color','soccer-club-academy'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


}

add_action( 'customize_register', 'soccerclubacademy_blog_setting' );

// service selective refresh
function soccerclubacademy_blog_section_partials( $wp_customize ){	
	// blog_title
	$wp_customize->selective_refresh->add_partial( 'blog_title', array(
		'selector'            => '.home-blog .title h6',
		'settings'            => 'blog_title',
		'render_callback'  => 'soccerclubacademy_blog_title_render_callback',
	
	) );
	
	// blog_subtitle
	$wp_customize->selective_refresh->add_partial( 'blog_subtitle', array(
		'selector'            => '.home-blog .title h2',
		'settings'            => 'blog_subtitle',
		'render_callback'  => 'soccerclubacademy_blog_subtitle_render_callback',
	
	) );
	
	// blog_description
	$wp_customize->selective_refresh->add_partial( 'blog_description', array(
		'selector'            => '.home-blog .title p',
		'settings'            => 'blog_description',
		'render_callback'  => 'soccerclubacademy_blog_description_render_callback',
	
	) );	
	}

add_action( 'customize_register', 'soccerclubacademy_blog_section_partials' );

// blog_title
function soccerclubacademy_blog_title_render_callback() {
	return get_theme_mod( 'blog_title' );
}

// blog_subtitle
function soccerclubacademy_blog_subtitle_render_callback() {
	return get_theme_mod( 'blog_subtitle' );
}

// service description
function soccerclubacademy_blog_description_render_callback() {
	return get_theme_mod( 'blog_description' );
}