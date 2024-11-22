<?php
			
	$argsconvocatorias = array(
							
		'post_type' 		=> 'convocatorias',
		'posts_per_page'	=> 4,
	);
	
	$convocatorias = new WP_Query( $argsconvocatorias );
	
	if ( $convocatorias->have_posts() ) {
	
?>

<!-- Convocatorias -->
<section id="convocatorias" class="seccion">
	<div class="container-lg avisos">
	
		<div class="row">
		
			<div class="col-lg-12 row-titulo">
				<h2 class="titulo-row">Convocatorias</h2>
				<div class="borde-hr"><hr></div>
			</div>
		
		</div>
		
		<div class="row">
			
			<?php 
				while ( $convocatorias->have_posts() ) { $convocatorias->the_post();
			?>
		
			<div class="col-sm-6 col-md-6 col-lg-3 mt-3 mb-3 d-flex flex-direction-column">
							
				<a href="<?php the_permalink(); ?>"><i class="fas fa-file-pdf icon-pdf color-primario hover-primario-o"></i></a>
				
				<div class="item-convocatoria">
					
					<h4><a class="color-negro" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<a href="<?php the_permalink(); ?>" class="d-block fw-semibold color-primario hover-primario-o">Continuar leyendo...</a>
				
				</div>
			</div>
			
			<?php } ?>
		
		</div>
		
		<?php 
			$convocatorias_totales = $convocatorias->found_posts;
			if ($convocatorias_totales > 4) { 
		?>
		
		<div class="row mt-5" id="row-btn-convocatorias">
				
			<div class="d-flex justify-content-center">
				<div class="col-md-3 col-12">
					<a href="/convocatorias" class="btn btn-md w-100 text-white bg-primario fw-light">Ver mas convocatorias</a>
				</div>
			</div>
		
		</div>
		
		<?php } ?>
	
	</div>
</section>
<!-- /Convocatorias -->
	
<?php } else { } wp_reset_postdata(); ?>