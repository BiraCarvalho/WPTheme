<?php

if ( !function_exists('rosaberardo_post_type_movies') ) {

// Register Custom Post Type
function rosaberardo_post_type_movies() {

	$labels = array(
		'name'                  => _x( 'Filmes', 'Post Type General Name', 'rosaberardo' ),
		'singular_name'         => _x( 'Filme', 'Post Type Singular Name', 'rosaberardo' ),
		'menu_name'             => __( 'Filmes', 'rosaberardo' ),
		'name_admin_bar'        => __( 'Filme', 'rosaberardo' ),
		'archives'              => __( 'Item Archives', 'rosaberardo' ),
		'attributes'            => __( 'Item Attributes', 'rosaberardo' ),
		'parent_item_colon'     => __( 'Parent Item:', 'rosaberardo' ),
		'all_items'             => __( 'Todos os posts', 'rosaberardo' ),
		'add_new_item'          => __( 'Add New Item', 'rosaberardo' ),
		'add_new'               => __( 'Adcionar novo', 'rosaberardo' ),
		'new_item'              => __( 'Novo', 'rosaberardo' ),
		'edit_item'             => __( 'Edit Item', 'rosaberardo' ),
		'update_item'           => __( 'Update Item', 'rosaberardo' ),
		'view_item'             => __( 'View Item', 'rosaberardo' ),
		'view_items'            => __( 'View Items', 'rosaberardo' ),
		'search_items'          => __( 'Search Item', 'rosaberardo' ),
		'not_found'             => __( 'Not found', 'rosaberardo' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'rosaberardo' ),
		'featured_image'        => __( 'Imagem destacada', 'rosaberardo' ),
		'set_featured_image'    => __( 'Set featured image', 'rosaberardo' ),
		'remove_featured_image' => __( 'Remove featured image', 'rosaberardo' ),
		'use_featured_image'    => __( 'Use as featured image', 'rosaberardo' ),
		'insert_into_item'      => __( 'Insert into item', 'rosaberardo' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'rosaberardo' ),
		'items_list'            => __( 'Items list', 'rosaberardo' ),
		'items_list_navigation' => __( 'Items list navigation', 'rosaberardo' ),
		'filter_items_list'     => __( 'Filter items list', 'rosaberardo' ),
	);
	$args = array(
		'label'                 => __( 'Filme', 'rosaberardo' ),
		'description'           => __( 'Postagem de filmes', 'rosaberardo' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions' ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-video-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'movies', $args );

}

add_action( 'init', 'rosaberardo_post_type_movies', 0 );

}