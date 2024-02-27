<?php
class soccerclubacademy_import_dummy_data {

	private static $instance;

	public static function init( ) {
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof soccerclubacademy_import_dummy_data ) ) {
			self::$instance = new soccerclubacademy_import_dummy_data;
			self::$instance->soccerclubacademy_setup_actions();
		}

	}

	/**
	 * Setup the class props based on the config array.
	 */
	

	/**
	 * Setup the actions used for this class.
	 */
	public function soccerclubacademy_setup_actions() {

		// Enqueue scripts
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'soccerclubacademy_import_customize_scripts' ), 0 );

	}
	
	

	public function soccerclubacademy_import_customize_scripts() {

	wp_enqueue_script( 'soccerclubacademy-import-customizer-js', SOCCERCLUBACADEMY_PARENT_INC_URI . '/customizer/customizer-notify/js/soccerclubacademy-import-customizer-options.js', array( 'customize-controls' ) );
	}
}

$soccerclubacademy_import_customizers = array(

		'import_data' => array(
			'recommended' => true,
			
		),
);
soccerclubacademy_import_dummy_data::init( apply_filters( 'soccerclubacademy_import_customizer', $soccerclubacademy_import_customizers ) );