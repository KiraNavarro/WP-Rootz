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
		.header-img {
			background: url( 
				<?php if (is_page('contacto')) : ?>
					<?php echo get_template_directory_uri().'/img/header-img-1.jpg' ?>
				<?php elseif (is_front_page()) : ?>
					<?php echo get_template_directory_uri().'/img/header-img-1.jpg' ?>
				<?php elseif (is_page('beneficios'))  : ?>
					<?php echo get_template_directory_uri().'/img/header-img-1.jpg' ?>
				<?php elseif (is_page('gas-natural'))  : ?>
					<?php echo get_template_directory_uri().'/img/header-img-1.jpg' ?>
				<?php elseif (is_page('proyectos'))  : ?>
					<?php echo get_template_directory_uri().'/img/header-img-1.jpg' ?>
				<?php elseif (is_page('soluciones'))  : ?>
					<?php echo get_template_directory_uri().'/img/header-img-1.jpg' ?>
				<?php else : ?>
					<?php echo get_template_directory_uri().'/img/header-img-1.jpg' ?>
				<?php endif; ?>) no-repeat;
				
			background-size: cover;
		}
	</style>
</head>

<body>
	
	<header>
		<div class="blog-masthead">
			<div class="container">
				<div class="social-info">
					<div class="social-ctamx">
						<a href="#">
							<img src="<?php echo get_template_directory_uri().'/img/facebook.png' ?>" alt="Facebook CTAMX">
						</a>
						<a href="#">
							<img src="<?php echo get_template_directory_uri().'/img/linkedin.png' ?>" alt="Linkedin CTAMX">
						</a>
						<a href="#">
							<img src="<?php echo get_template_directory_uri().'/img/youtube.png' ?>" alt="Youtube CTAMX">
						</a>
						<p><b>: CTAMX</b></p>
					</div>
					<div class="social-adriana">
						<a href="#">
							<img src="<?php echo get_template_directory_uri().'/img/facebook.png' ?>" alt="Facebook Adriana Castro MX">
						</a>
						<a href="#">
							<img src="<?php echo get_template_directory_uri().'/img/linkedin.png' ?>" alt="Linkedin Adriana Castro MX">
						</a>
						<a href="#">
							<img src="<?php echo get_template_directory_uri().'/img/youtube.png' ?>" alt="Youtube Adriana Castro MX">
						</a>
						<p><b>: adriana</b>castro<b>mx</b></p>
					</div>
				</div>
			</div>
			<div class="blog-header">
				<div class="test">
					<div class="blog-logo">
						<a href="<?php echo get_home_url(); ?>">
							<img src="<?php echo get_template_directory_uri().'/img/site-logo.png' ?>" alt="Site logo">
						</a>
					</div>
				</div>
				<div class="blog-navbar">
					<nav class="navbar navbar-expand-lg navbar-light">
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
									'menu_class'        => 'navbar-nav nav-link mr-auto',
									'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
									'walker'            => new WP_Bootstrap_Navwalker())
								);
							?>
						</div>
					</nav>
				</div>
			</div>
			<div class="header-img">
				<p>Hola Jess</p>
			</div>
		</div>
		
	</header>
