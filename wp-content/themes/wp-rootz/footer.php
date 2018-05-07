	<footer class="blog-footer">
		<a href="http://mtpublicidad.com.mx/" target="blank">&copy; <?php echo Date('Y'); ?> - MT Publicidad</a>
		<a href="https://www.facebook.com/ubiqrastreo/" target="_blank"><img src="<?php echo get_template_directory_uri().'/img/facebook-light.png' ?>" alt="Site logo"></a>
		<a href="contacto">Contáctenos</a>
		<a href="#">Términos y Privacidad</a>
	</footer>
	<?php wp_footer(); ?>
	<!-- Bootstrap core JavaScript
	================================================== -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
	<!-- Responsive Tables -->
	<script>
		$( "table" ).wrap( "<div class='table-responsive'></div>" );
	</script>
</body>
</html>
