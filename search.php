<?php 

	get_header();
	include('inc/breadcrumbs.php');
	if(isset($_GET['buscar']) && $_GET['buscar'] == "pages"){
		include('inc/search-pages.php');
	} else {
		include('inc/search-posts.php');
	}
	get_footer();
	
?>