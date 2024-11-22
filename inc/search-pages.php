<div id="contenido-principal" class="sin-sidebar seccion">
	<div class="container-lg">

		<div class="row">
			
			<div class="col-lg-8">
			
				<div class="row-titulo">
					<h2 class="titulo-row">Resultado de búsqueda para <i><?php echo $_GET['s'] ?></i></h2>
					<div class="borde-hr"><hr></div>
				</div>
		
				<div id="resultados" class="row items-resultados">
					
					<ul>
						<?php while( have_posts() ) : the_post(); ?>
					  	
							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?><br><small><i><?php the_permalink(); ?></i></small></a></li>
					  	
						<?php endwhile; if(!have_posts()) : ?>
						
							<p>No se encontraron resultados para su búsqueda</p>
							
						<?php endif; wp_reset_query(); ?>
					</ul>
				
				</div>
			
			</div>
			
			<?php get_sidebar(); ?>
			
		</div>
		
		
		<?php echo paginacion_bootstrap(); ?>
	
	</div>
</div>