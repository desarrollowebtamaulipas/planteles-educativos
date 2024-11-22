<div id="contenido-principal" class="sin-sidebar seccion">
	<div class="container-lg">

		<div class="row">
			
			<div class="col-lg-12 row-titulo">
				<h2 class="titulo-row">Convocatorias</h2>
				<div class="borde-hr"><hr></div>
			</div>
			
		</div>
		
		<div id="convocatorias" class="row items-convocatorias">
			
			<?php while( have_posts() ) : the_post(); ?>
			
			<div class="col-sm-6 col-md-6 col-lg-3 mt-3 mb-5 d-flex flex-direction-column">
				
				<a href="<?php the_permalink(); ?>"><i class="fas fa-file-pdf icon-pdf color-primario hover-primario-o"></i></a>
				
				<div class="item-convocatoria">
					
					<h4><a class="color-negro" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<a href="<?php the_permalink(); ?>" class="d-block fw-semibold color-primario hover-primario-o">Continuar leyendo...</a>
				
				</div>
			</div>
			
			<?php endwhile; ?>
			
		</div>
		
		<?php echo paginacion_bootstrap(); ?>
	
	</div>
</div>