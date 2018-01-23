<?php get_header(); ?>
<div class="container">
	<section>
		<div class="section-title">
			<div id="triangle-left"></div>
			<h1><?php echo get_theme_mod('intro_heading', 'Dinero trabajando... a tu favor.'); ?></h1>
			<div id="triangle-right"></div>
		</div>
		<div class="section-text">
			<p><?php echo get_theme_mod('intro_text_1', 'Estrategia Hipotecaria se conforma por un equipo de expertos en asesoría y gestión de créditos hipotecarios y PyMEs, ofrecemos un servicio confiable, cálido, profesional y sobretodo fácil de entender.'); ?></p>
			<p><?php echo get_theme_mod('intro_text_2', 'Nuestra experiencia y la relación directa con las principales instituciones financieras del país nos permiten poner a su alcance las mejores opciones de financiamiento de acuerdo a su perfil, logrando el éxito de su operación en el menor tiempo posible.'); ?></p>	
		</div>
	</section>
	
	<section>
		<div class="section-title">
			<div id="triangle-left"></div>
			<h1>Servicios</h1>
			<div id="triangle-right"></div>
		</div>
		<div class="section-services">
			<div class="services-row">
				<div class="service-item services-color-1">
					<h2><?php echo get_theme_mod('servicios_heading_1', 'Crédito de Adquisición'); ?></h2>
					<img src="<?php echo get_theme_mod('servicios_icon_1', get_template_directory_uri().'/img/credito-adquisicion-icon.png')?>" alt="<?php echo get_theme_mod('servicios_heading_1', 'Crédito de Adquisición'); ?>">
				</div>
			</div>
			<div class="services-row">
				<div class="service-item services-color-2">
					<h2><?php echo get_theme_mod('servicios_heading_2', 'Sustitución de Hipoteca'); ?></h2>
					<img src="<?php echo get_theme_mod('servicios_icon_2', get_template_directory_uri().'/img/sustitucion-hipoteca-icon.png')?>" alt="<?php echo get_theme_mod('servicios_heading_2', 'Sustitución de Hipoteca'); ?>">
				</div>
				<div class="service-item services-color-3">
					<h2><?php echo get_theme_mod('servicios_heading_3', 'Crédito de Liquidez'); ?></h2>
					<img src="<?php echo get_theme_mod('servicios_icon_3', get_template_directory_uri().'/img/credito-liquidez-icon.png')?>" alt="<?php echo get_theme_mod('servicios_heading_3', 'Crédito de Liquidez'); ?>">
				</div>
				<div class="service-item services-color-4">
					<h2><?php echo get_theme_mod('servicios_heading_4', 'Crédito PyME'); ?></h2>
					<img src="<?php echo get_theme_mod('servicios_icon_4', get_template_directory_uri().'/img/credito-pyme-icon.png')?>" alt="<?php echo get_theme_mod('servicios_heading_4', 'Crédito PyME'); ?>">
				</div>
			</div>
			<div class="services-row">
				<div class="service-item services-color-3">
					<h2><?php echo get_theme_mod('servicios_heading_5', 'Adelanto'); ?></h2>
					<img src="<?php echo get_theme_mod('servicios_icon_5', get_template_directory_uri().'/img/adelanto-icon.png')?>" alt="<?php echo get_theme_mod('servicios_heading_5', 'Adelanto'); ?>">
				</div>
				<div class="service-item services-color-4">
					<h2><?php echo get_theme_mod('servicios_heading_6', 'Crédito Nómina'); ?></h2>
					<img src="<?php echo get_theme_mod('servicios_icon_6', get_template_directory_uri().'/img/credito-nomina-icon.png')?>" alt="<?php echo get_theme_mod('servicios_heading_6', 'Crédito Nómina'); ?>">
				</div>
				<div class="service-item services-color-2">
					<h2><?php echo get_theme_mod('servicios_heading_7', 'Créditos Personales'); ?></h2>
					<img src="<?php echo get_theme_mod('servicios_icon_7', get_template_directory_uri().'/img/credito-personal-icon.png')?>" alt="<?php echo get_theme_mod('servicios_heading_7', 'Créditos Personales'); ?>">
				</div>
			</div>
		</div>
	</section>
	
	<section>
		<div class="section-title">
			<div id="triangle-left"></div>
			<h1>Alianzas Comerciales</h1>
			<div id="triangle-right"></div>
		</div>
		<div class="section-alianzas">
			<?php 
				$id = 55; // add the ID of the page where the zero is
				$p = get_page($id);
				echo apply_filters('the_content', $p->post_content);
			 ?>
		</div>
	</section>
</div>
<?php get_footer(); ?>