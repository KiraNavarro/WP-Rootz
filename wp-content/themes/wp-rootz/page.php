<?php get_header(); ?>	
	<main role="main" class="container">
		<div class="row">
			<div class="col-sm-8 page-main">
				<?php if( have_posts()) : ?>
					<?php while( have_posts()) : the_post(); ?>
						<div class="page-post">
							<h2 class="page-post-title">
								<?php the_title(); ?>
							</h2>
							
							<?php the_content(); ?>
						</div><!-- /.blog-post -->
					<?php endwhile; ?>
				<?php else : ?>
					<p><?php __('No Page found'); ?></p>
				<?php endif; ?>
				
			</div><!-- /.blog-main -->
			
			<!-- sidebar -->
			<?php get_sidebar(); ?>
			
		</div><!-- /.row -->
		
	</main><!-- /.container -->
	
	<?php get_footer(); ?>
