<?php
	
	$argsprensa = array(
		'post_type' 		=> 'post',
		'posts_per_page'	=> 4,
		'meta_query' 		=> array('key' => '_thumbnail_id')
	);
	
	$prensa = new WP_Query( $argsprensa );
	
	if ( $prensa->have_posts() ) {
	
?>

<!-- Boletines de prensa -->
<section id="boletines-prensa" class="seccion">
	<div class="container-lg items-boletin">
	
		<div class="row">
		
			<div class="col-lg-12 row-titulo">
				<h2 class="titulo-row">Boletines de Prensa</h2>
				<div class="borde-hr"><hr></div>
			</div>
		
		</div>
		
		<div class="row">
		
			<?php 
				while ( $prensa->have_posts() ) { $prensa->the_post();
			?>
		
			<div class="col-sm-6 col-md-6 col-lg-3 mt-3 mb-3">
				<div class="item-boletin">
					
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'prensa', array( 'alt' => get_the_title(), 'class' => 'img-fluid' ) ); ?></a>
					<h6><?php the_date(); ?></h6>
					<h4><?php the_title(); ?></h4>
					<a href="<?php the_permalink(); ?>" class="d-block fw-semibold color-primario hover-primario-o">Continuar leyendo...</a>
				
				</div>
			</div>
		
			<?php } ?>
		
		</div>
		
		<div class="row" id="row-btn-boletin">
		
			<div class="d-flex justify-content-center">
				<div class="col-md-3 col-12">
					<a href="/prensa" class="btn btn-md w-100 text-white bg-primario fw-light">Ir a la Sala de Prensa</a>
				</div>
			</div>
		
		</div>
	
	</div>
</section>
<!-- /Boletines de prensa -->
	
<?php } else { } wp_reset_postdata(); ?>