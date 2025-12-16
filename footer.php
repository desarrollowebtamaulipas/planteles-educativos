<!--footer-->
<footer id="footer">
	
	<div class="container-lg" id="content-footer">
	
		<div class="row">
		
			<div class="col-lg-6">
			
				<div class="row-titulo">
					<h2 class="titulo-row"><?php the_field('identidad_nombre', 'options'); ?></h2>
					<div class="borde-hr"></div>
				</div>
			
				<div class="row">
					<div class="col informacion-logo d-flex">
			
						<img class="logo" src="<?php the_field( 'identidad_logo_blanco', 'options' ); ?>" alt="<?php the_field( 'identidad_nombre', 'options' ); ?>">
						
						<div class="px-5">
							<p><?php the_field('contacto_direccion', 'options'); ?></p>
							<p>Tel: <?php the_field('contacto_telefono', 'options'); ?></p>
						</div> 
					</div>
				</div>
			
			</div>
			
			<div class="col-lg-3 col-6">
			
				<div class="row-titulo">
					<h2 class="titulo-row">Más información</h2>
					<div class="borde-hr"></div>
				</div>
				
				<?php 
					wp_nav_menu( array(
						'menu'			=>	'menu-inferior',
						'menu_class'	=>	'informacion-links clean-list'
					) );
				?>
			
			</div>
			
			<?php 
			
				$facebook 		= 	get_field( 'redes_sociales_facebook' , 'options' );
				$x 				= 	get_field( 'redes_sociales_x' , 'options' );
				$youtube 		= 	get_field( 'redes_sociales_youtube' , 'options' );
				$instagram 		= 	get_field( 'redes_sociales_instagram' , 'options' );
				$linkedin 		= 	get_field( 'redes_sociales_linkedin' , 'options' );
				$tiktok 		= 	get_field( 'redes_sociales_tiktok' , 'options' );
				if (!$facebook & !$x & !$youtube & !$instagram & !$linkedin & !$tiktok) {} else {
				
			?>
			
			<div class="col-lg-3 col-6">
						
				<div class="row-titulo">
					<h2 class="titulo-row">Síguenos en</h2>
					<div class="borde-hr"></div>
				</div>
							
				<ul class="clean-list informacion-links">
				
					<?php if (!$facebook) {} else { ?><li><a href="<?php echo $facebook; ?>" target="_blank"><i class="fa-brands fa-square-facebook"></i> Facebook</a></li><?php } ?>
					<?php if (!$x) {} else { ?><li><a href="<?php echo $x; ?>" target="_blank"><i class="fa-brands fa-x-twitter"></i> X</a></li><?php } ?>
					<?php if (!$youtube) {} else { ?><li><a href="<?php echo $youtube; ?>" target="_blank"><i class="fa-brands fa-youtube"></i> Youtube</a></li><?php } ?>
					<?php if (!$instagram) {} else { ?><li><a href="<?php echo $instagram; ?>" target="_blank"><i class="fa-brands fa-instagram"></i> Instagram</a></li><?php } ?>
					<?php if (!$linkedin) {} else { ?><li><a href="<?php echo $linkedin; ?>" target="_blank"><i class="fa-brands fa-linkedin"></i> LinkedIn</a></li><?php } ?>
					<?php if (!$tiktok) {} else { ?><li><a href="<?php echo $tiktok; ?>" target="_blank"><i class="fa-brands fa-tiktok"></i> Tiktok</a></li><?php } ?>
				
				</ul>
			
			</div>
			
			<?php } ?>
		
		</div>
	
	</div>
	
	<div id="terminos-y-condiciones">
	
		<div class="container-xxl container-lg">
		
			<div class="row d-flex justify-content-center">
				<div class="col-lg-7 text-center mt-2 mb-2 contenido-text">
					Todos los derechos reservados © <?php echo date('Y'); ?> | Gobierno del Estado de Tamaulipas 2022 - 2028 <br>
					<?php the_field('copyright_links', 'options', false); ?>
				</div>
			</div>
		
		</div>
	
	</div>

</footer>
<!--/footer-->
	
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.counterup@2.1.0/jquery.counterup.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/waypoints@4.0.1/lib/jquery.waypoints.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sticksy/dist/sticksy.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/funciones.js"></script>

<?php wp_footer(); ?>