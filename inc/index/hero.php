<!-- Hero -->
<section class="splash-home seccion">
	<div class="container-lg">
		<div class="row">
			
			<?php
			
				$argsimagenportada = array(
										
					'post_type' 		=> 'imagen-portada',
					'posts_per_page'	=> -1,
					'meta_query' 		=> array('key' => '_thumbnail_id')
				);
				
				$imagenportada = new WP_Query( $argsimagenportada );
				
				if ( $imagenportada->have_posts() ) {
					if ( $imagenportada->found_posts == 1 ) {
						
						while ($imagenportada->have_posts()) { $imagenportada->the_post(); 
						$hero = get_the_post_thumbnail_url(get_the_ID(),'full');
						
						include(dirname(__DIR__).'/destino.php');
						
						if (!$href) { ?>
						
							<div class="col-12">
								<img src="<?php echo $hero; ?>" alt="<?php the_title(); ?>" class="img-fluid image-splash">
							</div>
						
						<?php } else { ?>
						
							<a href="<?php echo $href; ?>" <?php if (!$target) {} else { echo $target; } ?> class="d-flex align-items-center justify-content-center col-lg-12" <?php if(!$fancy) {} else { echo $fancy; } ?>>
								<img src="<?php echo $hero; ?>" alt="<?php the_title(); ?>" class="img-fluid image-splash">
							</a>	
							
						<?php } } } else { ?>
							
						<div class="hero swiper">
							<div class="swiper-wrapper">
						
								<?php 
									while ( $imagenportada->have_posts() ) { $imagenportada->the_post();
									$hero = get_the_post_thumbnail_url(get_the_ID(),'full');
									include(dirname(__DIR__).'/destino.php');
								?>
									
									<div class="swiper-slide">
										
										<?php if (!$href) { ?>
																
											<img src="<?php echo $hero; ?>" alt="<?php the_title(); ?>" class="img-fluid image-splash">
										
										<?php } else { ?>
										
										<a href="<?php echo $href; ?>" <?php if (!$target) {} else { echo $target; } ?> class="d-flex align-items-center justify-content-center col-lg-12" <?php if(!$fancy) {} else { echo $fancy; } ?>>
											<img src="<?php echo $hero; ?>" alt="<?php the_title(); ?>" class="img-fluid image-splash">
										</a>
										
										<?php } ?>
										
									</div>
									
								<?php } ?>
							
							</div>
							<div class="swiper-pagination"></div>
						</div>
						
					<?php }
					
				} else { } wp_reset_postdata();
				
			?>
		
		</div>
	</div>
</section>
<!-- /Hero -->