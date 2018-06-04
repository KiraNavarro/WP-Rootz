<?php 
/*
	Template Name: Ubiq Bus
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
			<div class="ubiq-bus cf-text-block cf-text-block-off">
				<div class="cf-title">
					<img class="location-icon" src="<?php echo get_template_directory_uri().'/img/ubiq-bus/location-icon.jpg' ?>">
					<h6>PARADAS</h6>
				</div>
				<p>Zona geográfica (polígono, círculo) que tiene que visitar la unidad mientras realiza una rutina. Punto de control de la ruta, es decir, cuando se sigue una rutina, se comprueba que la unidad haya entrado en la zona de parada y se controla de conformidad con el tiempo de entrada en el horario configurado. La ruta se construye a base de una secuencia de puntos de parada.</p>
			</div>
			<div class="ubiq-bus cf-text-block cf-text-block-off">
				<div class="cf-title">
					<img class="location-icon" src="<?php echo get_template_directory_uri().'/img/ubiq-bus/location-icon.jpg' ?>">
					<h6>RUTAS</h6>
				</div>
				
				<p>La ruta es una secuencia de paradas y el camino entre ellas. Estas incluyen también todos los horarios a seguir por la misma.</p>
			</div>
			<div class="ubiq-bus cf-text-block cf-text-block-off">
				<div class="cf-title">
					<img class="location-icon" src="<?php echo get_template_directory_uri().'/img/ubiq-bus/location-icon.jpg' ?>">
					<h6>CORRIDAS (CONTROL)</h6>
				</div>
				
				<p>La rutina es el movimiento de un vehículo desde el punto de partida hasta el punto de destino por una ruta determinada y de acuerdo a un horario programado para una fecha determinada.</p>
			</div>
			<div class="ubiq-bus cf-text-block cf-text-block-off">
				<div class="cf-title">
					<img class="location-icon" src="<?php echo get_template_directory_uri().'/img/ubiq-bus/location-icon.jpg' ?>">
					<h6>SEGUIMIENTO</h6>
				</div>
				
				<p>Durante el seguimiento en el mapa se muestran todas las unidades que están en las rutinas activas de cada ruta. Las descripciones emergentes de las unidades contienen información sobre sus nombres, rutinas realizadas y el tiempo de adelantamiento o atraso. En caso de un adelantamiento o un atraso crítico, el icono de la unidad se pinta de amarillo o de rojo, respectivamente.</p>
			</div>
			<div class="ubiq-bus cf-text-block cf-text-block-off">
				<div class="cf-title">
					<img class="location-icon" src="<?php echo get_template_directory_uri().'/img/ubiq-bus/location-icon.jpg' ?>">
					<h6>ALARMAS</h6>
				</div>
				
				<p>Se pueden recibir alarmas en línea sobre el proceso de las rutinas. Las alarmas en línea son una herramienta adicional de seguimiento y aumentan su efectividad atrayendo la atención del despachador a las situaciones que necesitan una reacción.</p>
			</div>
			<div class="ubiq-bus cf-text-block cf-text-block-off">
				<div class="cf-title">
					<img class="location-icon" src="<?php echo get_template_directory_uri().'/img/ubiq-bus/location-icon.jpg' ?>">
					<h6>INFORMES</h6>
				</div>
				<p>Se pueden exportar los informes ejecutado un archivo del formato XLSX. Para hacerlo, apriete el botón en el rincón derecho superior del encabezamiento del informe.</p>
			</div>
			<div class="ubiq-bus cf-text-block cf-text-block-off">
				<div class="cf-title">
					<img class="location-icon" src="<?php echo get_template_directory_uri().'/img/ubiq-bus/location-icon.jpg' ?>">
					<h6>ADAS & ECO DRIVING</h6>
				</div>
				<p>Controla la fatiga del conductor. Aumente la vida de sus vehículos y ahorre combustible.</p>
			</div>
		</div>
		<div class="cf-images">
			<img class="ubiq-bus-cf-image" src="<?php echo get_template_directory_uri().'/img/ubiq-bus/image1.png' ?>" alt="Ubiq Bus">
		</div>
	</div>
	<script type="text/javascript">
		comoFunciona(8, 'ubiq-bus', '.ubiq-bus');
	</script>
	<?php get_footer(); ?>