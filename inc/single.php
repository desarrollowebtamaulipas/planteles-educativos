<div id="contenido-principal" class="sidebar seccion single">
	<div class="container-lg">
	
		<section class="row">
			
			<?php while( have_posts() ) : the_post(); ?>
			
			<article  class="col-lg-8 article-content">
				
				<?php the_post_thumbnail( 'prensa', array( 'alt' => get_the_title(), 'class' => 'img-fluid principal' ) ); ?>
				
				<ul class="clean-list categories-date mt-3">
					<li class="me-2">
						<i class="fa-solid fa-clock color-primario me-1"></i><?php the_time('j'); ?> de <?php the_time('F'); ?> de <?php the_time('Y'); ?>
					</li>
				</ul>
				
				<div class="row-titulo">
					<h1 class="titulo-row"><?php the_title(); ?></h1>
					<div class="borde-hr"><hr></div>
				</div>
				
				<div id="compartir-nota" class="d-flex d-inline">
					<?php echo '<div class=compartir>Compartir</div>'; echo do_shortcode('[addtoany]'); ?>
				</div>
				
				<div class="entry">
				
					<?php the_content(); ?>
					
					<?php 
						$image_ids = get_field('extras_galeria');
						if( $image_ids ) {
							$images_string = implode( ',', $image_ids );
							$shortcode = sprintf( '[' . 'gallery ids="%s"]', esc_attr($images_string) );
							echo do_shortcode( $shortcode );
						}
					?>
				
				</div>
				
			</article>
			
			<?php endwhile; ?>
			
			<?php get_sidebar(); ?>
			
		</section>
		
	</div>
</div>