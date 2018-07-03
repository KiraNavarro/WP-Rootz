<?php get_header(); ?>	
	<main role="main" class="container">
			<div class="blog-main">
				<?php if( have_posts()) : ?>
					<?php while( have_posts()) : the_post(); ?>
						<?php get_template_part( 'content' ); ?>
					<?php endwhile; ?>
				<?php else : ?>
					<p><?php __('No Post found'); ?></p>
				<?php endif; ?>
				
				<nav class="blog-pagination">
					<?php previous_post_link('%link', 'Previo') ?>
					<?php next_post_link('%link', 'Siguiente') ?>
				</nav>
				
			</div><!-- /.blog-main -->
	</main><!-- /.container -->
	
	<?php get_footer(); ?>
