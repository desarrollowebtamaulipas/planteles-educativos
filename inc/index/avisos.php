<?php
			
	$argsavisos = array(
							
		'post_type' 		=> 'aviso',
		'posts_per_page'	=> -1,
		'meta_query' 		=> array('key' => '_thumbnail_id')
	);
	
	$avisos = new WP_Query( $argsavisos );
	
	if ( $avisos->have_posts() ) {
	
?>

<!-- Avisos -->
<section id="avisos" class="seccion">
	<div class="container-lg avisos">
	
		<div class="row">
		
			<div class="col-lg-12 row-titulo">
				<h2 class="titulo-row">Avisos</h2>
				<div class="borde-hr"><hr></div>
			</div>
		
		</div>
		
		<div class="row">
			
			<?php 
				while ( $avisos->have_posts() ) { $avisos->the_post();
				$aviso	= get_the_post_thumbnail_url(get_the_ID(),'full');
				include(dirname(__DIR__).'/destino.php');
			?>
		
			<div class="col-sm-6 col-md-6 col-lg-3 mt-3 mb-3 item-avisos">
				
				<?php if (!$href) { ?>
					<img src="<?php echo $aviso; ?>" alt="<?php the_title(); ?>" class="img-fluid">
				<?php } else { ?> 
					<a href="<?php echo $href; ?>" <?php if (!$target) {} else { echo $target; } ?> class="d-block" <?php if(!$fancy) {} else { echo $fancy; } ?>>
						<img src="<?php echo $aviso; ?>" alt="<?php the_title(); ?>" class="img-fluid">
					</a>
				<?php } ?>
				
			</div>
			
			<?php } ?>
		
		</div>
	
	</div>
</section>
<!-- /Avisos -->
	
<?php } else { } wp_reset_postdata(); ?>