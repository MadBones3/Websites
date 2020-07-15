<?php
// BC Theme Options
    if( function_exists('acf_add_options_page') ) {
        $option_page = acf_add_options_page(array(
            'page_title' 	=> 'Theme Settings',
            'menu_title' 	=> 'Theme Settings',
            'menu_slug' 	=> 'Theme-settings',
            'capability' 	=> 'edit_posts',
            'icon_url' => 	'dashicons-text-page' ,
            'redirect' 	=> false,
            'position' => 2
        ));
    }
add_filter( 'block_categories', 'tlj_block_category', 60, 2);
