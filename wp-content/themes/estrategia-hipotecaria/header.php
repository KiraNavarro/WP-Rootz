<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?php bloginfo('descritpion'); ?>" >
	<link rel="icon" href="../../../../favicon.ico">
	<title>
		<?php bloginfo('name'); ?>
		<?php is_front_page() ? bloginfo('description') : wp_title(); ?>
	</title>
	<!-- Bootstrap core CSS -->
	<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
	
	<!-- Custom styles for this template -->
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
	<style media="screen">
		.showcase {
			background: url( 
				<?php if (is_page('Contacto')) : ?>
					<?php echo get_theme_mod('showcase_image_2', get_template_directory_uri().'/img/showcase-2.jpg')?>
				<?php elseif (is_home()) : ?>
					<?php echo get_theme_mod('showcase_image_3', get_template_directory_uri().'/img/showcase-3.jpg')?>
				<?php else : ?>
					<?php echo get_theme_mod('showcase_image_1', get_template_directory_uri().'/img/showcase.jpg')?>
				<?php endif; ?>) no-repeat center center;
		}
		
		.site-logo {
			<?php if (is_page('Contacto'))  : ?>
				height: 100%;
				align-content: space-between; 
			<?php elseif (is_home()) : ?>
				height: 100%;
				align-content: space-between; 
			<?php else : ?>
				padding-top: 70px; 
			<?php endif; ?>
		}
		
		.site-logo img{
			<?php if (is_page('Contacto'))  : ?>
				width: 300px;
			<?php elseif (is_home()) : ?>
				width: 300px;
			<?php else : ?>
				width: 500px;
			<?php endif; ?>
		}
	</style>
</head>

<body>
	<header class="showcase">
		<div class="container">
			<div class="site-logo">
				<a href="<?php echo get_home_url(); ?>">
					<img src="<?php echo get_theme_mod('logo_image', get_template_directory_uri().'/img/site-logo.png') ?>" alt="Estrategia Hipotecaria">
				</a>
				<?php if (is_page('Contacto')) : ?>
					<h3><?php echo get_theme_mod('showcase_heading_2', 'Gestionando sueños.'); ?></h3>
				<?php elseif (is_home()) : ?>
					<h3><?php echo get_theme_mod('showcase_heading_3', 'Alcanzar tus sueños nunca fue tan fácil.'); ?></h3>
				<?php endif; ?>
			</div>
			<div class="social-media">
				<a class="social-item" href="<?php echo get_permalink( get_page_by_path( 'Contacto' ) ); ?>">
					<img src="<?php bloginfo('template_url'); ?>/img/contact.png" alt="Contacto">
				</a>
				<a class="social-item" href="<?php echo get_theme_mod('facebook', 'https://www.facebook.com/Estrategiahipotecaria/'); ?>" target="_blank">
					<img src="<?php bloginfo('template_url'); ?>/img/facebook.png" alt="Facebook">
				</a>
			</div>
		</div>
	</header>
	<nav class="navbar navbar-expand-lg navbar-dark">
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
