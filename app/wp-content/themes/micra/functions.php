<?php

add_action( 'wp_enqueue_scripts', 'mk_add_scripts' );

function mk_add_scripts() {

    wp_enqueue_style( 'mk-font-italiana', 'https://fonts.googleapis.com/css2?family=Italiana&display=swap', array(), null );
    wp_enqueue_style( 'mk-font-montserat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,600;1,400&display=swap', array(), null );

    wp_enqueue_style( 'mk-style', get_stylesheet_directory_uri() . '/style.css', array(), time() );
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), null );

    wp_enqueue_script( 'mk-script', get_stylesheet_directory_uri() . '/script.js', array(), time(), true );
    wp_enqueue_script( 'bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array(), null, true );
    wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js', array(), null, true );
    wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', array(), null, true );
}

register_nav_menus( array(
    'head_menu'   => 'Main menu',
    'footer_menu' => 'Footer menu',
) );

function themename_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true,
    );

    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

//footer widgwt
register_sidebar( array(
    'name'          => 'Footer Widget',
    'id'            => 'footer',
    'description'   => 'Footer section',
    'before_widget' => '<div class="mk-footer-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
) );