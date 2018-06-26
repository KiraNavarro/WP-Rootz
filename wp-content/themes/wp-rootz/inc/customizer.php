<?php 
	function wpr_customize_register( $wp_customize ) {
		//** Contact **//
		
		//Set section
		$wp_customize->add_section('contact', array(
			'title' => __('Contacto', 'wp-rootz'),
			'description' => sprintf(__('Options for Contact us', 'wp-rootz')),
			'priority' => 140
		));
		
		// Address 
		$wp_customize->add_setting('contact_address', array(
			'default' => _x('', 'wp-rootz'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('contact_address', array(
			'label' => __('Dirección', 'wp-rootz'),
			'section' => 'contact',
			'priority' => 1
		));
		
		// Phone 
		$wp_customize->add_setting('contact_phone', array(
			'default' => _x('', 'wp-rootz'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('contact_phone', array(
			'label' => __('Teléfono', 'wp-rootz'),
			'section' => 'contact',
			'priority' => 1
		));
		
		// Mobile 
		$wp_customize->add_setting('contact_mobile_phone', array(
			'default' => _x('', 'wp-rootz'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('contact_mobile_phone', array(
			'label' => __('Móvil', 'wp-rootz'),
			'section' => 'contact',
			'priority' => 1
		));
		
		//** Social Networks **//
		
		//Set section
		$wp_customize->add_section('social_networks', array(
			'title' => __('Redes Sociales', 'wp-rootz'),
			'description' => sprintf(__('Redes Sociales', 'wp-rootz')),
			'priority' => 140
		));
		
		// Identificador CTA
		$wp_customize->add_setting('identificador-cta', array(
			'default' => _x('', 'wp-rootz'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('identificador-cta', array(
			'label' => __('Identificador CTA', 'wp-rootz'),
			'section' => 'social_networks',
			'priority' => 1
		));
		
		// Facebook CTA
		$wp_customize->add_setting('facebook-cta', array(
			'default' => _x('', 'wp-rootz'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('facebook-cta', array(
			'label' => __('Facebook CTA', 'wp-rootz'),
			'section' => 'social_networks',
			'priority' => 2
		));
		
		// Linkedin CTA
		$wp_customize->add_setting('linkedin-cta', array(
			'default' => _x('', 'wp-rootz'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('linkedin-cta', array(
			'label' => __('LinkedIn CTA', 'wp-rootz'),
			'section' => 'social_networks',
			'priority' => 3
		));
		
		// Youtube CTA
		$wp_customize->add_setting('youtube-cta', array(
			'default' => _x('', 'wp-rootz'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('youtube-cta', array(
			'label' => __('Youtube CTA', 'wp-rootz'),
			'section' => 'social_networks',
			'priority' => 4
		));
		
		// Identificador Adriana Castro
		$wp_customize->add_setting('identificador', array(
			'default' => _x('', 'wp-rootz'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('identificador', array(
			'label' => __('Identificador Adriana Castro', 'wp-rootz'),
			'section' => 'social_networks',
			'priority' => 5
		));
		
		// Facebook  Adrina Castro
		$wp_customize->add_setting('facebook', array(
			'default' => _x('', 'wp-rootz'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('facebook', array(
			'label' => __('Facebook Adrina Castro', 'wp-rootz'),
			'section' => 'social_networks',
			'priority' => 6
		));
		
		// Linkedin  Adrina Castro
		$wp_customize->add_setting('linkedin', array(
			'default' => _x('', 'wp-rootz'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('linkedin', array(
			'label' => __('LinkedIn  Adrina Castro', 'wp-rootz'),
			'section' => 'social_networks',
			'priority' => 7
		));
		
		// Youtube Adriana Castro
		$wp_customize->add_setting('youtube', array(
			'default' => _x('', 'wp-rootz'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('youtube', array(
			'label' => __('Youtube Adriana Castro', 'wp-rootz'),
			'section' => 'social_networks',
			'priority' => 8
		));

		
	}
	
	add_action( 'customize_register', 'wpr_customize_register' );
	
	//** Remove additional CSS **//
	
	add_action( 'customize_register', 'prefix_remove_css_section', 15 );
	
	/**
	* Remove the additional CSS section, introduced in 4.7, from the Customizer.
	* @param $wp_customize WP_Customize_Manager
	*/
	
	function prefix_remove_css_section( $wp_customize ) {
		$wp_customize->remove_section( 'custom_css' );
		$wp_customize->remove_panel( 'nav_menus'); 
		$wp_customize->remove_panel( 'widgets');
	}
?>