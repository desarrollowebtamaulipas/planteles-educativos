<!-- Multimedia -->
<section id="multimedia">
	<div class="container-lg">
		
		<div class="row g-0 d-flex align-items-center justify-content-center">
			
			<div class="col-lg-8 video-youtube">
				<div class="embed-container">
					<?php the_field('multimedia_video', 'options'); ?>
				</div>
			</div>
			
			<div class="col-lg-4 contacto d-flex align-items-center">
				
				<div class="info bg-primario">
					
					<h4><?php the_field('identidad_nombre', 'options'); ?></h4>
					<p><?php the_field('contacto_direccion', 'options'); ?></p>
					<p>Tel: <?php the_field('contacto_telefono', 'options'); ?></p>
					
					<?php if( !get_field('contacto_contacto', 'options') ) {} else { ?>
						<a href="<?php the_field('contacto_contacto', 'options') ?>" class="btn btn-md px-5 text-white bg-primario-o fw-light">Contacto</a>
					<?php } ?>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
</section>
<!-- /Multimedia -->