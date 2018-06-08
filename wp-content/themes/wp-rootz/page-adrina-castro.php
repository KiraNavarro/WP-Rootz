<?php 
/*
	Template Name: Adriana Castro
*/
get_header(); ?>
	<div class="custom-template-cv">
		<div class="pleca-naranja-left"></div>
		<h2>
			La versión oficial
			<img src="<?php echo get_template_directory_uri().'/img/version-oficial.png' ?>">
		</h2>
		
		<div class="pleca-naranja-right"></div>
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
