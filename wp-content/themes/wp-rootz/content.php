<div class="blog-post">
	<div class="blog-post-data">
		<h1 class="blog-post-title">
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h1>
		<p class="blog-post-meta">
			<?php the_time('F j, Y g:i a'); ?>
		</p>
		<?php the_excerpt(); ?>
	</div>
	<div class="post-thumb">
		<?php if( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail(); ?>
		<?php endif; ?>
	</div>
</div><!-- /.blog-post -->