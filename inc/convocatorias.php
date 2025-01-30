<div id="contenido-principal" class="sidebar seccion single">
	<div class="container-lg">
	
		<section class="row">
			
			<?php while( have_posts() ) : the_post(); ?>
			
			<article  class="col-lg-8 article-content">
				
				<div class="row-titulo">
					<h2 class="titulo-row"><?php the_title(); ?></h2>
					<div class="borde-hr"><hr></div>
				</div>
				
				<ul class="clean-list categories-date mt-3">
					<li class="me-2">
						<i class="fa-solid fa-clock color-primario me-1"></i><?php the_time('j'); ?> de <?php the_time('F'); ?> de <?php the_time('Y'); ?>
					</li>
				</ul>
				
				<div id="compartir-convocatoria" class="d-flex d-inline">
					<?php echo '<div class=compartir>Compartir esta convocatoria</div>'; echo do_shortcode('[addtoany]'); ?>
				</div>
				
				<div class="entry">
				
					<?php
						$pdf		= get_field('convocatorias_pdf');
						$interna	= get_field('convocatorias_interna');
						$externa	= get_field('convocatorias_externa');
						$info		= get_field('convocatorias_informacion');
						if( $interna ):
							foreach( $interna as $int) : 
								$intlink 	= get_permalink( $int->ID );
								$inttitle	= get_the_title( $int->ID );
							endforeach;
						endif;
					?>
					
					<?php 
						
						if (!$pdf) { } else { 
							echo do_shortcode( '[pdf url='. $pdf .']' );
							echo '<div class="d-flex justify-content-center mb-3">';
							echo '<a class="btn btn-primary btn-small me-2" target="_blank" href="'. $pdf .'">Descargar convocatoria <i class="fas fa-file-pdf"></i></a>';
							echo '</div>';
						}
						
						if (!$externa) { } else { 
							echo '<div class="d-flex justify-content-center">';
							echo '<a class="btn btn-primary btn-small" target="_blank" href="'. $externa .'">Más información <i class="fas fa-arrow-up-right-from-square"></i></a>';
							echo '</div>';
						}
						
						if (!$info) { } else { echo $info; }
					?>
				
				</div>
				
			</article>
			
			<?php endwhile; ?>
			
			<?php get_sidebar(); ?>
			
		</section>
		
	</div>
</div>