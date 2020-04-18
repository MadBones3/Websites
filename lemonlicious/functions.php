<?php

// Load BC styles
    function bcBlank_styles() {
        wp_register_style('bcBlank', get_template_directory_uri() . '/stylesheet/theme-style.css', array(), '1.0', 'all');
        wp_enqueue_style('bcBlank'); // Enqueue it!
    }
    add_action('wp_enqueue_scripts', 'bcBlank_styles'); // Add Theme Stylesheet

//Head Enqueue
	function bc_head() {
		wp_enqueue_script( 'google-js', 'https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
		wp_enqueue_style( 'swiper-css', 'https://unpkg.com/swiper/css/swiper.min.css');
		wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');
		wp_enqueue_style( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
    }
    add_action( 'get_header', 'bc_head' );
    
//Footer Enque
	function bc_footer() {
		wp_enqueue_script( 'jQuery','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js');
		wp_enqueue_script( 'swiper-js','https://unpkg.com/swiper/js/swiper.min.js');
		wp_enqueue_script( 'scrollie','https://s3-us-west-2.amazonaws.com/s.cdpn.io/2542/jquery.scrollie.min_1.js');
        wp_enqueue_script( 'aosjs','https://unpkg.com/aos@2.3.1/dist/aos.js');
        
    }
    add_action( 'get_footer', 'bc_footer' );

// Load BC script
function bcBlank_script() {
    wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', array(), '4.3.0'); // Conditionizr
    wp_enqueue_script('custom'); // Enqueue it!
}
add_action('wp_enqueue_scripts', 'bcBlank_script'); // Add Theme script
    
// Custom login screen for wp-admin
function admin_login_logo() {
    echo '<style type="text/css">
    h1 a {
        background-image: url('.get_template_directory_uri().'/images/LL_Logo.png) !important;
        background-size: cover !important;
        height: 150px !important;
        width: 100% !important; }
    body{
        background: #bdbdbd !important;
        color: #fff !important;}
    .login form{
        background: #373a46 !important;
        border: 2px solid;}
    .login #login_error, .login .message, .login .success{
        color: #373a46 !important;}
    .login form label{
            color: #fff;}
    .login #login_error, .login .message, .login .success{
            background-color: transparent;}
    input#wp-submit {
        background: #fcd825 !important;
        color: #000 !important;
        border-color: #000 !important;}
    div#login_error {
        background: #ffffff !important;}
    </style>';
}
add_action('login_head', 'admin_login_logo');

/* =========== Add Widgets ==============*/

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'bcBlank'),
        'description' => __('Description for this widget-area...', 'bcBlank'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="sideBarWidget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="sBarWidgetTitle">',
        'after_title' => '<i class="fas fa-plus-circle"></i><i class="fas fa-minus-circle"></i></h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'bcBlank'),
        'description' => __('Description for this widget-area...', 'bcBlank'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="sideBarWidget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="sBarWidgetTitle">',
        'after_title' => '<i class="fas fa-plus-circle"></i><i class="fas fa-minus-circle"></i></h3>'
    ));
}

/* =========== END Add Widgets ==============*/

/* =========== Navigation ==============*/
// register the nav tab
function register_BC_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'bcBlank'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'bcBlank'), // Sidebar Navigation
        'logged-in' => __('Logged in', 'bcBlank'), // Logged in menu
        'logged-out' => __('Logged out', 'bcBlank') //logged out menu
    ));
}
  add_action('init', 'register_BC_menu'); // Add BC Blank Menu

// custom menu
function brandcandy_nav(){
    wp_nav_menu(
        array(
            'theme_location'  => 'header-menu',
            'menu'            => '',
            'container'       => 'div',
            'container_class' => 'menu-{menu slug}-container',
            'container_id'    => 'acrb-menu',
            'menu_class'      => 'menu',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul>%3$s</ul>',
            'depth'           => 0,
            'walker'          => ''
        )
    );
}
// custom quick link menu
function brandcandy_quicklinknav(){
    wp_nav_menu(
        array(
            'theme_location'  => 'sidebar-menu',
            'menu'            => '',
            'container'       => 'div',
            'container_class' => 'menu-{menu slug}-container',
            'container_id'    => 'acrb-ql-menu',
            'menu_class'      => 'ql-menu',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul>%3$s</ul>',
            'depth'           => 0,
            'walker'          => ''
        )
    );
}
// custom login
function brandcandy_nav_logged_in(){
    wp_nav_menu(
        array(
            'theme_location'  => 'logged-in',
            'menu'            => '',
            'container'       => 'div',
            'container_class' => 'menu-{menu slug}-container',
            'container_id'    => '',
            'menu_class'      => 'menu',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul>%3$s</ul>',
            'depth'           => 0,
            'walker'          => ''
        )
    );
}
// custom logout
function brandcandy_nav_logged_out(){
    wp_nav_menu(
        array(
            'theme_location'  => 'logged-out',
            'menu'            => '',
            'container'       => 'div',
            'container_class' => 'menu-{menu slug}-container',
            'container_id'    => '',
            'menu_class'      => 'menu',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul>%3$s</ul>',
            'depth'           => 0,
            'walker'          => ''
        )
    );
}
/* =========== END Navigation ==============*/

// BC Theme Options
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

if (function_exists('add_theme_support')){
    // Add Thumbnail Theme Support
        add_theme_support('post-thumbnails');
        //add_image_size('large', 700, '', true); // Large Thumbnail
        //add_image_size('medium', 250, '', true); // Medium Thumbnail
        //add_image_size('small', 120, '', true); // Small Thumbnail
        //add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
}

/* ===========  Custom post types ==============*/

/* Custom Post Type Start */

function custom_events() {

    $labels = array(
        'name'                  => _x( 'Events', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Events', 'text_domain' ),
        'name_admin_bar'        => __( 'Events', 'text_domain' ),
        'archives'              => __( 'Event Archives', 'text_domain' ),
        'attributes'            => __( 'Event Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Events:', 'text_domain' ),
        'all_items'             => __( 'All Events', 'text_domain' ),
        'add_new_item'          => __( 'Add New Event', 'text_domain' ),
        'add_new'               => __( 'Add New Event', 'text_domain' ),
        'new_item'              => __( 'New Event', 'text_domain' ),
        'edit_item'             => __( 'Edit Events', 'text_domain' ),
        'update_item'           => __( 'Update Events', 'text_domain' ),
        'view_item'             => __( 'View Events', 'text_domain' ),
        'view_items'            => __( 'View Events', 'text_domain' ),
        'search_items'          => __( 'Search Events', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Events list', 'text_domain' ),
        'items_list_navigation' => __( 'Events list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter Events list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Events', 'text_domain' ),
        'description'           => __( 'Listing all Events', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-clipboard',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'events', $args );

}
add_action( 'init', 'custom_events', 0 );
// events Theme Settings
acf_add_options_sub_page(array(
    'page_title'     => 'events',
    'menu_title'    => 'Event Options',
    'menu_slug'     => 'events-options',
    'parent_slug'    => 'edit.php?post_type=events',
));
/* =========== END Custom post types ==============*/


/* =========== Google map ==============*/

function my_acf_google_map_api( $api ){
    $api['key'] = 'AIzaSyDXqQqQ4rRRWgGwNT3Yek38m-GQO-gBe0s';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

/* =========== END Google map ==============*/