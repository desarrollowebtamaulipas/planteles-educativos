<?php

	$destino = get_field('destino_tipo');
	if ( $destino == 'nolink' ) { $href = ''; $target = ''; $fancy = ''; }
	elseif ( $destino == 'interno' ) { $href = get_field('destino_interior'); $target = ''; $fancy = ''; }
	elseif ( $destino == 'externo' ) { $href = get_field('destino_link'); $target = 'target="_blank"'; $fancy = ''; }
	elseif ( $destino == 'pdf' ) { $href = get_field('destino_pdf'); $target = 'target="_blank"'; $fancy = ''; }
	elseif ( $destino == 'fancybox' ) { $href = get_field('destino_imagen'); $target = ''; $fancy = 'data-fancybox'; }
	
?>