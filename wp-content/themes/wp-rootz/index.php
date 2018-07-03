<?php get_header(); ?>	
	<main role="main" class="blog-wrapper">
		<?php if( have_posts()) : ?>
			<?php while( have_posts()) : the_post(); ?>
				<?php get_template_part( 'content' ); ?>
			<?php endwhile; ?>
		<?php else : ?>
			<p><?php __('No Post found'); ?></p>
		<?php endif; ?>
		
	</main><!-- /.container -->
	
	<?php get_footer(); ?>
