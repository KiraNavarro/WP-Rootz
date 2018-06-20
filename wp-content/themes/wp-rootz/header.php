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
</head>

<body>
	
	<header>
		<div class="blog-masthead">
			<div class="header-social">
				<div class="container social-info">
					<div class="social-ctamx">
						<a href="https://www.facebook.com/CTAMX/" target="_blank">
							<img src="<?php echo get_template_directory_uri().'/img/facebook.png' ?>" alt="Facebook CTAMX">
						</a>
						<a href="#" target="_blank">
							<img src="<?php echo get_template_directory_uri().'/img/linkedin.png' ?>" alt="Linkedin CTAMX">
						</a>
						<a href="https://www.youtube.com/channel/UC5iCZ3YTFMs_huboPuYqYFQ" target="_blank">
							<img src="<?php echo get_template_directory_uri().'/img/youtube.png' ?>" alt="Youtube CTAMX">
						</a>
						<p><b>: CTAMX</b></p>
					</div>
					<div class="social-adriana">
						<a href="https://www.facebook.com/adrianacastromx/?ref=bookmarks" target="_blank">
							<img src="<?php echo get_template_directory_uri().'/img/facebook.png' ?>" alt="Facebook Adriana Castro MX">
						</a>
						<a href="https://www.linkedin.com/in/adriana-castro-589465151/" target="_blank">
							<img src="<?php echo get_template_directory_uri().'/img/linkedin.png' ?>" alt="Linkedin Adriana Castro MX">
						</a>
						<a href="#" target="_blank">
							<img src="<?php echo get_template_directory_uri().'/img/youtube.png' ?>" alt="Youtube Adriana Castro MX">
						</a>
						<p><b>: adriana</b>castro<b>mx</b></p>
					</div>
				</div>
			</div>
			<div class="blog-header">
				<div class="blog-logo-wrapper">
					<div class="blog-logo">
						<a href="<?php echo get_home_url(); ?>">
							<img src="<?php echo get_template_directory_uri().'/img/site-logo.png' ?>" alt="Site logo">
						</a>
					</div>
				</div>
				<div class="blog-navbar">
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
				<?php if (is_page('contacto')) : ?>
					<img src="<?php echo get_template_directory_uri().'/img/headers/header-contacto.jpg' ?>">
				<?php elseif (is_front_page()) : ?>
					<img src="<?php echo get_template_directory_uri().'/img/headers/header-home.jpg' ?>">
				<?php elseif (is_page('sobre-c2a'))  : ?>
					<img src="<?php echo get_template_directory_uri().'/img/headers/header-sobre-c2a.jpg' ?>">
				<?php elseif (is_page('conferencias'))  : ?>
					<img src="<?php echo get_template_directory_uri().'/img/headers/header-conferencias.jpg' ?>">
				<?php elseif (is_page('adriana-castro'))  : ?>
					<img src="<?php echo get_template_directory_uri().'/img/headers/header-adriana.jpg' ?>">
				<?php elseif (is_home())  : ?>
					<img src="<?php echo get_template_directory_uri().'/img/headers/header-blog.jpg' ?>">
				<?php else : ?>
					<img src="<?php echo get_template_directory_uri().'/img/headers/header-home.jpg' ?>">
				<?php endif; ?>
			</div>
		</div>
		
	</header>
