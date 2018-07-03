<?php get_header(); ?>	
	<main role="main" class="blog-wrapper">
		<?php if( have_posts()) : ?>
			<?php while( have_posts()) : the_post(); ?>
				<?php get_template_part( 'content' ); ?>
			<?php endwhile; ?>
		<?php else : ?>
			<p><?php __('No Post found'); ?></p>
		<?php endif; ?>
		<nav class="blog-pagination">
			<?php echo get_previous_posts_link( 'Anteriores', $max_page ); ?>
			<?php echo get_next_posts_link( 'Siguientes', $max_page ); ?> 
		</nav>
	</main><!-- /.container -->
	
	<?php get_footer(); ?>
