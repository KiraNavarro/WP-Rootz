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
			</div><!-- /.blog-main -->
		
	</main><!-- /.container -->
	
	<?php get_footer(); ?>
