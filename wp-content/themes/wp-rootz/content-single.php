<div class="blog-post-single">
	<h1 class="blog-post-title">
		<?php the_title(); ?>
	</h1>
	<p class="blog-post-meta">
		<?php the_time('F j, Y g:i a'); ?>
	</p>
	<div class="post-thumb-single">
		<?php if( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail(); ?>
		<?php endif; ?>
	</div>
		<?php the_content(); ?>
</div><!-- /.blog-post -->