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
		.decoBoxFront {
			background: url( 
				<?php if (is_page('contacto')) : ?>
					<?php echo get_template_directory_uri().'/img/header-1.jpg' ?>
				<?php elseif (is_front_page()) : ?>
					<?php echo get_template_directory_uri().'/img/header-1.jpg' ?>
				<?php elseif (is_page('beneficios'))  : ?>
					<?php echo get_template_directory_uri().'/img/header-1.jpg' ?>
				<?php elseif (is_page('gas-natural'))  : ?>
					<?php echo get_template_directory_uri().'/img/header-1.jpg' ?>
				<?php elseif (is_page('proyectos'))  : ?>
					<?php echo get_template_directory_uri().'/img/header-1.jpg' ?>
				<?php elseif (is_page('soluciones'))  : ?>
					<?php echo get_template_directory_uri().'/img/header-1.jpg' ?>
				<?php else : ?>
					<?php echo get_template_directory_uri().'/img/header-1.jpg' ?>
				<?php endif; ?>) no-repeat;
			background-size: cover;
		}
	</style>
</head>

<body>
	
	<header>
		<div class="blog-masthead decoBoxBack">
			<div class="blog-header decoBoxFront">
				<div class="blog-logo">
					<a href="<?php echo get_home_url(); ?>">
						<img src="<?php echo get_template_directory_uri().'/img/site-logo.png' ?>" alt="MT Publicidad">
					</a>
				</div>
			</div>
		</div>
		<div class="nav-toggle">
			<span></span>
		</div>
		<div class="blog-navbar">
			<div class="nav-container transform">
				<nav>
					<?php
						wp_nav_menu( array(
							'menu'              => 'primary',
							'theme_location'    => 'primary',
							'depth'             => 2,
							'container'         => '',
							'menu_class'        => 'nav flex-column',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'            => new WP_Bootstrap_Navwalker())
						);
					?>
				</nav>
			</div>
			
		</div>
		
	</header>
