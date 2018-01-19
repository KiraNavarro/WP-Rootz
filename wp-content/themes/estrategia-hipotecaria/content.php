<div class="blog-post">
	<div class="featured-image">
		<?php if( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail(); ?>
		<?php endif; ?>
	</div>
	<div class="post">
		<h2 class="blog-post-title"><?php the_title(); ?></h2>
		<?php the_content(); ?>
	</div>
</div><!-- /.blog-post -->