<?php 
	function wpr_customize_register( $wp_customize ) {
		//** Logo **//
		
		//Set section 
		$wp_customize->add_setting('logo_image', array(
			'default' => get_template_directory_uri().'/img/site-logo.png',
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control(new WP_Customize_Image_Control(
			$wp_customize, 'logo_image',
			array(
				'label' => __('Site Logo', 'dexos'),
				'section' => 'title_tagline',
				'settings' => 'logo_image',
				'priority' => 10
			)
		));
		
		//** Showcase **//
		
		//Set section
		$wp_customize->add_section('showcase', array(
			'title' => __('Showcase', 'wp-rootz'),
			'description' => sprintf(__('Options for showcase', 'wp-rootz')),
			'priority' => 130
		));
		
		//Showcase Heading
		$wp_customize->add_setting('showcase_heading', array(
			'default' => _x('Custom Bootstrap Wordpress theme', 'wp-rootz'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('showcase_heading', array(
			'label' => __('Heading', 'wp-rootz'),
			'section' => 'showcase',
			'priority' => 1
		));
		
		//Showcase Text
		$wp_customize->add_setting('showcase_text', array(
			'default' => _x('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'wp-rootz'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('showcase_text', array(
			'label' => __('Text', 'wp-rootz'),
			'section' => 'showcase',
			'priority' => 2
		));
		
		//Showcase Button Text
		$wp_customize->add_setting('showcase_btn_text', array(
			'default' => _x('Read More', 'wp-rootz'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('showcase_btn_text', array(
			'label' => __('Button Text', 'wp-rootz'),
			'section' => 'showcase',
			'priority' => 3
		));
		
		//Showcase Button URL
		$wp_customize->add_setting('showcase_btn_url', array(
			'default' => _x('http://test.com', 'wp-rootz'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('showcase_btn_url', array(
			'label' => __('Button URL', 'wp-rootz'),
			'section' => 'showcase',
			'priority' => 4
		));
		
		//Showcase Image
		$wp_customize->add_setting('showcase_image', array(
			'default' => get_template_directory_uri().'/img/showcase.jpg', 'wp-rootz',
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control(new WP_Customize_Image_Control(
			$wp_customize, 'logo_image',
			array(
				'label' => __('Showcase Image', 'wp-rootz'),
				'section' => 'showcase',
				'settings' => 'showcase_image',
				'priority' => 5
			)
		));
		
		
		//** About US **//
		
		//Set section 
		$wp_customize->add_section('about', array(
			'title' => __('Sobre Nosotros', 'dexos'),
			'description' => sprintf(__('Options for About us', 'dexos')),
			'priority' => 130
		));
		
		// Title
		$wp_customize->add_setting('about_heading', array(
			'default' => _x('Sobre Nosotros', 'dexos'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('about_heading', array(
			'label' => __('Título', 'dexos'),
			'section' => 'about',
			'priority' => 1
		));
		
		// Description Parrafo 1
		$wp_customize->add_setting('about_description1', array(
			'default' => _x('Esta es la descripción.', 'dexos'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('about_description1', array(
			'label' => __('Descripción 1', 'dexos'),
			'type' => 'textarea',
			'section' => 'about',
			'priority' => 2
		));
		
		// Description Parrafo 2
		$wp_customize->add_setting('about_description2', array(
			'default' => _x('Esta es la descripción.', 'dexos'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('about_description2', array(
			'label' => __('Descripción 2', 'dexos'),
			'type' => 'textarea',
			'section' => 'about',
			'priority' => 3
		));
		
		// Image
		$wp_customize->add_setting('about_image', array(
			'default' => get_template_directory_uri().'/img/about.jpg',
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control(new WP_Customize_Image_Control(
			$wp_customize, 'about_image',
			array(
				'label' => __('Imagen', 'dexos'),
				'section' => 'about',
				'settings' => 'about_image',
				'priority' => 4
			)
		));
		
		//** Contact **//
		
		//Set section
		$wp_customize->add_section('contact', array(
			'title' => __('Contacto', 'dexos'),
			'description' => sprintf(__('Options for Contact us', 'dexos')),
			'priority' => 140
		));
		
		// Title
		$wp_customize->add_setting('contact_heading', array(
			'default' => _x('Contacto', 'dexos'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('contact_heading', array(
			'label' => __('Título', 'dexos'),
			'section' => 'contact',
			'priority' => 1
		));
		
		// Address 
		$wp_customize->add_setting('contact_address', array(
			'default' => _x('Av.Siempre Viva #12, Springfield', 'dexos'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('contact_address', array(
			'label' => __('Dirección', 'dexos'),
			'section' => 'contact',
			'priority' => 1
		));
		
		// Phone 
		$wp_customize->add_setting('contact_phone', array(
			'default' => _x('55-2654-8745', 'dexos'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('contact_phone', array(
			'label' => __('Teléfono', 'dexos'),
			'section' => 'contact',
			'priority' => 1
		));
		
		//** Social Networks **//
		
		//Set section
		$wp_customize->add_section('social_networks', array(
			'title' => __('Redes Sociales', 'dexos'),
			'description' => sprintf(__('Options for Social Networks', 'dexos')),
			'priority' => 140
		));
		
		// Facebook
		$wp_customize->add_setting('facebook', array(
			'default' => _x('https://www.facebook.com/', 'dexos'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('facebook', array(
			'label' => __('Facebook', 'dexos'),
			'section' => 'social_networks',
			'priority' => 1
		));
		
		// Facebook
		$wp_customize->add_setting('linkedin', array(
			'default' => _x('https://www.linkedin.com/', 'dexos'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('linkedin', array(
			'label' => __('LinkedIn', 'dexos'),
			'section' => 'social_networks',
			'priority' => 1
		));
		
		/* Team 
		$wp_customize->add_panel('equipo', array(
			'priority'       => 131,
			'title'          => __('Equipo', 'dexos'),
			'description'    => __('Set team info.', 'dexos'),
		));
		
		$wp_customize->add_section( 'doctor', array(
			'priority'       => 1,
			'title'          => __('Doctor', 'dexos'),
			'description'    =>  __('Doctor settings', 'dexos'),
			'panel'  => 'equipo',
		));
		
		// Doctor Nombre
		$wp_customize->add_setting('doctor-nombre', array(
			'default' => _x('Esta es la descripción.', 'dexos'),
			'type' => 'theme_mod'
		));
			
		$wp_customize->add_control('doctor-nombre', array(
			'label' => __('Nombre', 'dexos'),
			'type' => 'theme_mod',
			'section' => 'doctor',
			'priority' => 1
		));
		*/
		
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
	}
?>