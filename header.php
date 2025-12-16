<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;800;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/estilos.css" type="text/css">
	
	<?php wp_head(); ?>
	
	<style>
		:root {
			--primario: <?php the_field( 'identidad_color_primario', 'options' ); ?> !important;
			--secundario: <?php the_field( 'identidad_color_secundario', 'options' ); ?> !important;
			--primario-o: <?php the_field( 'identidad_color_primario_oscuro', 'options' ); ?> !important;
			--primario-a: <?php the_field( 'identidad_color_primario', 'options' ); ?>1A !important;
			--negro: #1D1D1B !important;
			--body: #54565B !important;
			--font: 'Encode Sans', sans-serif;
			--font-open: 'Open Sans', sans-serif;
		}
		.btn-primary {
			--bs-btn-color: #fff;
			--bs-btn-bg: <?php the_field( 'identidad_color_primario', 'options' ); ?> !important;
			--bs-btn-border-color: <?php the_field( 'identidad_color_primario', 'options' ); ?> !important;
			--bs-btn-hover-color: #fff;
			--bs-btn-hover-bg: <?php the_field( 'identidad_color_primario_oscuro', 'options' ); ?> !important;
			--bs-btn-hover-border-color: <?php the_field( 'identidad_color_primario_oscuro', 'options' ); ?> !important;
			--bs-btn-focus-shadow-rgb: 49, 132, 253;
			--bs-btn-active-color: #fff;
			--bs-btn-active-bg: <?php the_field( 'identidad_color_primario_oscuro', 'options' ); ?> !important;
			--bs-btn-active-border-color: <?php the_field( 'identidad_color_primario_oscuro', 'options' ); ?> !important;
			--bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
			--bs-btn-disabled-color: #fff;
			--bs-btn-disabled-bg: <?php the_field( 'identidad_color_primario', 'options' ); ?>1A !important;
			--bs-btn-disabled-border-color: <?php the_field( 'identidad_color_primario', 'options' ); ?>1A !important;
		}
		.alert-primary {
			--bs-alert-color: <?php the_field( 'identidad_color_primario_oscuro', 'options' ); ?> !important;
			--bs-alert-bg: <?php the_field( 'identidad_color_primario', 'options' ); ?>1A !important;
			--bs-alert-border-color: <?php the_field( 'identidad_color_primario_oscuro', 'options' ); ?> !important;
			--bs-alert-link-color: <?php the_field( 'identidad_color_primario_oscuro', 'options' ); ?> !important;
		}
	</style>

</head>
<body>

	<header id="header" class="w-100 header <?php if ( is_admin_bar_showing() ) { echo 'barra-admin'; } ?>">
		
		<div id="contenido-fix">
	
			<div id="logo-buscador">
				<div class="container-lg">
					<div class="row">
					
						<div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 logo-home d-flex align-items-center">
							<a href="<?php bloginfo('url') ?>"><img src="<?php the_field( 'identidad_logo', 'options' ); ?>" alt="<?php the_field( 'identidad_nombre', 'options' ); ?>" class="img-fluid logo"></a>
						</div>
					
						<div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 logo-home d-flex align-items-center justify-content-end">
					
							<div class="buscador-header w-100 d-none d-sm-none d-md-none d-lg-block">
								<form class="form-buscador form-group" method="get" action="<?php bloginfo('home'); ?>"> 
									<input type="hidden" name="buscar" value="pages">
									<input class="form-control input-lg" name="s" placeholder="Buscar..." autocomplete="off">
									<div class="buscador-filtro">
										<ul>
											<li><a href="" data-buscar="pages" class="selected">Buscar "<span></span>" en Secciones</a></li>
											<li><a href="" data-buscar="posts">Buscar "<span></span>" en Sala de Prensa</a></li>
										</ul>
									</div>
								</form>
							</div>
							
							<!-- Botón Menú Responsivo -->
							<div id="barras-boton" class="col-4 col-sm-5 col-md-7 d-block d-sm-block d-md-block d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#nav-right" aria-controls="nav-right">
								<form class="menu-btn-container m-0 h-100 d-flex justify-content-end">
									<label for="menu-open" id="menu-btn" class="btn-movil m-0">
										<div class="menu-bars">
											<span></span>
											<span></span>
											<span></span>
										</div>
									</label>
									</form>
							</div>
							<!-- /Botón Menú Responsivo -->
					
						</div>
					
					</div>
				</div> 
			</div>
			
			<!-- Menús -->
			<div class="d-none d-sm-none d-md-none d-lg-block menus">
				
				<div id="menu-principal">
					<div class="container-lg container-xl">
						<div class="row" id="row-cabecera">
							
							<div class="col logo-t-search pe-0">
								<a class="d-flex justify-content-center align-items-center h-100" href="#">
									<img src="<?php the_field( 'identidad_logo_blanco', 'options' ); ?>" alt="<?php the_field( 'identidad_nombre', 'options' ); ?>" class="img-fluid">
								</a>
							</div>
							
							<div class="menu-container menu-escritorio col-md-11 col-lg-11 col-xl-11">
					
								<?php 
									wp_nav_menu( array(
										'menu'			=>	'menu-principal',
										'menu_class'	=>	'menu clean-list menu-principal'
									) );
								?>
					
							</div>
							
							<div class="col logo-t-search ps-0">
								<div class="accordion d-flex justify-content-end align-items-center h-100">
									<button class="border-0 text-white bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#hd-buscador" aria-expanded="true" aria-controls="hd-buscador">
										<i class="fa-solid fa-magnifying-glass"></i> 
									</button>
								</div>
							</div>
							
						</div>
					</div>
				</div>
	
				<div id="menu-secundario">
				<div class="container-lg container-xl">
					<div class="row" id="row-cabecera-redes">
					
						<div class="menu-container menu-escritorio col-md-10 col-lg-10 col-xl-8">
							
							<?php 
								wp_nav_menu( array(
									'menu'			=>	'menu-secundario',
									'menu_class'	=>	'menu clean-list'
								) );
							?>
							
						</div>
						
						<?php 
						
							$facebook 		= 	get_field( 'redes_sociales_facebook' , 'options' );
							$x 				= 	get_field( 'redes_sociales_x' , 'options' );
							$youtube 		= 	get_field( 'redes_sociales_youtube' , 'options' );
							$instagram 		= 	get_field( 'redes_sociales_instagram' , 'options' );
							$linkedin 		= 	get_field( 'redes_sociales_linkedin' , 'options' );
							$tiktok 		= 	get_field( 'redes_sociales_tiktok' , 'options' );
							if (!$facebook & !$x & !$youtube & !$instagram & !$linkedin & !$tiktok) {} else {
						
						?>
	
						<div class="redes-sociales menu-escritorio col-md-2 col-lg-2 col-xl-4 d-none d-sm-none d-md-none d-lg-block">
						
							<ul class="clean-list d-flex justify-content-end align-items-center" id="redes-sociales">
								
								<span class="me-2 d-none d-sm-none d-md-none d-lg-none d-xl-block">Síguenos en Redes Sociales:</span>
								<?php if (!$facebook) {} else { ?><li><a href="<?php echo $facebook; ?>" target="_blank"><i class="fa-brands fa-square-facebook"></i></a></li><?php } ?>
								<?php if (!$x) {} else { ?><li><a href="<?php echo $x; ?>" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li><?php } ?>
								<?php if (!$youtube) {} else { ?><li><a href="<?php echo $youtube; ?>" target="_blank"><i class="fa-brands fa-youtube"></i></a></li><?php } ?>
								<?php if (!$instagram) {} else { ?><li><a href="<?php echo $instagram; ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a></li><?php } ?>
								<?php if (!$linkedin) {} else { ?><li><a href="<?php echo $linkedin; ?>" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li><?php } ?>        
								<?php if (!$tiktok) {} else { ?><li><a href="<?php echo $tiktok; ?>" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li><?php } ?>
								
							</ul>
						
						</div>
						
						<?php } ?>
						
					</div>
				</div>
			</div>
				
			</div>
			<!-- /Menús -->
			
			<!-- Buscador -->
			<div id="hd-buscador" class="accordion-collapse collapse shadow" aria-labelledby="buscador-fixed">
				<div class="container">
					<div class="row">
						<div class="col-12">
				
							<form class="form-buscador form-group" method="get" action=""> 
								<input type="hidden" name="buscar" value="pages">
								<input class="form-control input-lg border-0" name="s" placeholder="Buscar..." autocomplete="off">
							</form>
				
						</div>
					</div>
				</div>
			</div>
			<!-- /Buscador -->
			
			<!-- Menú Responsivo -->
			<div class="menu-responsivo">
				<div class="container-lg">
					<div class="row">
						
						<div class="offcanvas offcanvas-end w-100 d-lg-none hidden-lg" tabindex="-1" id="nav-right" aria-labelledby="offcanvasRightLabel">
							
							<div class="offcanvas-header">
								
								<a href="/" class="d-block relative">
									<img class="logo" src="<?php the_field( 'identidad_logo_blanco', 'options' ); ?>" alt="<?php the_field( 'identidad_nombre', 'options' ); ?>">
								</a>
								
								<img src="" alt="" class="">
								
								<button type="button" class="btn-close btn-close-white btn-lg" data-bs-dismiss="offcanvas" aria-label="Close" id="close-nav"></button>
								
							</div>
							
							<div class="offcanvas-body">
				
								<div id="row-menu-movil">
									<div class="hidden-md hidden-lg">
										
										<div class="buscador-header w-100 mb-3">
											<form class="form-buscador form-group" method="get" action=""> 
												<input type="hidden" name="buscar" value="pages">
												<input class="form-control input-lg" name="s" placeholder="Buscar..." autocomplete="off">
											</form>
										</div>
				
										<?php 
											wp_nav_menu( array(
												'menu'			=>	'menu-principal',
												'menu_class'	=>	'nav-menu clean-list menu-principal'
											) );
											wp_nav_menu( array(
												'menu'			=>	'menu-secundario',
												'menu_class'	=>	'nav-menu clean-list'
											) );
										?>
				
									</div>
								</div>
								
							</div>
							
							<?php if (!$facebook & !$x & !$youtube & !$instagram & !$linkedin & !$tiktok) {} else { ?>
							<div class="offcanvas-footer">
								
								<div class="row m-3">
															
									<span class="d-inline-block d-flex justify-content-center siguenos">Síguenos en Redes Sociales:</span>
									<ul class="clean-list d-flex justify-content-center align-items-center" id="redes-sociales">
										
										<?php if (!$facebook) {} else { ?><li><a href="<?php echo $facebook; ?>" target="_blank"><i class="fa-brands fa-square-facebook"></i></a></li><?php } ?>
										<?php if (!$x) {} else { ?><li><a href="<?php echo $x; ?>" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li><?php } ?>
										<?php if (!$youtube) {} else { ?><li><a href="<?php echo $youtube; ?>" target="_blank"><i class="fa-brands fa-youtube"></i></a></li><?php } ?>
										<?php if (!$instagram) {} else { ?><li><a href="<?php echo $instagram; ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a></li><?php } ?>
										<?php if (!$linkedin) {} else { ?><li><a href="<?php echo $linkedin; ?>" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li><?php } ?>        
										<?php if (!$tiktok) {} else { ?><li><a href="<?php echo $tiktok; ?>" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li><?php } ?>
										
									</ul>
									
								</div>
								
							</div>
							<?php } ?>
							
						</div>
						
					</div>
				</div>
			</div>
			<!-- /Menú Responsivo -->
		
		</div>

	</header>