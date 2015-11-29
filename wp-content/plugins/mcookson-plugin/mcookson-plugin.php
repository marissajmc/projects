<?php
/*
	Plugin Name: Site plugin for mcookson.com
	Description: Site specific code changes for mcookson.com
*/

function my_custom_taxonomies() {

	$labels = array(
		'name'              => _x( 'Project type', 'taxonomy general name' ),
		'singular_name'     => _x( 'Project', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Project types' ),
		'all_items'         => __( 'All types' ),
		'parent_item'       => __( 'Parent Project type' ),
		'parent_item_colon' => __( 'Parent Project type:' ),
		'edit_item'         => __( 'Edit Project type' ),
		'update_item'       => __( 'Update Project type' ),
		'add_new_item'      => __( 'Add New Project type' ),
		'new_item_name'     => __( 'New Project Name' ),
		'menu_name'         => __( 'Project types' )
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'projects' )
	);

	register_taxonomy( 'project', 'project', $args );
}

add_action( 'init', 'my_custom_taxonomies' );


function my_custom_post_types() {
	$labels = array(
		'name'               => 'Projects',
		'singular_name'      => 'Projects',
		'menu_name'          => 'Projects',
		'name_admin_bar'     => 'Projects',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Project',
		'new_item'           => 'New Project',
		'edit_item'          => 'Edit Project',
		'view_item'          => 'View Project',
		'all_items'          => 'All Projects',
		'search_items'       => 'Search Projects',
		'parent_item_colon'  => 'Parent Projects:',
		'not_found'          => 'No recipes found.',
		'not_found_in_trash' => 'No recipes found in Trash.'
	);

	$args = array( 
		'public'      => true, 
		'labels'      => $labels,
		'menu_icon'   => 'dashicons-art'
	);
    
    register_post_type( 'project', $args );
}

add_action( 'init', 'my_custom_post_types' );
add_action( 'pre_get_posts', 'my_custom_post_types' );

?>