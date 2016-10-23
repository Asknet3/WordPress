<?php
	
	// START  Variabili
	define("GIUCRI_THEME_VERSION", date('YmdHi')); // Setta la versione usando la data corrente (da usare ad esempio per l'ggiornamento CSS/JS)
	// END Variabili
	
	
	
	// Custom Content Types
	require get_stylesheet_directory() . '/include/custom-types.php';
	
	
	
	// Include lo style.css personale (del tema GiuCri) ed eredita lo style.css del template padre (llorix-one-lite)
	function my_theme_enqueue_styles() {
	    $parent_style = 'parent-style'; // eredita lo style.css del template padre (llorix-one-lite)
	
	    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	    wp_enqueue_style( 'child-style',
	        get_stylesheet_directory_uri() . '/style.css',
	        array( $parent_style ),
	        wp_get_theme()->get('Version')
	    );
	}
	add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


	
	
	
	
	// START Controlla che una stringa non sia NULL o VUOTA
	function IsNullOrEmptyString($question){
	    return (!isset($question) || trim($question)==='');
	}
	// END Controlla che una stringa non sia NULL o VUOTA







	// START Estrae tutti gli elementi nel Portfolio
	function GetPortfolio(){
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			
			$portfolio = new WP_Query( 
											array(
													'post_type' => 'portfolio', 
													'post_status' => 'publish', 
													'posts_per_page' => -1, 
											)
									);
			wp_reset_query();
			
			return $portfolio -> posts;
	}
	// END Estrae tutti gli Spettacoli pubblicati  -->
?>