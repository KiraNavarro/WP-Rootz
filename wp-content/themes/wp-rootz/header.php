<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?php bloginfo('descritpion'); ?>" >
	<link rel="icon" href="../../../../favicon.ico">
	<title>
		<?php bloginfo('name'); ?> | 
		<?php is_front_page() ? bloginfo('description') : wp_title(); ?>
	</title>
	<!-- Bootstrap core CSS -->
	<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
	<?php wp_head(); ?>
	<style media="screen">
		header {
			background: url( 
				<?php if (is_front_page()) : ?>
					<?php echo get_template_directory_uri().'/img/head-1.jpg' ?>
				<?php elseif (is_page('soluciones')) : ?>
					<?php echo get_template_directory_uri().'/img/soluciones-header.jpg' ?>
				<?php elseif (is_page('administracion-de-flotas'))  : ?>
					<?php echo get_template_directory_uri().'/img/administracion-de-flotas-header.jpg' ?>
				<?php elseif (is_page('ubiq-bus'))  : ?>
					<?php echo get_template_directory_uri().'/img/ubiq-bus-header.jpg' ?>
				<?php elseif (is_page('ubiq-logistics'))  : ?>
					<?php echo get_template_directory_uri().'/img/ubiq-logistics-header.jpg' ?>
				<?php elseif (is_page('gpss'))  : ?>
					<?php echo get_template_directory_uri().'/img/gpss-header.jpg' ?>
				<?php elseif (is_page('iot'))  : ?>
					<?php echo get_template_directory_uri().'/img/iot-header.jpg' ?>
				<?php else : ?>
					<?php echo get_template_directory_uri().'/img/head-1.jpg' ?>
				<?php endif; ?>) no-repeat;
				
			background-size: 100% 100%;
			background-position: center;
		}
	</style>
</head>

<body>
	
	<header>
		<div class="blog-masthead">
			<div class="container blog-header">
				<div class="blog-logo">
					<a href="<?php echo get_home_url(); ?>">
						<img src="<?php echo get_template_directory_uri().'/img/site-logo.png' ?>" alt="Site logo">
					</a>
				</div>
				<div class="blog-nav-content">
					<div class="blog-info">
						<span class="head-contact">Contáctenos: + (52 55) 5925 4309 </span>
						<span class="head-social">Síguenos en: <a href="https://www.facebook.com/ubiqrastreo/" target="_blank"><img src="<?php echo get_template_directory_uri().'/img/facebook.png' ?>" alt="Site logo"> @ubiqmx</a></span>
					</div>
					<div class="blog-navbar">
						<div class="container">
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
				</div>
			</div>
		</div>
	</header>
