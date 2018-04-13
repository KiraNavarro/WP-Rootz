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
		.showcase {
			background: url( <?php echo get_theme_mod('showcase_image', get_template_directory_uri().'/img/showcase.jpg') ?>) no-repeat center center;
		}
	</style>
</head>

<body>
	
	<header>
		<div class="blog-masthead">
			<div class="container">
				<h1 class="blog-title"><?php bloginfo('name'); ?></h1>
				<p class="lead blog-description"><?php bloginfo('description'); ?></p>
			</div>
		</div>
		<div class="blog-navbar">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<a class="navbar-brand" href="#">Navbar</a>
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
	</header>
