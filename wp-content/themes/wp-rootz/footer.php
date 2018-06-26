	<footer class="blog-footer">
		<section class="colaboradores">
			<h2><img src="<?php echo get_template_directory_uri().'/img/colaboradores/face.png' ?>">rgullosos de colaborar con:</h2>
			<div class="slideshow-container">
				<div class="mySlides fade">
					<img src="<?php echo get_template_directory_uri().'/img/colaboradores/colab1.png' ?>">
					<img src="<?php echo get_template_directory_uri().'/img/colaboradores/colab2.png' ?>">
					<img src="<?php echo get_template_directory_uri().'/img/colaboradores/colab3.png' ?>">
					<img src="<?php echo get_template_directory_uri().'/img/colaboradores/colab4.png' ?>">
				</div>
				<div class="mySlides fade">
					<img src="<?php echo get_template_directory_uri().'/img/colaboradores/colab5.png' ?>">
					<img src="<?php echo get_template_directory_uri().'/img/colaboradores/colab6.png' ?>">
					<img src="<?php echo get_template_directory_uri().'/img/colaboradores/colab7.png' ?>">
					<img src="<?php echo get_template_directory_uri().'/img/colaboradores/colab8.png' ?>">
				</div>
				<div class="mySlides fade">
					<img src="<?php echo get_template_directory_uri().'/img/colaboradores/colab9.png' ?>">
					<img src="<?php echo get_template_directory_uri().'/img/colaboradores/colab10.png' ?>">
					<img src="<?php echo get_template_directory_uri().'/img/colaboradores/colab11.png' ?>">
					<img src="<?php echo get_template_directory_uri().'/img/colaboradores/colab12.png' ?>">
				</div>
				<div class="mySlides fade">
					<img src="<?php echo get_template_directory_uri().'/img/colaboradores/colab13.png' ?>">
					<img src="<?php echo get_template_directory_uri().'/img/colaboradores/colab14.png' ?>">
					<img src="<?php echo get_template_directory_uri().'/img/colaboradores/colab15.png' ?>">
				</div>
				<div class="mySlides fade">
					<img src="<?php echo get_template_directory_uri().'/img/colaboradores/colab16.png' ?>">
					<img src="<?php echo get_template_directory_uri().'/img/colaboradores/colab17.png' ?>">
				</div>
			</div>
		</section>
		<section class="footer-1">
			<p><?php echo get_theme_mod('contact_address') ?></p>
			<p>Tel. <?php echo get_theme_mod('contact_phone') ?>  / Móvil <?php echo get_theme_mod('contact_mobile_phone') ?></p>
		</section>
		<section class="footer-2">
			<a href="http://mtpublicidad.com.mx/" target="blank"><?php echo Date('Y'); ?> MT Publicidad</a>
			<a href="blog">
				<img src="<?php echo get_template_directory_uri().'/img/blog-icon.png' ?>" alt="Blog Call2action">
				<span>BLOG Call2action</span>
			</a>
			<a href="#">Términos y Privacidad</a>
		</section>
		
	</footer>
	<?php wp_footer(); ?>
	<!-- Bootstrap core JavaScript
	================================================== -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
	
	<!-- Slider -->
	<script src="<?php bloginfo('template_url'); ?>/js/slider.js"></script>
</body>
</html>