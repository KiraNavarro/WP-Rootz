<?php get_header(); ?>	
	<main role="main" class="container main">
			<div class="blog-main">
				<?php if( have_posts()) : ?>
					<?php while( have_posts()) : the_post(); ?>
						<div class="blog-post">
							<h2 class="blog-post-title">
								<?php the_title(); ?>
							</h2>
							
							<?php the_content(); ?>
						</div><!-- /.blog-post -->
					<?php endwhile; ?>
				<?php else : ?>
					<p><?php __('No Page found'); ?></p>
				<?php endif; ?>
				<!-- Contact Form -->
				<?php
					echo do_shortcode( '[contact-form-7 id="144" title="Contact form 1"]'); 
				?>
			</div><!-- /.blog-main -->
		
	</main><!-- /.container -->
	
	<?php get_footer(); ?>
