<?php
// AHS Theme Options
if( function_exists('acf_add_options_page') ) {
    $option_page = acf_add_options_page(array(
        'page_title' 	=> 'Theme Settings',
        'menu_title' 	=> 'Theme Settings',
        'menu_slug' 	=> 'Theme-settings',
        'capability' 	=> 'edit_posts',
        'menu_icon' => 'dashicons-admin-users',
        'redirect' 	=> false,
        'position' => 2
    ));
}