<?php
			
	$argssitios = array(
							
		'post_type' 		=> 'sitio-interes',
		'posts_per_page'	=> -1,
		'order'   			=> 'ASC',
		'meta_query' 		=> array('key' => '_thumbnail_id')
	);
	
	$sitios = new WP_Query( $argssitios );
	
	if ( $sitios->have_posts() ) {
	
?>

<!-- Sitios de Interés -->
<section id="sitios-de-interes" class="seccion">
	<div class="container-lg">
	
		<div class="row">
		
			<div class="col-lg-12 row-titulo">
				<h2 class="titulo-row">Sitios de Interés</h2>
				<div class="borde-hr"><hr></div>
			</div>
		
		</div>
		
		<div class="sitios-de-interes swiper">
			<div class="swiper-wrapper">
			
				<?php 
					while ( $sitios->have_posts() ) { $sitios->the_post();
					$sitio	= get_the_post_thumbnail_url(get_the_ID(),'full');
					include(dirname(__DIR__).'/destino.php');
				?>
				
				<div class="swiper-slide">
					
					<?php if (!$href) { ?>
						<img src="<?php echo $sitio; ?>" alt="<?php the_title(); ?>" class="img-fluid">
					<?php } else { ?> 
						<a href="<?php echo $href; ?>" <?php if (!$target) {} else { echo $target; } ?> class="d-block" <?php if(!$fancy) {} else { echo $fancy; } ?>>
							<img src="<?php echo $sitio; ?>" alt="<?php the_title(); ?>" class="img-fluid">
						</a>
					<?php } ?>
				
				</div>
				
				<?php } ?>
				
			</div>
			
		</div>
		
	</div>
</section>
<!-- /Sitios de Interés -->
	
<?php } else { } wp_reset_postdata(); ?>