<?php 
	
	/* Template Name: Listado sub-páginas */
	get_header();
	include(dirname(__DIR__).'/inc/breadcrumbs.php');
?>

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
				
				<?php if ( shortcode_exists('addtoany') ) : ?>
				
					<div id="compartir-nota" class="d-flex d-inline">
						<?php echo '<div class=compartir>Compartir</div>'; echo do_shortcode('[addtoany]'); ?>
					</div>
					
				<?php endif; ?>
				
				<div class="entry">
				
					<?php the_content(); ?>
					
					<?php
					
						// Obtener las sub-páginas
						$argschilds = array(
							'post_type'      => 'page',
							'posts_per_page' => -1,
							'post_parent'    => get_the_ID(),
							'orderby'        => 'menu_order',
							'order'          => 'ASC',
						);
						$child_pages = new WP_Query($argschilds);
						
						if ( $child_pages->have_posts() ) :
							
							echo '<h4>Información relacionada</h4>';
							
							echo '<table class="table">';
							echo '<thead><tr><td>Sección</td><td style="width:170px"></td></tr></thead><tbody>';
							
							while ( $child_pages->have_posts() ) : $child_pages->the_post();
								echo '<tr>';
								echo '<td>' . get_the_title() . '</td>';
								echo '<td style="text-align: right;"><a href="' . get_permalink() . '" class="btn btn-primary btn-sm ">Ver información <i class="fas fa-circle-chevron-right"></i></a></td>';
								echo '</tr>';
							endwhile;
					
							echo '</tbody></table>';
							
							wp_reset_postdata();
						
						endif;
						
					?>
				
				</div>
				
			</article>
			
			<?php endwhile; ?>
			
			<?php get_sidebar(); ?>
			
		</section>
		
	</div>
</div>

<?php get_footer(); ?>