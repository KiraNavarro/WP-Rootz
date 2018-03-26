<?php get_header(); ?>
<section class="boxes">
	<div class="container">
		<div class="row box-container">
				<?php if( is_active_sidebar( 'box1') ) : ?>
					<?php dynamic_sidebar( 'box1' ); ?>
				<?php endif; ?>
				<?php if( is_active_sidebar( 'box2') ) : ?>
					<?php dynamic_sidebar( 'box2' ); ?>
				<?php endif; ?>
				<?php if( is_active_sidebar( 'box3') ) : ?>
					<?php dynamic_sidebar( 'box3' ); ?>
				<?php endif; ?>
			</div>
			
		</div>
	</div>
</section>
<section class="contact">
	<!-- Contact Form -->
	<?php
		echo do_shortcode( '[contact-form-7 id="144" title="Contact form 1"]'); 
	?>
</section>
<?php get_footer(); ?>