<?php
function main_script_enqueue() {
    wp_enqueue_style('mainStyle', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'main_script_enqueue');


function mainmenu_theme_setup() {
    add_theme_support('menus');

    register_nav_menu('primary', 'Primary header navigation');
}
add_action('init', 'mainmenu_theme_setup');