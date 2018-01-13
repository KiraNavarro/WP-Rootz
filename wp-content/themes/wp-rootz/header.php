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
	
	<!-- Custom styles for this template -->
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
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
