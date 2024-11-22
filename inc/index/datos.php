<!-- Datos -->
<section id="datos" class="seccion">
	<div class="container-lg">
		
		<div class="row justify-content-center">
			
			<div class="datos col-lg-10 bg-primario">
				
				<div class="row mb-5">
					
					<div class="col-lg-12 titulo-datos mb-5">
						<h3 class="titulo-dato text-center text-white"><?php the_field('datos_titulo','options'); ?></h3>
					</div>
					
					<div class="col-lg-4 dato dato-1">
						<h4><span><?php the_field('datos_1_prefijo','options'); ?></span><span class="counter"><?php the_field('datos_1_dato', 'options'); ?></span></h4>
						<hr>
						<h5><?php the_field('datos_1_texto', 'options'); ?></h5>
					</div>
					
					<div class="col-lg-4 dato dato-2">
						<h4><span><?php the_field('datos_2_prefijo','options'); ?></span><span class="counter"><?php the_field('datos_2_dato', 'options'); ?></span></h4>
						<hr>
						<h5><?php the_field('datos_2_texto', 'options'); ?></h5>
					</div>
					
					<div class="col-lg-4 dato dato-3">
						<h4><span><?php the_field('datos_3_prefijo','options'); ?></span><span class="counter"><?php the_field('datos_3_dato', 'options'); ?></span></h4>
						<hr>
						<h5><?php the_field('datos_3_texto', 'options'); ?></h5>
					</div>
					
				</div>
				
				<?php 
				
					$boton 			= get_field('datos_boton', 'options'); if( $boton ):
					$link_boton 	= get_permalink( $boton->ID );
					$title_boton	= get_the_title( $boton->ID );
				
				?>
				
				<div class="row" id="row-btn-datos">
						
					<div class="d-flex justify-content-center">
						<div class="col-md-3 col-12">
							<a href="<?php echo $link_boton; ?>" class="btn btn-md w-100 text-white bg-primario-o fw-light"><?php echo $title_boton; ?></a>
						</div>
					</div>
				
				</div>
				
				<?php endif; ?>
			
			</div>
			
		</div>
		
	</div>
	
</section>
<!-- /Datos -->