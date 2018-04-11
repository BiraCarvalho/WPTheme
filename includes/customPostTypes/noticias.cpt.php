<?php

if ( !function_exists('WPBaseTheme__PostTypeNoticia') ) {
	function WPBaseTheme__PostTypeNoticia() {

		$labels = array(
			'name'                  => _x( 'Notícias', 'Post Type General Name', 'wpbasetheme' ),
			'singular_name'         => _x( 'Notícia', 'Post Type Singular Name', 'wpbasetheme' ),
			'menu_name'             => __( 'Notícias', 'wpbasetheme' ),
			'name_admin_bar'        => __( 'Notícia', 'wpbasetheme' ),
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
			'label'                 => __( 'noticias', 'wpbasetheme' ),
			'description'           => __( 'Postagem de Notícias', 'wpbasetheme' ),
			'labels'                => $labels,
			'supports'              => ['title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions'],		
			'taxonomies'            => [ 'category' ],
			'hierarchical'          => true,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-media-text',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => 'noticias',
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'post',
		);
		register_post_type( 'noticia', $args );
		flush_rewrite_rules();
	}
	add_action( 'init', 'WPBaseTheme__PostTypeNoticia', 0 );

}