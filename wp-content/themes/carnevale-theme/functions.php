<?php

function carnevale_style_scripts() {
    wp_enqueue_style( 'styles-my', get_stylesheet_directory_uri() . '/styles/my_styles.css' );

    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/scripts/test.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script-scroll', get_template_directory_uri() . '/scripts/script-jq.js', array(), '1.0.0', true );


    if ( is_page('home') ) {
        wp_enqueue_style( 'home-page', get_stylesheet_directory_uri() . '/styles/pages/home-page.css' );
    }
    if ( is_page('services-page') ) {
        wp_enqueue_style( 'services-page', get_stylesheet_directory_uri() . '/styles/pages/services.css', array(), '1.0' );

    }
    if ( is_singular('services') ) {
        wp_enqueue_style( 'service-detail', get_stylesheet_directory_uri() . '/styles/pages/service-detail.css' );
    }
    if ( is_singular('case') ) {
        wp_enqueue_style( 'case-detail', get_stylesheet_directory_uri() . '/styles/pages/case-study-detail.css' );
    }
    if ( is_page('studio') ) {
        wp_enqueue_style( 'studio', get_stylesheet_directory_uri() . '/styles/pages/studio.css' );

    }
    if ( is_page('case-studies') ) {
        wp_enqueue_style( 'case-studio', get_stylesheet_directory_uri() . '/styles/pages/case-studies.css' );
    }
    if ( is_page('contact') ) {
        wp_enqueue_style( 'contact', get_stylesheet_directory_uri() . '/styles/pages/contact.css' );
        wp_enqueue_script( 'script-contact', get_template_directory_uri() . '/scripts/contact-jq.js', array(), '1.0.0', true );

    }



    wp_enqueue_style( 'style-name', get_stylesheet_directory_uri() . '/styles/style.css' );



}
add_action( 'wp_enqueue_scripts', 'carnevale_style_scripts' );

function add_type_attribute($tag, $handle, $src) {
    if ( 'services' !== $handle ) {
        return $tag;
    }
    // change the script tag by adding type="module" and return it.
    $tag = '<script type="module" src="' . esc_url( $src ) . '"></script>';
    return $tag;
}

remove_filter('get_the_excerpt', 'wp_trim_excerpt');

if(function_exists('register_nav_menus')){
    register_nav_menus(
        array( // создаём любое количество областей
            'head_menu' => 'header menu', // 'имя' => 'описание'
            'foot_menu_first' => 'footer menu 1',
            'foot_menu_second' => 'footer menu 2'
        )
    );
}


add_filter( 'wpcf7_autop_or_not', '__return_false' );
add_action('init', 'my_custom_init');
add_theme_support( 'post-thumbnails' );
remove_filter( 'the_content', 'wpautop' );
remove_filter('acf_the_content', 'wpautop');




function allow_type($type) {

    $type['svg'] = 'image/svg+xml';
    return $type;
}
add_filter('upload_mimes', 'allow_type');


function my_custom_init()
{
    register_post_type('services', array(
        'labels' => array(
            'name' => 'Services',
            'singular_name' => 'Services',
            'add_new' => 'Add',
            'add_new_item' => 'Add',
            'edit_item' => 'Edit',
            'new_item' => 'New',
            'view_item' => 'Look',
            'search_items' => 'Search',
            'not_found' => 'Not found',
            'not_found_in_trash' => 'Not found in the cart',
            'parent_item_colon' => '',
            'menu_name' => 'Services'

        ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-format-aside',
        'supports' => array('title', 'excerpt', 'thumbnail', 'editor', 'page-attributes', 'post-formats'),
        'taxonomies' => array('category'),
    ));
    register_post_type('case', array(
        'labels' => array(
            'name' => 'Case',
            'singular_name' => 'Case',
            'add_new' => 'Add',
            'add_new_item' => 'Add',
            'edit_item' => 'Edit',
            'new_item' => 'New',
            'view_item' => 'Look',
            'search_items' => 'Search',
            'not_found' => 'Not found',
            'not_found_in_trash' => 'Not found in the cart',
            'parent_item_colon' => '',
            'menu_name' => 'Cases'

        ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-format-aside',
        'supports' => array('title', 'excerpt', 'thumbnail', 'editor', 'page-attributes', 'post-formats'),
        'taxonomies' => array('category'),
    ));
}