<?php

if ( !function_exists('wpbasetheme_post_type_movies') ) {

// Register Custom Post Type
function wpbasetheme_post_type_movies() {

	$labels = array(
		'name'                  => _x( 'Filmes', 'Post Type General Name', 'wpbasetheme' ),
		'singular_name'         => _x( 'Filme', 'Post Type Singular Name', 'wpbasetheme' ),
		'menu_name'             => __( 'Filmes', 'wpbasetheme' ),
		'name_admin_bar'        => __( 'Filme', 'wpbasetheme' ),
		'archives'              => __( 'Item Archives', 'wpbasetheme' ),
		'attributes'            => __( 'Item Attributes', 'wpbasetheme' ),
		'parent_item_colon'     => __( 'Parent Item:', 'wpbasetheme' ),
		'all_items'             => __( 'Todos os posts', 'wpbasetheme' ),
		'add_new_item'          => __( 'Add New Item', 'wpbasetheme' ),
		'add_new'               => __( 'Adcionar novo', 'wpbasetheme' ),
		'new_item'              => __( 'Novo', 'wpbasetheme' ),
		'edit_item'             => __( 'Edit Item', 'wpbasetheme' ),
		'update_item'           => __( 'Update Item', 'wpbasetheme' ),
		'view_item'             => __( 'View Item', 'wpbasetheme' ),
		'view_items'            => __( 'View Items', 'wpbasetheme' ),
		'search_items'          => __( 'Search Item', 'wpbasetheme' ),
		'not_found'             => __( 'Not found', 'wpbasetheme' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'wpbasetheme' ),
		'featured_image'        => __( 'Imagem destacada', 'wpbasetheme' ),
		'set_featured_image'    => __( 'Set featured image', 'wpbasetheme' ),
		'remove_featured_image' => __( 'Remove featured image', 'wpbasetheme' ),
		'use_featured_image'    => __( 'Use as featured image', 'wpbasetheme' ),
		'insert_into_item'      => __( 'Insert into item', 'wpbasetheme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'wpbasetheme' ),
		'items_list'            => __( 'Items list', 'wpbasetheme' ),
		'items_list_navigation' => __( 'Items list navigation', 'wpbasetheme' ),
		'filter_items_list'     => __( 'Filter items list', 'wpbasetheme' ),
	);
	$args = array(
		'label'                 => __( 'Filme', 'wpbasetheme' ),
		'description'           => __( 'Postagem de filmes', 'wpbasetheme' ),
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

add_action( 'init', 'wpbasetheme_post_type_movies', 0 );

}