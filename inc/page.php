<div id="contenido-principal" class="sidebar seccion page">
	<div class="container-lg">
	
		<section class="row">
			
			<?php while( have_posts() ) : the_post(); ?>
			
			<article  class="col-lg-8 article-content">
				
				<?php the_post_thumbnail( 'prensa', array( 'alt' => get_the_title(), 'class' => 'img-fluid principal' ) ); ?>
				
				<div class="row-titulo">
					<h1 class="titulo-row"><?php the_title(); ?></h1>
					<div class="borde-hr"><hr></div>
				</div>
				
				<div id="compartir-nota" class="d-flex d-inline">
					<?php echo '<div class=compartir>Compartir</div>'; echo do_shortcode('[addtoany]'); ?>
				</div>
				
				<div class="entry">
				
					<?php the_content(); ?>
				
				</div>
				
			</article>
			
			<?php endwhile; ?>
			
			<?php get_sidebar(); ?>
			
		</section>
		
	</div>
</div>