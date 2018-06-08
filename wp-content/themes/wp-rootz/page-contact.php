<?php 
/*
	Template Name: Contacto
*/
get_header(); ?>
	<div class="custom-template-contacto">
		<img src="<?php echo get_template_directory_uri().'/img/contacto.png' ?>">
		<div class="contacto-title">
			<h2>Detonemos la acción juntos.</h2>
			<h4>¡Nos dará mucho gusto hablar contigo!</h4>
		</div>
		
	</div>
	<main role="main" class="container">
		<div class="page-main">
			<?php if( have_posts()) : ?>
				<?php while( have_posts()) : the_post(); ?>
					<div class="page-post custom-template-cv-text">
						<?php the_content(); ?>
					</div><!-- /.blog-post -->
				<?php endwhile; ?>
			<?php else : ?>
				<p><?php __('No Page found'); ?></p>
			<?php endif; ?>
		</div><!-- /.blog-main -->
	</main><!-- /.container --> 
	<?php get_footer(); ?>
