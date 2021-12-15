<?php // Our custom post type function
  
  
function create_posttype() {
	
	register_post_type( 'projecten',

		array(
			'labels' => array(
				'name'                  => __( 'Projecten' ),
				'singular_name'         => __( 'Project' ),
	    		'all_items'             => __( 'Alle projecten' ),
	    		'add_new_item'          => __( 'Nieuw project toevoegen' ),
	    		'new_item'              => __( 'Nieuw project' ),
	        	'add_new'               => __( 'Nieuw project' ),
	    		'edit_item'             => __( 'Bewerk project' ),
	    		'update_item'           => __( 'Update project' ),
	    		'view_item'             => __( 'Bekijk project' ),
	    		'search_items'          => __( 'Zoek project' ),
			),
			'menu_icon'           		=> 'dashicons-id-alt',
			'public' 					=> true,
			'show_in_rest' 				=> true,
			'has_archive'             	=> false,
			'supports'                	=> array( 'title', 'editor', 'thumbnail' ),
			'rewrite' 					=> array( 'slug' => 'projecten/%project_categorie%', 
													'with_front' 	=> false ),
		)
	);
	
}

add_action( 'init', 'create_posttype' ); 

?>