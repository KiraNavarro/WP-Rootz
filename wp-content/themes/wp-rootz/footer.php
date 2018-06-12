	<footer class="blog-footer">
		<section class="colaboradores">
			<h2><img src="<?php echo get_template_directory_uri().'/img/colaboradores/face.png' ?>">rgullosos de colaborar con:</h2>
			<div class="logos-colaboradores">
				<?php 
					$numbers = range(1, 17);
					shuffle($numbers);
					for ($x = 0; $x <= 3; $x++) { 
				?>
						<img src="<?php echo get_template_directory_uri().'/img/colaboradores/colab'. $numbers[$x].'.png' ?>">
				<?php } ?>
			</div>
		</section>
		<section class="footer-1">
			<p>Sultepec 41, Hipódromo Condesa, CDMX</p>
			<p>Tel. (55) 26 14 59 73  / Móvil 044 (55) 76 65 28 10</p>
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
	<!-- Bootstrap core JavaScript
	================================================== -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
</body>
</html>