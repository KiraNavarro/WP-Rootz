<div class="single-post">
	<div class="single-post-thumb">
			<?php if( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail(); ?>
			<?php endif; ?>
	</div>
	<h2 class="single-blog-post-title">
		<?php if( is_single() ) : ?>
			<?php the_title(); ?>
		<?php else : ?>
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		<?php endif; ?>
	</h2>
	
	<?php if( is_single() ) : ?>
		<?php the_content(); ?>
	<?php else : ?>
		<?php the_excerpt(); ?>
	<?php endif; ?>
	
	
</div><!-- /.blog-post -->