<?php
// Register Custom Post Type Newspaper
function create_newspaper_cpt() {

	$labels = array(
		'name' => _x( 'Newspapers', 'Post Type General Name', 'html2wp' ),
		'singular_name' => _x( 'Newspaper', 'Post Type Singular Name', 'html2wp' ),
		'menu_name' => _x( 'Newspapers', 'Admin Menu text', 'html2wp' ),
		'name_admin_bar' => _x( 'Newspaper', 'Add New on Toolbar', 'html2wp' ),
		'archives' => __( 'Newspaper Archives', 'html2wp' ),
		'attributes' => __( 'Newspaper Attributes', 'html2wp' ),
		'parent_item_colon' => __( 'Parent Newspaper:', 'html2wp' ),
		'all_items' => __( 'All Newspapers', 'html2wp' ),
		'add_new_item' => __( 'Add New Newspaper', 'html2wp' ),
		'add_new' => __( 'Add New', 'html2wp' ),
		'new_item' => __( 'New Newspaper', 'html2wp' ),
		'edit_item' => __( 'Edit Newspaper', 'html2wp' ),
		'update_item' => __( 'Update Newspaper', 'html2wp' ),
		'view_item' => __( 'View Newspaper', 'html2wp' ),
		'view_items' => __( 'View Newspapers', 'html2wp' ),
		'search_items' => __( 'Search Newspaper', 'html2wp' ),
		'not_found' => __( 'Not found', 'html2wp' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'html2wp' ),
		'featured_image' => __( 'Featured Image', 'html2wp' ),
		'set_featured_image' => __( 'Set featured image', 'html2wp' ),
		'remove_featured_image' => __( 'Remove featured image', 'html2wp' ),
		'use_featured_image' => __( 'Use as featured image', 'html2wp' ),
		'insert_into_item' => __( 'Insert into Newspaper', 'html2wp' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Newspaper', 'html2wp' ),
		'items_list' => __( 'Newspapers list', 'html2wp' ),
		'items_list_navigation' => __( 'Newspapers list navigation', 'html2wp' ),
		'filter_items_list' => __( 'Filter Newspapers list', 'html2wp' ),
	);
	$args = array(
		'label' => __( 'Newspaper', 'html2wp' ),
		'description' => __( '', 'html2wp' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-art',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 7,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'newspaper', $args );

}
add_action( 'init', 'create_newspaper_cpt', 0 );