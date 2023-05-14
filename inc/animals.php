<?php
// Register Custom Post Type Animal
function create_animal_cpt() {

	$labels = array(
		'name' => _x( 'Animals', 'Post Type General Name', 'html2wp' ),
		'singular_name' => _x( 'Animal', 'Post Type Singular Name', 'html2wp' ),
		'menu_name' => _x( 'Animals', 'Admin Menu text', 'html2wp' ),
		'name_admin_bar' => _x( 'Animal', 'Add New on Toolbar', 'html2wp' ),
		'archives' => __( 'Animal Archives', 'html2wp' ),
		'attributes' => __( 'Animal Attributes', 'html2wp' ),
		'parent_item_colon' => __( 'Parent Animal:', 'html2wp' ),
		'all_items' => __( 'All Animals', 'html2wp' ),
		'add_new_item' => __( 'Add New Animal', 'html2wp' ),
		'add_new' => __( 'Add New', 'html2wp' ),
		'new_item' => __( 'New Animal', 'html2wp' ),
		'edit_item' => __( 'Edit Animal', 'html2wp' ),
		'update_item' => __( 'Update Animal', 'html2wp' ),
		'view_item' => __( 'View Animal', 'html2wp' ),
		'view_items' => __( 'View Animals', 'html2wp' ),
		'search_items' => __( 'Search Animal', 'html2wp' ),
		'not_found' => __( 'Not found', 'html2wp' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'html2wp' ),
		'featured_image' => __( 'Featured Image', 'html2wp' ),
		'set_featured_image' => __( 'Set featured image', 'html2wp' ),
		'remove_featured_image' => __( 'Remove featured image', 'html2wp' ),
		'use_featured_image' => __( 'Use as featured image', 'html2wp' ),
		'insert_into_item' => __( 'Insert into Animal', 'html2wp' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Animal', 'html2wp' ),
		'items_list' => __( 'Animals list', 'html2wp' ),
		'items_list_navigation' => __( 'Animals list navigation', 'html2wp' ),
		'filter_items_list' => __( 'Filter Animals list', 'html2wp' ),
	);
	$args = array(
		'label' => __( 'Animal', 'html2wp' ),
		'description' => __( '', 'html2wp' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-art',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 6,
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
	register_post_type( 'animal', $args );

}
add_action( 'init', 'create_animal_cpt', 0 );