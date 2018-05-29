	<footer class="blog-footer">
		<section class="footer-section-1">
			<img src="<?php echo get_template_directory_uri().'/img/logo-b.png' ?>" alt="MT Publicidad">
			<div class="footer-info">
				<div class="footer-nav">
					<h6>Mapa de Sitio</h6>
					<ul>
						<li>Home</li>
						<li>Agencia</li>
						<li>Proyectos</li>
						<li>Talento</li>
						<li>Contacto</li>
						<li>Más de MT</li>
					</ul>
				</div>
				<div class="footer-contact">
					<h6>Contacto</h6>
					<p>T. +[52] 6307.4435</p>
					<p>Horario: L-V / 9hrs - 18hrs</p>
					<?php if (is_page('contacto')) : ?>
						<a href="mailto:hey@mtpublicidad.com.mx" class="btn-dark">hey@mtpublicidad.com.mx</a>
					<?php else : ?>
						<a href="contacto" class="btn-custom">Contactar</a>
					<?php endif; ?>
					
				</div>
			</div>
			
		</section>
		<section class="footer-section-2">
			<a href="home">&copy; <?php echo Date('Y'); ?> - MT Publicidad</a>
			<div class="redes-footer">
				<a href="#" target="blank">
					<img src="<?php echo get_template_directory_uri().'/img/facebook-icon-w.png' ?>" alt="Facebook MT Publicidad">
				</a>
				<a href="#" target="blank">
					<img src="<?php echo get_template_directory_uri().'/img/behance-icon-w.png' ?>" alt="Behance MT Publicidad">
				</a>
				<a href="#" target="blank">
					<img src="<?php echo get_template_directory_uri().'/img/linkedin-icon-w.png' ?>" alt="LinkedIn MT Publicidad">
				</a>
			</div>
			<a href="contacto">Contacto</a>
			<a href="terminos-y-privacidad">Terminos & Privacidad</a>
		</section>
	</footer>
	<?php wp_footer(); ?>
	<!-- Bootstrap core JavaScript
	================================================== -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
	<!-- Nav animation -->
	<script src="<?php bloginfo('template_url'); ?>/js/nav.js"></script>
</body>
</html>