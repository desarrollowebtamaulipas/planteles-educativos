<?php 
	
	/* Template Name: Sin sidebar */
	get_header();
	include(dirname(__DIR__).'/inc/breadcrumbs.php');
?>

<div id="contenido-principal" class="sidebar seccion page">
	<div class="container-lg">
	
		<section class="row">
			
			<?php while( have_posts() ) : the_post(); ?>
			
			<article  class="col-lg-12 article-content">
				
				<div class="row-titulo">
					<h1 class="titulo-row"><?php the_title(); ?></h1>
					<div class="borde-hr"><hr></div>
				</div>
				
				<?php if ( shortcode_exists('addtoany') ) : ?>
				
					<div id="compartir-nota" class="d-flex d-inline">
						<?php echo '<div class=compartir>Compartir</div>'; echo do_shortcode('[addtoany]'); ?>
					</div>
					
				<?php endif; ?>
				
				<div class="entry">
				
					<?php the_content(); ?>
					
				</div>
				
			</article>
			
			<?php endwhile; ?>
			
		</section>
		
	</div>
</div>

<?php get_footer(); ?>