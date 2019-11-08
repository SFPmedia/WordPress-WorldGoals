<?php
function main_script_enqueue() {
    wp_enqueue_style('mainStyle', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'main_script_enqueue');


function mainmenu_theme_setup() {
    add_theme_support('menus');

    register_nav_menu('primary', 'Primary header navigation');
    register_nav_menu('secondary', 'secondary header navigation');
}
add_action('init', 'mainmenu_theme_setup');

function sc_custom_header_setup() {
    $defaults = array(
        // Default Header Image to display
        'default-image'         => $header_images,
        // Display the header text along with the image
        'header-text'           => true,
        // Header text color default
        'default-text-color'        => '000',
        // Header image width (in pixels)
        'width'             => 1920,
        // Header image height (in pixels)
        'height'            => 700,
        // Header image random rotation default
        'random-default'        => false,
        // Enable upload of image file in admin 
        'uploads'       => false,
        // function to be called in theme head section
        'wp-head-callback'      => 'wphead_cb',
        //  function to be called in preview page head section
        'admin-head-callback'       => 'adminhead_cb',
        // function to produce preview markup in the admin screen
        'admin-preview-callback'    => 'adminpreview_cb',
        );
    add_theme_support( 'custom-header', $args );

    $header_images = array(
        'sunset' => array(
        'url'           => get_template_directory_uri() . '/img/cover-default.jpg',
        'thumbnail_url' => get_template_directory_uri() . '/img/cover-default.jpg',
        'description'   => 'Cover',
        ), 
    );
    register_default_headers( $header_images );
}
add_action( 'after_setup_theme', 'sc_custom_header_setup' );


