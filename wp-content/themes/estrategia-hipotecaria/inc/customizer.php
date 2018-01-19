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
				'label' => __('Site Logo', 'wp-rootz'),
				'section' => 'title_tagline',
				'settings' => 'logo_image',
				'priority' => 10
			)
		));
		
		//** Showcase / Header **// 
		
		//Set section
		$wp_customize->add_section('showcase', array(
			'title' => __('Header'),
			'description' => sprintf(__('Configurar header')),
			'priority' => 130
		));
		
		// Showcase image 1
		$wp_customize->add_setting('showcase_image_1', array(
			'default' => get_template_directory_uri().'/img/showcase.jpg',
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control(new WP_Customize_Image_Control(
			$wp_customize, 'showcase_image_1',
			array(
				'label' => __('Imagen 1'),
				'section' => 'showcase',
				'settings' => 'showcase_image_1',
				'priority' => 5
			)
		));
		
		// Showcase image 2
		$wp_customize->add_setting('showcase_image_2', array(
			'default' => get_template_directory_uri().'/img/showcase-2.jpg',
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control(new WP_Customize_Image_Control(
			$wp_customize, 'showcase_image_2',
			array(
				'label' => __('Imagen 2'),
				'section' => 'showcase',
				'settings' => 'showcase_image_2',
				'priority' => 5
			)
		));
		
		// Showcase image 3
		$wp_customize->add_setting('showcase_image_3', array(
			'default' => get_template_directory_uri().'/img/showcase-3.jpg',
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control(new WP_Customize_Image_Control(
			$wp_customize, 'showcase_image_3',
			array(
				'label' => __('Imagen 3'),
				'section' => 'showcase',
				'settings' => 'showcase_image_3',
				'priority' => 5
			)
		));
		
		//** Intro **//
		
		//Set section
		$wp_customize->add_section('intro', array(
			'title' => __('Intro'),
			'description' => sprintf(__('Options for showcase')),
			'priority' => 130
		));
		
		//Showcase Heading
		$wp_customize->add_setting('intro_heading', array(
			'default' => _x('Dinero trabajando... a tu favor.'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('intro_heading', array(
			'label' => __('Título'),
			'section' => 'intro',
			'priority' => 1
		));
		
		//Intro Text 1
		$wp_customize->add_setting('intro_text_1', array(
			'default' => _x('Estrategia Hipotecaria se conforma por un equipo de expertos en asesoría y gestión de créditos hipotecarios y PyMEs, ofrecemos un servicio confiable, cálido, profesional y sobretodo fácil de entender.'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('intro_text_1', array(
			'label' => __('Texto 1'),
			'section' => 'intro',
			'priority' => 2
		));
		
		//Intro Text 2
		$wp_customize->add_setting('intro_text_2', array(
			'default' => _x('Nuestra experiencia y la relación directa con las principales instituciones financieras del país nos permiten poner a su alcance las mejores opciones de financiamiento de acuerdo a su perfil, logrando el éxito de su operación en el menor tiempo posible.'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('intro_text_2', array(
			'label' => __('Texto 2'),
			'section' => 'intro',
			'priority' => 3
		));
		
		//** About US **//
		
		//Set section 
		$wp_customize->add_section('about', array(
			'title' => __('Sobre Nosotros', 'wp-rootz'),
			'description' => sprintf(__('Options for About us', 'wp-rootz')),
			'priority' => 130
		));
		
		// Title
		$wp_customize->add_setting('about_heading', array(
			'default' => _x('Sobre Nosotros', 'wp-rootz'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('about_heading', array(
			'label' => __('Título', 'wp-rootz'),
			'section' => 'about',
			'priority' => 1
		));
		
		// Description Parrafo 1
		$wp_customize->add_setting('about_description1', array(
			'default' => _x('Esta es la descripción.', 'wp-rootz'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('about_description1', array(
			'label' => __('Descripción 1', 'wp-rootz'),
			'type' => 'textarea',
			'section' => 'about',
			'priority' => 2
		));
		
		// Description Parrafo 2
		$wp_customize->add_setting('about_description2', array(
			'default' => _x('Esta es la descripción.', 'wp-rootz'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('about_description2', array(
			'label' => __('Descripción 2', 'wp-rootz'),
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
				'label' => __('Imagen', 'wp-rootz'),
				'section' => 'about',
				'settings' => 'about_image',
				'priority' => 4
			)
		));
		
		//** Contact **//
		
		//Set section
		$wp_customize->add_section('contact', array(
			'title' => __('Contacto', 'wp-rootz'),
			'description' => sprintf(__('Options for Contact us', 'wp-rootz')),
			'priority' => 140
		));
		
		// Title
		$wp_customize->add_setting('contact_heading', array(
			'default' => _x('Contacto', 'wp-rootz'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('contact_heading', array(
			'label' => __('Título', 'wp-rootz'),
			'section' => 'contact',
			'priority' => 1
		));
		
		// Address 
		$wp_customize->add_setting('contact_address', array(
			'default' => _x('Av.Siempre Viva #12, Springfield', 'wp-rootz'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('contact_address', array(
			'label' => __('Dirección', 'wp-rootz'),
			'section' => 'contact',
			'priority' => 1
		));
		
		// Phone 
		$wp_customize->add_setting('contact_phone', array(
			'default' => _x('55-2654-8745', 'wp-rootz'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('contact_phone', array(
			'label' => __('Teléfono', 'wp-rootz'),
			'section' => 'contact',
			'priority' => 1
		));
		
		//** Social Networks **//
		
		//Set section
		$wp_customize->add_section('social_networks', array(
			'title' => __('Redes Sociales', 'wp-rootz'),
			'description' => sprintf(__('Options for Social Networks', 'wp-rootz')),
			'priority' => 140
		));
		
		// Facebook
		$wp_customize->add_setting('facebook', array(
			'default' => _x('https://www.facebook.com/', 'wp-rootz'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('facebook', array(
			'label' => __('Facebook', 'wp-rootz'),
			'section' => 'social_networks',
			'priority' => 1
		));
		
		// Facebook
		$wp_customize->add_setting('linkedin', array(
			'default' => _x('https://www.linkedin.com/', 'wp-rootz'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('linkedin', array(
			'label' => __('LinkedIn', 'wp-rootz'),
			'section' => 'social_networks',
			'priority' => 1
		));
		
		/* Team 
		$wp_customize->add_panel('equipo', array(
			'priority'       => 131,
			'title'          => __('Equipo', 'wp-rootz'),
			'description'    => __('Set team info.', 'wp-rootz'),
		));
		
		$wp_customize->add_section( 'doctor', array(
			'priority'       => 1,
			'title'          => __('Doctor', 'wp-rootz'),
			'description'    =>  __('Doctor settings', 'wp-rootz'),
			'panel'  => 'equipo',
		));
		
		// Doctor Nombre
		$wp_customize->add_setting('doctor-nombre', array(
			'default' => _x('Esta es la descripción.', 'wp-rootz'),
			'type' => 'theme_mod'
		));
			
		$wp_customize->add_control('doctor-nombre', array(
			'label' => __('Nombre', 'wp-rootz'),
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