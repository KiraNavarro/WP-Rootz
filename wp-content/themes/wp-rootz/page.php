<?php get_header(); ?>	
	<main role="main" class="container">
			<div class="blog-main">
				<?php if( have_posts()) : ?>
					<?php while( have_posts()) : the_post(); ?>
						<div class="blog-post">
							<h1 class="blog-post-title">
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
