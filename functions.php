<?php

define( 'ACF_LITE', false );

load_theme_textdomain( 'rb', get_template_directory() . '/lang' );

require_once( "includes/custom/type-movies.inc.php"   );
require_once( "includes/custom/type-photos.inc.php"   );

require_once( "vendor/advanced-custom-fields/acf.php" );
require_once( "includes/custom/acf-fields.inc.php"    );

function rosaberardo__setup() {

	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
	add_theme_support( 'post-thumbnails' );
	//add_image_size( 'banner-background', 2048, 700, true );

} add_action( 'after_setup_theme',  'rosaberardo__setup');


function rosaberardo__scripts(){

	wp_enqueue_style(  'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), '3.3.7' );
	wp_enqueue_style(  'animate_css',  get_template_directory_uri() . '/assets/css/animate.css', array(), '3.5.2' );
	wp_enqueue_style(  'main_css',  get_template_directory_uri() . '/assets/css/main.css', array(), '0.1.0' );

	if( is_page( 'home' ) || is_front_page() ){
		wp_enqueue_style(  'home_css', get_template_directory_uri() . '/assets/css/home.css', array(), '0.1.0' );
	}

	wp_enqueue_script( 'fontawesome', '//use.fontawesome.com/0c86b9af16.js', array(), '4.7.0' );
	wp_enqueue_script( 'bootstrap',   get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.min.js', array(), '0.1.0', true );
	wp_enqueue_script( 'main_js',     get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '0.1.0', true );

} add_action( 'wp_enqueue_scripts', 'rosaberardo__scripts' );


add_filter( 'embed_defaults', 'rosaberardo__embed_defaults' );
function rosaberardo__embed_defaults() {
    return array(
        'width'  => 750,
        'height' => 375
    );
}



function rosaberardo__get_part( $slug ){
	require_once(  get_template_directory() . "/includes/parts/{$slug}.part.php" );
}

function rosaberardo__get_page( $slug ){
	require_once(  get_template_directory() . "/includes/pages/{$slug}.inc.php" );
}

function rosaberardo__get_image( $file_name ){
	return  get_template_directory_uri() . "/assets/images/{$file_name}";
}

function rosaberardo__get_thumb_url( $post_id ){
	$thumb_id = get_post_thumbnail_id( $post_id );
	if( $thumb_id ){
	return wp_get_attachment_thumb_url( $thumb_id );
	}
	return rosaberardo__get_image( 'noimage.png' );
}

function rosaberardo__get_page_content( $page_id ){

	global $wpdb;

	$page_id = (int)$page_id;

	$query = "SELECT *
							FROM {$wpdb->posts} AS posts
						 WHERE post_status = 'publish'
							 AND post_type = 'page'
							 AND ID = {$page_id}
					ORDER BY menu_order, post_title";

	return $wpdb->get_row( $query, OBJECT );

}

function rosaberardo__get_cat_posts( $category_id ){

	global $wpdb;

	$category_id = (int)$category_id;

	$query = "SELECT *
							FROM {$wpdb->posts} AS posts
							JOIN {$wpdb->term_relationships} AS relations ON ID = object_id
						WHERE post_status = 'publish'
							AND post_type = 'page'
					ORDER BY menu_order, post_title";

	$prepared = $wpdb->prepare( $query, $category_id );

	return $wpdb->get_row( $query, OBJECT );

}

function rosaberardo__page_menu( $post_type, $id ){

	$return = [];

	$page_menu = get_posts( array(
			'posts_per_page' => -1,
			'post_type' => $post_type,
			'orderby'   => 'title',
			'order'     => 'ASC'
	) );

	if ( $page_menu ) {
			foreach ( $page_menu as $post ){
				$return[$post->ID]['permalink'] = get_permalink( $post->ID );
				$return[$post->ID]['title']     = get_the_title( $post->ID );
				$return[$post->ID]['active']    = $post->ID === $id ? true : false;
			};
	};

	wp_reset_postdata();

	return $return;

}
