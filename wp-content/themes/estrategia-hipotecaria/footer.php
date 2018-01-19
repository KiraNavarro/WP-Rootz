	<footer class="blog-footer">
		<div class="social-media">
			<a class="social-item" href="#">
				<img src="<?php bloginfo('template_url'); ?>/img/contact.png" alt="Contact">
			</a>
			<a class="social-item" href="https://www.facebook.com/Estrategiahipotecaria/" target="_blank">
				<img src="<?php bloginfo('template_url'); ?>/img/facebook.png" alt="Facebook">
			</a>
		</div>
		<div class="site-info">
			<p class="footer-item"><?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
			<a class="footer-item" href="#" target="blank">Aviso de Privacidad</a>
			<p class="footer-item">Diseño y Desarrollo Web por <a href="http://mtpublicidad.com.mx/" target="blank">MT Publicidad</a>.</p>
		</div>
	</footer>
	<?php wp_footer(); ?>
	<!-- Bootstrap core JavaScript
	================================================== -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
</body>
</html>