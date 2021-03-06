<?php get_header(); ?>	
	<main role="main" class="container">
		<div class="row">
			<div class="col-sm-8 blog-main">
				<?php if( have_posts()) : ?>
					<?php while( have_posts()) : the_post(); ?>
						<?php get_template_part( 'content' ); ?>
					<?php endwhile; ?>
				<?php else : ?>
					<p><?php __('No Post found'); ?></p>
				<?php endif; ?>
				
				<nav class="blog-pagination">
					<a class="btn btn-outline-primary" href="#">Older</a>
					<a class="btn btn-outline-secondary disabled" href="#">Newer</a>
				</nav>
				
			</div><!-- /.blog-main -->
			<!-- sidebar -->
			<?php get_sidebar(); ?>
		</div><!-- /.row -->
		
	</main><!-- /.container -->
	
	<?php get_footer(); ?>
