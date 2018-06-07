<?php get_header(); ?>	
	<main role="main" class="container">
			<div class="blog-main-single">
				<?php if( have_posts()) : ?>
					<?php while( have_posts()) : the_post(); ?>
						<?php get_template_part( 'content-single' ); ?>
						<nav class="blog-pagination">
							<div class="prev-posts">
								<?php previous_post_link('%link', '&lt; Previo') ?>
							</div>
							<div class="next-posts">
								<?php next_post_link('%link', 'Siguiente &gt;') ?>
							</div>
						</nav>
					<?php endwhile; ?>
				<?php else : ?>
					<p><?php __('No Post found'); ?></p>
				<?php endif; ?>
			</div><!-- /.blog-main -->
		
	</main><!-- /.container -->
	
	<?php get_footer(); ?>
