<?php

define('ACF_EARLY_ACCESS', '5');

require_once( "includes/custom/type-movies.inc.php"   );
require_once( "includes/custom/type-photos.inc.php"   );

function wpbasetheme__setup() {

    add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption' ) );
    add_theme_support( 'post-thumbnails' );
    
    add_image_size( 'banner-principal', 2000, 500, true );

} add_action( 'after_setup_theme',  'wpbasetheme__setup');

function wpbasetheme__scripts(){

    wp_enqueue_style('bootstrap',       get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css',        [], '4.0.0' );
    wp_enqueue_style('animate-css',     get_template_directory_uri() . '/assets/css/animate.min.css',                           [], '3.5.1' );
    wp_enqueue_style('hover-css',       get_template_directory_uri() . '/assets/css/hover-min.css',                             [], '2.1.1' );
    wp_enqueue_style('font-awesome',    get_template_directory_uri() . '/assets/vendor/font-awesome/css/font-awesome.min.css',  [], '4.7.0' );    
    wp_enqueue_style('main_css',        get_template_directory_uri() . '/assets/css/main.css',                                  [], '0.1.0' );

    if( is_page('home') || is_front_page() ){
        wp_enqueue_style('home_css', get_template_directory_uri() . '/assets/css/home.css', [], '0.1.0' );
    }

    wp_enqueue_script( 'popper',    get_template_directory_uri() . '/assets/vendor/popper/popper.min.js',          [],         '4.0.0', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.min.js', [],         '4.0.0', true );
    wp_enqueue_script( 'main_js',   get_template_directory_uri() . '/assets/js/main.js',                           ['jquery'], '0.1.0', true );

} add_action( 'wp_enqueue_scripts', 'wpbasetheme__scripts' );

function wpbasetheme__embed_defaults() {
    return array(
        'width'  => 750,
        'height' => 375
    );
} add_filter( 'embed_defaults', 'wpbasetheme__embed_defaults' );

function wpbasetheme__get_part( $slug ){
    require_once(  get_template_directory() . "/includes/parts/{$slug}.part.php" );
}

function wpbasetheme__get_page( $slug ){
    require_once(  get_template_directory() . "/includes/pages/{$slug}.inc.php" );
}

function wpbasetheme__get_image( $file_name ){
    return  get_template_directory_uri() . "/assets/images/{$file_name}";
}

function wpbasetheme__get_thumb_url( $post_id ){
    
    $thumb_id = get_post_thumbnail_id( $post_id );
    
    if( $thumb_id ){
        return wp_get_attachment_thumb_url( $thumb_id );
    }
    
    return wpbasetheme__get_image( 'noimage.png' );
}

function wpbasetheme__page_menu( $post_type, $id ){

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
