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
			background: url( <?php echo get_theme_mod('showcase_image', get_template_directory_uri().'/img/showcase.jpg') ?>) no-repeat center center;
		}
	</style>
</head>

<body>
	<header class="showcase">
		<div class="container">
			<div class="social-media">
				<a class="social-item" href="#">
					<img src="<?php bloginfo('template_url'); ?>/img/contact.png" alt="Contact">
				</a>
				<a class="social-item" href="https://www.facebook.com/Estrategiahipotecaria/" target="_blank">
					<img src="<?php bloginfo('template_url'); ?>/img/facebook.png" alt="Facebook">
				</a>
			</div>
			<div class="site-logo">
				<img src="<?php bloginfo('template_url'); ?>/img/site-logo.png" alt="Estrategia Hipotecaria">
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
