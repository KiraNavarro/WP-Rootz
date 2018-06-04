<?php 
/*
	Template Name: Ubiq Logistics
*/

get_header(); ?>	
	<main role="main" class="container">
		<div class="blog-main">
			<?php if( have_posts()) : ?>
				<?php while( have_posts()) : the_post(); ?>
					<div class="blog-post">
						<h1 class="blog-post-title">
							<?php the_title(); ?>
						</h1>
						<?php the_content(); ?>
					</div><!-- /.blog-post -->
				<?php endwhile; ?>
			<?php else : ?>
				<p><?php __('No Page found'); ?></p>
			<?php endif; ?>
			
		</div><!-- /.blog-main -->
	</main><!-- /.container -->
	<div class="blog-post como-funciona">
		
		<div class="cf-text">
			<h3>VERSIÓN WEB</h3>
			<div>
				<div class="ubiq-logistics-web cf-text-block cf-text-block-off">
					<h6>PARADAS</h6>
					<p>Creación/importación de pedidos con  descripción detallada.</p>
				</div>
				<div class="ubiq-logistics-web cf-text-block cf-text-block-off">
					<h6>PLANIFICACIÓN DE RUTAS</h6>
					<p>Seleccione pedidos y vehículos necesarios y obtenga las rutas preliminares con la información sobre el tiempo estimado de llegada y el kilometraje. Utilice los datos de Google Maps para obtener la información de dirección y el enrutamiento más precisos.</p>
				</div>
				<div class="ubiq-logistics-web cf-text-block cf-text-block-off">
					<h6>CONTROL DE RUTAS</h6>
					<p>Monitoreo de cumplimiento de las rutas en el tiempo real, comunicación rápida con el conductor.</p>
				</div>
				<div class="ubiq-logistics-web cf-text-block cf-text-block-off">
					<h6>INFORMES Y NOTIFICACIONES</h6>
					<p>Utilice los informes para la analítica eficiente y comuníquese con los clientes mediante las notificaciones por correo electrónico con el editor de HTML incorporado..</p>
				</div>
			</div>
		</div>
		<div class="cf-images">
			<img class="ubiq-logistics-web-cf-image" src="<?php echo get_template_directory_uri().'/img/ubiq-logistics-web/image1.png' ?>" alt="Ubiq Logistics Web">
		</div>
	</div>
	<div class="blog-post como-funciona">
		<div class="cf-images">
			<img class="ubiq-logistics-movil-cf-image" src="<?php echo get_template_directory_uri().'/img/ubiq-logistics-movil/image1.png' ?>" alt="Ubiq Logistics Móvil">
		</div>
		<div class="cf-text">
			<h3>VERSIÓN MÓVIL</h3>
			<div>
				<div class="ubiq-logistics-movil cf-text-block cf-text-block-off">
					<div class="cf-title">
						<img class="cf-icon" src="<?php echo get_template_directory_uri().'/img/ubiq-logistics-movil/icon1.jpg' ?>">
						<h5>ESTADOS DE PEDIDOS Y LLAMADOS AL CLIENTE</h5>
					</div>
					<p>Marcación del estado del pedido (Confirmar/Rechazar) y el botón para llamar al cliente.</p>
				</div>
				<div class="ubiq-logistics-movil cf-text-block cf-text-block-off">
					<div class="cf-title">
						<img class="cf-icon" src="<?php echo get_template_directory_uri().'/img/ubiq-logistics-movil/icon2.jpg' ?>">
						<h5>RUTA SIEMPRE A LA MANO</h5>
					</div>
					<p>Creación de la ruta para el pedido usando un sistema externo.</p>
				</div>
				<div class="ubiq-logistics-movil cf-text-block cf-text-block-off">
					<div class="cf-title">
						<img class="cf-icon" src="<?php echo get_template_directory_uri().'/img/ubiq-logistics-movil/icon3.jpg' ?>">
						<h5>INFORMACIÓN DETALLADA DE CADA PEDIDO</h5>
					</div>
					<p>Dirección, tiempo de entrega, volumen y peso del producto, precio, etc.</p>
				</div>
				<div class="ubiq-logistics-movil cf-text-block cf-text-block-off">
					<div class="cf-title">
						<img class="cf-icon" src="<?php echo get_template_directory_uri().'/img/ubiq-logistics-movil/icon4.jpg' ?>">
						<h5>COMENTARIOS Y FOTOS</h5>
					</div>
					<p>Envío de comentarios y fotos al operador en tiempo real.</p>
				</div>
				<div class="ubiq-logistics-movil cf-text-block cf-text-block-off">
					<div class="cf-title">
						<img class="cf-icon" src="<?php echo get_template_directory_uri().'/img/ubiq-logistics-movil/icon5.jpg' ?>">
						<h5>CHAT PARA LA COMUNICACIÓN CON EL CONDUCTOR</h5>
					</div>
					<p>Posibilidad para comunicar al conductor sobre las posibles inconveniencias relacionadas con el pedido.</p>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		comoFunciona(4, 'ubiq-logistics-web', '.ubiq-logistics-web');
		comoFunciona(5, 'ubiq-logistics-movil', '.ubiq-logistics-movil');
	</script>
	<?php get_footer(); ?>