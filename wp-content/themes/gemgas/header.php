<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?php bloginfo('descritpion'); ?>" >
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" >
	<title>
		<?php bloginfo('name'); ?> | 
		<?php is_front_page() ? bloginfo('description') : wp_title(); ?>
	</title>
	<!-- Bootstrap core CSS -->
	<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
	
	<!-- Custom styles for this template -->
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
	<?php wp_head(); ?>
	<style media="screen">
		header {
			background: url( 
				<?php if (is_page('contacto')) : ?>
					<?php echo get_template_directory_uri().'/img/header_contacto.jpg' ?>
				<?php elseif (is_front_page()) : ?>
					<?php echo get_template_directory_uri().'/img/header_empresa.jpg' ?>
				<?php elseif (is_page('beneficios'))  : ?>
					<?php echo get_template_directory_uri().'/img/header_beneficios.jpg' ?>
				<?php elseif (is_page('gas-natural'))  : ?>
					<?php echo get_template_directory_uri().'/img/header_gas_natural.jpg' ?>
				<?php elseif (is_page('proyectos'))  : ?>
					<?php echo get_template_directory_uri().'/img/header_proyectos.jpg' ?>
				<?php elseif (is_page('soluciones'))  : ?>
					<?php echo get_template_directory_uri().'/img/header_soluciones.jpg' ?>
				<?php else : ?>
					<?php echo get_template_directory_uri().'/img/header_empresa.jpg' ?>
				<?php endif; ?>) no-repeat;
				
			background-size: cover;
		}
	</style>
</head>

<body>
	
	<header>
		<div class="container contact-masthead">
			<div class="header-contacto">
				<p>Contáctanos 5491.2330 ó <a href="mailto:info@gemgas.mx">info@gemgas.mx</a></p>
			</div>
			<div class="header-social">
				<p>Síguenos en <a href="https://www.facebook.com/gemgasmx" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/facebook-header.svg" alt="Facebook">@gemgasmx</a></p>
			</div>
		</div>
		<div class="container masthead">
			<div class="logo">
				<a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="Gemgas"></a>
			</div>
			<div class="blog-navbar">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<?php
							wp_nav_menu( array(
								'menu'              => 'primary',
								'theme_location'    => 'primary',
								'depth'             => 2,
								'container'         => '',
								'menu_class'        => 'navbar-nav mr-auto',
								'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
								'walker'            => new WP_Bootstrap_Navwalker())
							);
						?>
					</div>
				</nav>
			</div>
			
		</div>
		<div class="slogan">
			<p><b>Energía</b> <span>Limpia</span><br>para tu vehículo</p>
		</div>
	</header>
