<?php 
/*
	Template Name: Conferencias
*/
get_header(); ?>
	<div class="orange-bg">
		<div class="container custom-template">
			<h2>Estás organizando un evento, ya sea una convención, congreso, reuniones Kick off o lanzamiento de producto?</h2>
			<h4>Ofrecemos conferencias poderosas que cautivan audiencias.</h4>
			<a href="contacto" class="btn-custom-green">Contáctanos</a>
		</div>
	</div>
	<main role="main" class="container">
		<div class="page-main">
			<?php if( have_posts()) : ?>
				<?php while( have_posts()) : the_post(); ?>
					<div class="page-post">
						<?php the_content(); ?>
					</div><!-- /.blog-post -->
				<?php endwhile; ?>
			<?php else : ?>
				<p><?php __('No Page found'); ?></p>
			<?php endif; ?>
		</div><!-- /.blog-main -->
	</main><!-- /.container --> 
	<?php get_footer(); ?>
