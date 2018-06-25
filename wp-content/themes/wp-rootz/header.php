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
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/comofunciona.js"></script>
	<style media="screen">
		.blog-logo {
			background: url(
				<?php if (is_front_page()) : ?>
					<?php echo get_template_directory_uri().'/img/site-logo.png' ?>
				<?php elseif (is_page('soluciones')) : ?>
					<?php echo get_template_directory_uri().'/img/site-logo.png' ?>
				<?php elseif (is_page('administracion-de-flotas'))  : ?>
					<?php echo get_template_directory_uri().'/img/site-logo.png' ?>
				<?php elseif (is_page('ubiq-bus'))  : ?>
					<?php echo get_template_directory_uri().'/img/site-logo.png' ?>
				<?php elseif (is_page('ubiq-logistics'))  : ?>
					<?php echo get_template_directory_uri().'/img/site-logo-2.png' ?>
				<?php elseif (is_page('gpss'))  : ?>
					<?php echo get_template_directory_uri().'/img/site-logo-2.png' ?>
				<?php elseif (is_page('iot'))  : ?>
					<?php echo get_template_directory_uri().'/img/site-logo-2.png' ?>
				<?php else : ?>
					<?php echo get_template_directory_uri().'/img/site-logo.png' ?>
				<?php endif; ?>) no-repeat;
				background-size: contain;
		}
		@media (max-width: 450px) {
			header {
				background: url(
					<?php if (is_front_page()) : ?>
						<?php echo get_template_directory_uri().'/img/movil-head.jpg' ?>
					<?php elseif (is_page('soluciones')) : ?>
						<?php echo get_template_directory_uri().'/img/movil-soluciones-head.jpg' ?>
					<?php elseif (is_page('administracion-de-flotas'))  : ?>
						<?php echo get_template_directory_uri().'/img/movil-administracion-head.jpg' ?>
					<?php elseif (is_page('ubiq-bus'))  : ?>
						<?php echo get_template_directory_uri().'/img/movil-bus-head.jpg' ?>
					<?php elseif (is_page('ubiq-logistics'))  : ?>
						<?php echo get_template_directory_uri().'/img/movil-logistics-head.jpg' ?>
					<?php elseif (is_page('gpss'))  : ?>
						<?php echo get_template_directory_uri().'/img/movil-gps-head.jpg' ?>
					<?php elseif (is_page('iot'))  : ?>
						<?php echo get_template_directory_uri().'/img/movil-iot-head.jpg' ?>
					<?php else : ?>
						<?php echo get_template_directory_uri().'/img/movil-head.jpg' ?>
					<?php endif; ?>) no-repeat;
				background-position: center;
			}
			.blog-logo {
				background: url(<?php echo get_template_directory_uri().'/img/site-logo.png' ?>) no-repeat;
				background-size: contain;
			}
		}
	</style>
</head>

<body>

	<header>
		<div class="headers">
			<div class="mySlides fade">
				<img src="<?php echo get_template_directory_uri().'/img/headers/header-1.jpg' ?>">
			</div>
			<div class="mySlides fade">
				<img src="<?php echo get_template_directory_uri().'/img/headers/header-2.jpg' ?>">
			</div>
			<div class="mySlides fade">
				<img src="<?php echo get_template_directory_uri().'/img/headers/header-3.jpg' ?>">
			</div>
			<div class="mySlides fade">
				<img src="<?php echo get_template_directory_uri().'/img/headers/header-4.jpg' ?>">
			</div>
			<div class="mySlides fade">
				<img src="<?php echo get_template_directory_uri().'/img/headers/header-5.jpg' ?>">
			</div>
			<div class="mySlides fade">
				<img src="<?php echo get_template_directory_uri().'/img/headers/header-6.jpg' ?>">
			</div>
			<div class="mySlides fade">
				<img src="<?php echo get_template_directory_uri().'/img/headers/header-7.jpg' ?>">
			</div>
		</div>
		<div class="blog-masthead">
			<div class="container blog-header">
				<div class="blog-logo">
					<a href="<?php echo get_home_url(); ?>"></a>
				</div>
				<div class="blog-nav-content">
					<div class="blog-info">
						<span class="head-contact">Contáctenos: + (52 55) 5925 4309 </span>
						<span class="head-social">Síguenos en: <a href="https://www.facebook.com/ubiqrastreo/" target="_blank"><img src="<?php echo get_template_directory_uri().'/img/facebook.png' ?>" alt="Facebook"> @ubiqmx</a></span>
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
