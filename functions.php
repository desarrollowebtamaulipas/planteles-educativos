<?php

// Deshabilitar XML-RPC
	add_filter('xmlrpc_enabled', '__return_false');

// Agregar los Menus Personalizados de WordPress 3.0
	add_theme_support('menus');
	
// Agregar Fotos Destacadas al Post
	add_theme_support('post-thumbnails');
	
// Agregar Tamaños de Imagenes
	add_image_size('prensa', 850, 500, true);
	
// Darle formato de cientos a los datos duros
	add_filter('acf/format_value/name=datos_1_dato', 'fix_number', 20, 3);
	add_filter('acf/format_value/name=datos_2_dato', 'fix_number', 20, 3);
	add_filter('acf/format_value/name=datos_3_dato', 'fix_number', 20, 3);
	function fix_number($value, $post_id, $field) {
  		$value = number_format($value);
  		return $value;
	}

// Eliminando CSS adicional del personalizador
	add_action( 'customize_register', 'ft_customize_register' );
	function ft_customize_register( $wp_customize ) {
		$wp_customize->remove_control( 'custom_css' );
	}
	
// Eliminar metatag de Author de Yoast SEO
	add_filter( 'wpseo_meta_author', '__return_false' );
	
// Filtrar resultados por páginas o entrada
	function filter_search_with_get( $query ) {
		if ( !is_admin() && $query->is_main_query() ) {
		if(isset($_GET['buscar']) && $_GET['buscar'] == "pages"){
			$query->set( 'post_type', array('page') );
			$query->set( 'posts_per_page', '20' );
		} elseif(isset($_GET['buscar']) && $_GET['buscar'] == "posts"){
			$query->set( 'post_type', array('post') );
		}
	}
	return $query;
	}
	add_action( 'pre_get_posts', 'filter_search_with_get' );

// Paginación con Bootstrap
	function paginacion_bootstrap($pages = '', $range = 2) {  
		$showitems = ($range * 2) + 1;  
		global $paged;
		if(empty($paged)) $paged = 1;
		if($pages == '') {
			global $wp_query; 
			$pages = $wp_query->max_num_pages;
			if(!$pages) {
				$pages = 1;
			}
		}   
		if(1 != $pages) {
			echo '<nav id="navegation" aria-label="navigation">'; 
			echo '<ul class="pagination justify-content-center">';
			if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo '<li class="page-item"><a class="page-link" href="'.get_pagenum_link(1).'">&laquo; <span class="d-none d-md-inline">Primera</span></a></li>';
			if($paged > 1 && $showitems < $pages) echo '<li><a class="page-link" href="'.get_pagenum_link($paged - 1).'" aria-label="Anterior">&lsaquo;  <span class="d-none d-md-inline">Anterior</span></a></li>';
			for ($i=1; $i <= $pages; $i++) {
				if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
					echo ($paged == $i)? '<li class="page-item active" aria-current="page"><span class="page-link">'.$i.'</span></li>':'<li class="page-item"><a class="page-link" href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
				}
			}
			if ($paged < $pages && $showitems < $pages) echo '<li><a class="page-link" href="'.get_pagenum_link($paged + 1).'" aria-label="Siguiente"><span class="d-none d-md-inline">Siguiente</span> &rsaquo;</a></li>';
			if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo '<li class="page-item"><a class="page-link" href="'.get_pagenum_link($pages).'"><span class="d-none d-md-inline">Última</span> &raquo;</a></li>';
			echo "</ul>";
			echo "</nav>";
		}
	}


// Función para reemplazar la salida de la galería nativa de WordPress con Swiper
	function replace_gallery_with_swiper($output, $attr) {
		// Verificar si la galería está presente en la página
		if (isset($attr['ids'])) {
			// Obtener las imágenes adjuntas a la galería
			$attachment_ids = explode(',', $attr['ids']);
			
			// Iniciar la salida de la galería Swiper
			$gallery_output = '<div class="row-titulo"><h3 class="titulo-row">Galería</h3><div class="borde-hr"><hr></div></div>';
			$gallery_output .= '<div class="swiper swiper-gallery">';
			$gallery_output .= '<div class="swiper-wrapper">';
			
			// Iterar sobre cada imagen adjunta
			foreach ($attachment_ids as $attachment_id) {
				// Obtener la URL y el título de la imagen
				$image_url = wp_get_attachment_image_url($attachment_id, 'prensa');
				$image_full = wp_get_attachment_image_url($attachment_id, 'full');
				$image_title = get_the_title($attachment_id);
				
				// Agregar la imagen a la salida de la galería Swiper
				$gallery_output .= '<div class="swiper-slide">';
				$gallery_output .= '<a href="'. $image_full .'" data-fancybox="galeria"><img class="img-galeria" src="' . $image_url . '" alt="' . $image_title . '"></a>';
				$gallery_output .= '</div>';
			}
			
			// Cerrar la salida de la galería Swiper
			$gallery_output .= '</div>';
			$gallery_output .= '<div class="swiper-pagination galeria"></div>';
			$gallery_output .= '</div>';
			
			// Devolver la salida de la galería Swiper en lugar de la salida de la galería nativa
			return $gallery_output;
		} else {
			// Si no hay galería, devolver la salida original
			return $output;
		}
	}

// Reemplazar la salida de la galería nativa con Swiper
	add_filter('post_gallery', 'replace_gallery_with_swiper', 10, 2);

?>