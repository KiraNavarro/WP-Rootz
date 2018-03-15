<?php get_header(); ?>
<section class="showcase">
	<div class="container">
		<h1><?php echo get_theme_mod('showcase_heading', 'Custom WP Rootz theme'); ?></h1>
		<p><?php echo get_theme_mod('showcase_text', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'); ?></p>
		<a href="<?php echo get_theme_mod('showcase_btn_url', 'http://test.com'); ?>" class="btn btn-primary btn-lg"><?php echo get_theme_mod('showcase_btn_text', 'Read More'); ?></a>
	</div>
</section>

<section class="boxes">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<?php if( is_active_sidebar( 'box1') ) : ?>
					<?php dynamic_sidebar( 'box1' ); ?>
				<?php endif; ?>
			</div>
			<div class="col-md-4">
				<?php if( is_active_sidebar( 'box2') ) : ?>
					<?php dynamic_sidebar( 'box2' ); ?>
				<?php endif; ?>
			</div>
			<div class="col-md-4">
				<?php if( is_active_sidebar( 'box3') ) : ?>
					<?php dynamic_sidebar( 'box3' ); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>