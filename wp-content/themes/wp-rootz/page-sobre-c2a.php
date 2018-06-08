<?php 
/*
	Template Name: Sobre C2A
*/
get_header(); ?>
	<div class="orange-bg">
		<div class="container custom-template">
			<h2>Nos apasiona transferir el conocimiento serio y profundo a hábitos prácticos y concretos.</h2>
			<div class="sobre-c2a">
				<p>Utilizamos nuestro dominio en las artes escénicas (teatro, impro y stand-up comedy) junto con el sustento cientíﬁco de nuestros contenidos (Ciencias de la Felicidad) y la experiencia de más de 20 años para garantizarte una experiencia memorable.</p>
				<img src="<?php echo get_template_directory_uri().'/img/sobre-c2a.png' ?>">
			</div>
		</div>
	</div>
	<main role="main" class="container">
		<div class="page-main">
			<?php if( have_posts()) : ?>
				<?php while( have_posts()) : the_post(); ?>
					<div class="page-post">
						<h1 class="page-post-title">
							<?php the_title(); ?>
						</h1>
						<?php the_content(); ?>
					</div><!-- /.blog-post -->
				<?php endwhile; ?>
			<?php else : ?>
				<p><?php __('No Page found'); ?></p>
			<?php endif; ?>
		</div><!-- /.blog-main -->
	</main><!-- /.container --> 
	<?php get_footer(); ?>
