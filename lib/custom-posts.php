<?php
namespace PCHC\CustomPosts;

// Register Custom Post Type
function resident_post_type() {

	$labels = array(
		'name'                  => 'Residents',
		'singular_name'         => 'Resident',
		'menu_name'             => 'Residents',
		'name_admin_bar'        => 'Residents',
		'archives'              => 'Resident Archives',
		'attributes'            => 'Resident Attributes',
		'parent_item_colon'     => 'Parent Resident:',
		'all_items'             => 'All Residents',
		'add_new_item'          => 'Add New Resident',
		'add_new'               => 'Add New',
		'new_item'              => 'New Resident',
		'edit_item'             => 'Edit Resident',
		'update_item'           => 'Update Resident',
		'view_item'             => 'View Resident',
		'view_items'            => 'View Residents',
		'search_items'          => 'Search Resident',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this resident',
		'items_list'            => 'Residents list',
		'items_list_navigation' => 'Residents list navigation',
		'filter_items_list'     => 'Filter residents list',
	);
	$rewrite = array(
		'slug'                  => 'resident',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => 'Resident',
		'description'           => 'Dental Residents',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'            => array( 'resident_class' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-nametag',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'residents',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'resident', $args );

}
add_action( 'init', __NAMESPACE__ . '\\resident_post_type', 0 );

// Register Custom Taxonomy
function resident_class_taxonomy() {

	$labels = array(
		'name'                       => 'Resident Classes',
		'singular_name'              => 'Resident Class',
		'menu_name'                  => 'Resident Classes',
		'all_items'                  => 'All Classes',
		'parent_item'                => 'Parent Class',
		'parent_item_colon'          => 'Parent Class:',
		'new_item_name'              => 'New Resident Class Name',
		'add_new_item'               => 'Add New Resident Class',
		'edit_item'                  => 'Edit Resident Class',
		'update_item'                => 'Update Resident Class',
		'view_item'                  => 'View Resident Class',
		'separate_items_with_commas' => 'Separate classes with commas',
		'add_or_remove_items'        => 'Add or remove Classes',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Resident Classes',
		'search_items'               => 'Search Resident Classes',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No items',
		'items_list'                 => 'Classes list',
		'items_list_navigation'      => 'Resident Classes list navigation',
	);
	$rewrite = array(
		'slug'                       => 'residents',
		'with_front'                 => true,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'resident_class', array( 'resident' ), $args );

}
add_action( 'init', __NAMESPACE__ . '\\resident_class_taxonomy', 0 );
