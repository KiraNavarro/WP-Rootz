	<footer class="blog-footer">
		<a href="http://mtpublicidad.com.mx/" target="blank">&copy; <?php echo Date('Y'); ?> - MT Publicidad</a>
		<a href="https://www.facebook.com/ubiqrastreo/" target="_blank"><img src="<?php echo get_template_directory_uri().'/img/facebook-light.png' ?>" alt="Site logo"></a>
		<a href="contacto">Contáctenos</a>
		<a href="blog">Blog</a>
		<a href="terminos-y-privacidad">Términos y Privacidad</a>
	</footer>
	<?php wp_footer(); ?> 
	<!-- Bootstrap core JavaScript
	================================================== -->
	<script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
	<!-- Responsive Tables -->
	<script>
		$( "table" ).wrap( "<div class='table-responsive'></div>" );
	</script>
	<script src="<?php bloginfo('template_url'); ?>/js/slider.js"></script>
</body>
</html>
