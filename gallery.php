<?php
// Register Custom Post Type
function gallary_post_type()
{

	$labels = array(
		'name'                  => _x('gallery', 'Post Type General Name', 'finelinetaping'),
		'singular_name'         => _x('gallary', 'Post Type Singular Name', 'finelinetaping'),
		'menu_name'             => __('Gallery', 'finelinetaping'),
		'name_admin_bar'        => __('Gallery', 'finelinetaping'),
		'archives'              => __('Gallery Archives', 'finelinetaping'),
		'attributes'            => __('Gallery Attributes', 'finelinetaping'),
		'parent_item_colon'     => __('Parent Gallary:', 'finelinetaping'),
		'all_items'             => __('All Gallery', 'finelinetaping'),
		'add_new_item'          => __('Add New Gallery', 'finelinetaping'),
		'add_new'               => __('Add New', 'finelinetaping'),
		'new_item'              => __('New Item', 'finelinetaping'),
		'edit_item'             => __('Edit Item', 'finelinetaping'),
		'update_item'           => __('Update Item', 'finelinetaping'),
		'view_item'             => __('View Item', 'finelinetaping'),
		'view_items'            => __('View Items', 'finelinetaping'),
		'search_items'          => __('Search Item', 'finelinetaping'),
		'not_found'             => __('Not found', 'finelinetaping'),
		'not_found_in_trash'    => __('Not found in Trash', 'finelinetaping'),
		'featured_image'        => __('Featured Image', 'finelinetaping'),
		'set_featured_image'    => __('Set featured image', 'finelinetaping'),
		'remove_featured_image' => __('Remove featured image', 'finelinetaping'),
		'use_featured_image'    => __('Use as featured image', 'finelinetaping'),
		'insert_into_item'      => __('Insert into item', 'finelinetaping'),
		'uploaded_to_this_item' => __('Uploaded to this Gallery', 'finelinetaping'),
		'items_list'            => __('Gallery list', 'finelinetaping'),
		'items_list_navigation' => __('Gallery list navigation', 'finelinetaping'),
		'filter_items_list'     => __('Filter Gallery list', 'finelinetaping'),
	);
	$args = array(
		'label'                 => __('gallary', 'finelinetaping'),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-gallery',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'taxonomies'          => array('category'),
	);
	register_post_type('gallery', $args);
}
add_action('init', 'gallary_post_type', 0);



// Register Custom Post Type
function projects_post_type()
{

	$labels = array(
		'name'                  => _x('project', 'Post Type General Name', 'finelinetaping'),
		'singular_name'         => _x('projects', 'Post Type Singular Name', 'finelinetaping'),
		'menu_name'             => __('Project', 'finelinetaping'),
		'name_admin_bar'        => __('Project', 'finelinetaping'),
		'archives'              => __('Project Archives', 'finelinetaping'),
		'attributes'            => __('Project Attributes', 'finelinetaping'),
		'parent_item_colon'     => __('Parent Projects:', 'finelinetaping'),
		'all_items'             => __('All Project', 'finelinetaping'),
		'add_new_item'          => __('Add New Project', 'finelinetaping'),
		'add_new'               => __('Add New', 'finelinetaping'),
		'new_item'              => __('New Item', 'finelinetaping'),
		'edit_item'             => __('Edit Item', 'finelinetaping'),
		'update_item'           => __('Update Item', 'finelinetaping'),
		'view_item'             => __('View Item', 'finelinetaping'),
		'view_items'            => __('View Items', 'finelinetaping'),
		'search_items'          => __('Search Item', 'finelinetaping'),
		'not_found'             => __('Not found', 'finelinetaping'),
		'not_found_in_trash'    => __('Not found in Trash', 'finelinetaping'),
		'featured_image'        => __('Featured Image', 'finelinetaping'),
		'set_featured_image'    => __('Set featured image', 'finelinetaping'),
		'remove_featured_image' => __('Remove featured image', 'finelinetaping'),
		'use_featured_image'    => __('Use as featured image', 'finelinetaping'),
		'insert_into_item'      => __('Insert into item', 'finelinetaping'),
		'uploaded_to_this_item' => __('Uploaded to this Project', 'finelinetaping'),
		'items_list'            => __('Project list', 'finelinetaping'),
		'items_list_navigation' => __('Project list navigation', 'finelinetaping'),
		'filter_items_list'     => __('Filter Project list', 'finelinetaping'),
	);
	$args = array(
		'label'                 => __('projects', 'finelinetaping'),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'menu_icon'             => 'dashicons-screenoptions',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'taxonomies'          => array('category'),
	);
	register_post_type('project', $args);
}
add_action('init', 'projects_post_type');
