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
				'label' => __('Site Logo', 'estrategia-hipotecaria'),
				'section' => 'title_tagline',
				'settings' => 'logo_image',
				'priority' => 10
			)
		));
		
		//** Showcase / Header **// 
		
		//Set section
		$wp_customize->add_section('showcase', array(
			'title' => __('Header', 'estrategia-hipotecaria'),
			'description' => sprintf(__('Configurar header', 'estrategia-hipotecaria')),
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
				'label' => __('Imagen Header', 'estrategia-hipotecaria'),
				'section' => 'showcase',
				'settings' => 'showcase_image_1',
				'priority' => 1
			)
		));
		
		//Showcase Heading 1
		$wp_customize->add_setting('showcase_heading_1', array(
			'default' => _x('', 'estrategia-hipotecaria'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('showcase_heading_1', array(
			'label' => __('Subtítulo Header', 'estrategia-hipotecaria'),
			'section' => 'showcase',
			'priority' => 2
		));
		
		// Showcase image 2
		$wp_customize->add_setting('showcase_image_2', array(
			'default' => get_template_directory_uri().'/img/showcase-2.jpg',
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control(new WP_Customize_Image_Control(
			$wp_customize, 'showcase_image_2',
			array(
				'label' => __('Imagen Contacto', 'estrategia-hipotecaria'),
				'section' => 'showcase',
				'settings' => 'showcase_image_2',
				'priority' => 3
			)
		));
		
		//Showcase Heading 2
		$wp_customize->add_setting('showcase_heading_2', array(
			'default' => _x('Gestionando sueños.', 'estrategia-hipotecaria'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('showcase_heading_2', array(
			'label' => __('SubTítulo Contacto', 'estrategia-hipotecaria'),
			'section' => 'showcase',
			'priority' => 4
		));
		
		// Showcase image 3
		$wp_customize->add_setting('showcase_image_3', array(
			'default' => get_template_directory_uri().'/img/showcase-3.jpg',
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control(new WP_Customize_Image_Control(
			$wp_customize, 'showcase_image_3',
			array(
				'label' => __('Imagen Productos', 'estrategia-hipotecaria'),
				'section' => 'showcase',
				'settings' => 'showcase_image_3',
				'priority' => 5
			)
		));
		
		//Showcase Heading 3
		$wp_customize->add_setting('showcase_heading_3', array(
			'default' => _x('Alcanzar tus sueños nunca fue tan fácil.', 'estrategia-hipotecaria'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('showcase_heading_3', array(
			'label' => __('Subtítulo Productos', 'estrategia-hipotecaria'),
			'section' => 'showcase',
			'priority' => 6
		));
		
		//** Intro **//
		
		//Set section
		$wp_customize->add_section('intro', array(
			'title' => __('Intro', 'estrategia-hipotecaria'),
			'description' => sprintf(__('Options for showcase', 'estrategia-hipotecaria')),
			'priority' => 130
		));
		
		//Intro Heading
		$wp_customize->add_setting('intro_heading', array(
			'default' => _x('Dinero trabajando... a tu favor.', 'estrategia-hipotecaria'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('intro_heading', array(
			'label' => __('Título', 'estrategia-hipotecaria'),
			'section' => 'intro',
			'priority' => 1
		));
		
		//Intro Text 1
		$wp_customize->add_setting('intro_text_1', array(
			'default' => _x('Estrategia Hipotecaria se conforma por un equipo de expertos en asesoría y gestión de créditos hipotecarios y PyMEs, ofrecemos un servicio confiable, cálido, profesional y sobretodo fácil de entender.', 'estrategia-hipotecaria'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('intro_text_1', array(
			'label' => __('Texto 1', 'estrategia-hipotecaria'),
			'section' => 'intro',
			'priority' => 2
		));
		
		//Intro Text 2
		$wp_customize->add_setting('intro_text_2', array(
			'default' => _x('Nuestra experiencia y la relación directa con las principales instituciones financieras del país nos permiten poner a su alcance las mejores opciones de financiamiento de acuerdo a su perfil, logrando el éxito de su operación en el menor tiempo posible.', 'estrategia-hipotecaria'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('intro_text_2', array(
			'label' => __('Texto 2', 'estrategia-hipotecaria'),
			'section' => 'intro',
			'priority' => 3
		));
		
		//** Servicios **//
		
		//Set section
		$wp_customize->add_section('servicios', array(
			'title' => __('Servicios', 'estrategia-hipotecaria'),
			'description' => sprintf(__('Configuración Servicios', 'estrategia-hipotecaria')),
			'priority' => 130
		));
		
		//Servicios Heading 1
		$wp_customize->add_setting('servicios_heading_1', array(
			'default' => _x('Crédito de Adquisición', 'estrategia-hipotecaria'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('servicios_heading_1', array(
			'label' => __('Servicio 1', 'estrategia-hipotecaria'),
			'section' => 'servicios',
			'priority' => 1
		));
		
		// Servicios icon 1
		$wp_customize->add_setting('servicios_icon_1', array(
			'default' => get_template_directory_uri().'/img/credito-adquisicion-icon.png',
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control(new WP_Customize_Image_Control(
			$wp_customize, 'servicios_icon_1',
			array(
				'label' => __('Icono servicio 1', 'estrategia-hipotecaria'),
				'section' => 'servicios',
				'settings' => 'servicios_icon_1',
				'priority' => 2
			)
		));
		
		//Servicios Heading 2
		$wp_customize->add_setting('servicios_heading_2', array(
			'default' => _x('Sustitución de Hipoteca', 'estrategia-hipotecaria'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('servicios_heading_2', array(
			'label' => __('Servicio 2', 'estrategia-hipotecaria'),
			'section' => 'servicios',
			'priority' => 3
		));
		
		// Servicios icon 2
		$wp_customize->add_setting('servicios_icon_2', array(
			'default' => get_template_directory_uri().'/img/sustitucion-hipoteca-icon.png',
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control(new WP_Customize_Image_Control(
			$wp_customize, 'servicios_icon_2',
			array(
				'label' => __('Icono servicio 2', 'estrategia-hipotecaria'),
				'section' => 'servicios',
				'settings' => 'servicios_icon_2',
				'priority' => 4
			)
		));
		
		//Servicios Heading 3
		$wp_customize->add_setting('servicios_heading_3', array(
			'default' => _x('Crédito de Liquidez', 'estrategia-hipotecaria'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('servicios_heading_3', array(
			'label' => __('Servicio 3', 'estrategia-hipotecaria'),
			'section' => 'servicios',
			'priority' => 6
		));
		
		// Servicios icon 2
		$wp_customize->add_setting('servicios_icon_3', array(
			'default' => get_template_directory_uri().'/img/credito-liquidez-icon.png',
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control(new WP_Customize_Image_Control(
			$wp_customize, 'servicios_icon_3',
			array(
				'label' => __('Icono servicio 3', 'estrategia-hipotecaria'),
				'section' => 'servicios',
				'settings' => 'servicios_icon_3',
				'priority' => 7
			)
		));
		
		//Servicios Heading 4
		$wp_customize->add_setting('servicios_heading_4', array(
			'default' => _x('Crédito PyME', 'estrategia-hipotecaria'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('servicios_heading_4', array(
			'label' => __('Servicio 4', 'estrategia-hipotecaria'),
			'section' => 'servicios',
			'priority' => 8
		));
		
		// Servicios icon 4
		$wp_customize->add_setting('servicios_icon_4', array(
			'default' => get_template_directory_uri().'/img/credito-pyme-icon.png',
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control(new WP_Customize_Image_Control(
			$wp_customize, 'servicios_icon_4',
			array(
				'label' => __('Icono servicio 4', 'estrategia-hipotecaria'),
				'section' => 'servicios',
				'settings' => 'servicios_icon_4',
				'priority' => 9
			)
		));
		
		//Servicios Heading 5
		$wp_customize->add_setting('servicios_heading_5', array(
			'default' => _x('Adelanto', 'estrategia-hipotecaria'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('servicios_heading_5', array(
			'label' => __('Servicio 4', 'estrategia-hipotecaria'),
			'section' => 'servicios',
			'priority' => 10
		));
		
		// Servicios icon 5
		$wp_customize->add_setting('servicios_icon_5', array(
			'default' => get_template_directory_uri().'/img/adelanto-icon.png',
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control(new WP_Customize_Image_Control(
			$wp_customize, 'servicios_icon_5',
			array(
				'label' => __('Icono servicio 5', 'estrategia-hipotecaria'),
				'section' => 'servicios',
				'settings' => 'servicios_icon_5',
				'priority' => 11
			)
		));
		
		//Servicios Heading 6
		$wp_customize->add_setting('servicios_heading_6', array(
			'default' => _x('Crédito Nómina', 'estrategia-hipotecaria'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('servicios_heading_6', array(
			'label' => __('Servicio 6', 'estrategia-hipotecaria'),
			'section' => 'servicios',
			'priority' => 12
		));
		
		// Servicios icon 6
		$wp_customize->add_setting('servicios_icon_6', array(
			'default' => get_template_directory_uri().'/img/credito-nomina-icon.png',
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control(new WP_Customize_Image_Control(
			$wp_customize, 'servicios_icon_6',
			array(
				'label' => __('Icono servicio 6', 'estrategia-hipotecaria'),
				'section' => 'servicios',
				'settings' => 'servicios_icon_6',
				'priority' => 13
			)
		));
		
		//Servicios Heading 7
		$wp_customize->add_setting('servicios_heading_7', array(
			'default' => _x('Créditos Personales', 'estrategia-hipotecaria'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('servicios_heading_7', array(
			'label' => __('Servicio 7', 'estrategia-hipotecaria'),
			'section' => 'servicios',
			'priority' => 14
		));
		
		// Servicios icon 7
		$wp_customize->add_setting('servicios_icon_7', array(
			'default' => get_template_directory_uri().'/img/credito-personal-icon.png',
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control(new WP_Customize_Image_Control(
			$wp_customize, 'servicios_icon_7',
			array(
				'label' => __('Icono servicio 7', 'estrategia-hipotecaria'),
				'section' => 'servicios',
				'settings' => 'servicios_icon_7',
				'priority' => 15
			)
		));
		
		//** About US **//
		/*
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
		));*/
		
		//** Contact **//
		/*
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
		*/
		//** Social Networks **//
		
		//Set section
		$wp_customize->add_section('social_networks', array(
			'title' => __('Redes Sociales', 'estrategia-hipotecaria'),
			'description' => sprintf(__('Options for Social Networks', 'estrategia-hipotecaria')),
			'priority' => 140
		));
		
		// Facebook
		$wp_customize->add_setting('facebook', array(
			'default' => _x('https://www.facebook.com/Estrategiahipotecaria/', 'estrategia-hipotecaria'),
			'type' => 'theme_mod'
		));
		
		$wp_customize->add_control('facebook', array(
			'label' => __('Facebook', 'estrategia-hipotecaria'),
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