	<footer class="blog-footer">
		<a href="https://www.mazeta.mx/" target="_blank"><?php echo Date('Y'); ?> Mazeta Marketing</a>
		<a href="https://www.facebook.com/gemgasmx" target="_blank">
			<img src="<?php bloginfo('template_url'); ?>/img/facebook-footer.svg" alt="Facebook">
		</a>
		<a href="contacto" class="contact-footer">Contáctenos</a>
	</footer>
	<?php wp_footer(); ?>
	<!-- Bootstrap core JavaScript
	================================================== -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
	<script type="text/javascript">
	$('.blog-main').scroll(function() { 
		console.log('just keep scrolling');
		$('.blog-post img').animate({top:$(this).scrollTop()});
	});
	</script>
</body>
</html>