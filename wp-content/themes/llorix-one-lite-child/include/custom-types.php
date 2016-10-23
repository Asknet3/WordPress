<?php

/* ===========================================
 *     			CUSTOM POST TYPES 
 * ===========================================
*/

// PORTFOLIO
function create_post_type_portfolio(){
	$labels=array(
		'name' => __('Portfolio'),
		'singular_name' => __('Portfolio'),
		'add_new' => __('Add Item'),
		'edit_item' => __('Edit Item'),
		'new_item' => __('New Item'),
		'add_new' => __('Add Item'),
		'view_item' => __('View Item'),
		'search_item' => __('Search Portfolio'),
		'not_found' => __('No items found'),
		'not_found_in_trash' => __('No items found in trash'),
		'parent_item_colon' => __('Parent Item')
	);
	$args = array(
		'labels' =>$labels,
		'public' => true,
		'has_archive'=> true,
		'pubblicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hiearchical' => false,
		'supports' => array(
			'title',
			'editor',
			'page-attributes',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		'menu_position' => 10,
		// 'show_in_menu'  =>	'edit.php?post_type=modules', // This is where we tell WordPress to add  as a submenu
		'exclude_from_search' => false
	); 
	
	register_taxonomy(   // TAXONOMY Location
        'category',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
        'portfolio',        //post type name
        array(  
            'hierarchical' => true,  
            'label' => 'Category',  //Display name
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'category', // This controls the base slug that will display before each term
                'with_front' => false // Don't display the category base before 
            )
        )  
    );  
	

	
	// Chiamo l'hook di wordpress
	register_post_type('portfolio',$args);
}
add_action('init','create_post_type_portfolio');







// SERVIZI
function create_post_type_servizi(){
	$labels=array(
		'name' => __('Servizi'),
		'singular_name' => __('Servizi'),
		'add_new' => __('Add Item'),
		'edit_item' => __('Edit Item'),
		'new_item' => __('New Item'),
		'add_new' => __('Add Item'),
		'view_item' => __('View Item'),
		'search_item' => __('Search Servizi'),
		'not_found' => __('No items found'),
		'not_found_in_trash' => __('No items found in trash'),
		'parent_item_colon' => __('Parent Item')
	);
	$args = array(
		'labels' =>$labels,
		'public' => true,
		'has_archive'=> true,
		'pubblicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hiearchical' => false,
		'supports' => array(
			'title',
			'editor',
			'page-attributes',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		'menu_position' => 11,
		// 'show_in_menu'  =>	'edit.php?post_type=modules', // This is where we tell WordPress to add  as a submenu
		'exclude_from_search' => false
	); 
	
	

	
	// Chiamo l'hook di wordpress
	register_post_type('servizi',$args);
}
add_action('init','create_post_type_servizi');









?>