<div id="contenido-principal" class="sin-sidebar seccion">
	<div class="container-lg">

		<div class="row">
			
			<div class="col-lg-12 row-titulo">
				<h2 class="titulo-row">Resultado de búsqueda para <i><?php echo $_GET['s'] ?></i> en sala de prensa</h2>
				<div class="borde-hr"><hr></div>
			</div>
			
		</div>
		
		<div id="boletines-prensa" class="row items-boletin">
			
			<?php while( have_posts() ) : the_post(); ?>
			
			<div class="col-sm-6 col-md-6 col-lg-3 mt-3 mb-3">
				<div class="item-boletin">
					
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'prensa', array( 'alt' => get_the_title(), 'class' => 'img-fluid' ) ); ?></a>
					<h6><?php echo get_the_date(); ?></h6>
					<h4><a class="color-negro" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<a href="<?php the_permalink(); ?>" class="d-block fw-semibold color-primario hover-primario-o">Continuar leyendo...</a>
				
				</div>
			</div>
			
			<?php endwhile; ?>
			
		</div>
		
		<?php echo paginacion_bootstrap(); ?>
	
	</div>
</div>