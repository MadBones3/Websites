<?php
include_once('functions/acf-functions.php');


if (function_exists('add_theme_support')){
    // Add Menu Support
    add_theme_support('menus');
    // Add Thumbnail Theme Support
        add_theme_support('post-thumbnails');
        //add_image_size('large', 700, '', true); // Large Thumbnail
        //add_image_size('medium', 250, '', true); // Medium Thumbnail
        //add_image_size('small', 120, '', true); // Small Thumbnail
        //add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
    // Enables post and comment RSS feed links to head
        add_theme_support('automatic-feed-links');
}
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

// Load AHS styles
    function ahsBlank_styles() {
        wp_register_style('ahsBlank', get_template_directory_uri() . '/stylesheet/theme-style.css', array(), '1.0', 'all');
        wp_enqueue_style('ahsBlank'); // Enqueue it!
    }
    add_action('wp_enqueue_scripts', 'ahsBlank_styles'); // Add Theme Stylesheet

//Head Enqueue
	function ahs_head() {
		wp_enqueue_script( 'google-js', 'https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
		wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');
        wp_enqueue_style( 'swiper-css', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css');
        wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array( 'jquery' ), '1.0.0', true );
        
    }
    add_action( 'get_header', 'ahs_head' );

    
    function theme_gsap_script() {
        wp_enqueue_script( 'gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js', array(), false, true );
        wp_enqueue_script( 'tween-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js');
        wp_enqueue_script( 'scrollmagic-js', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js');
        wp_enqueue_script( 'scrollmagic-animation', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.js');
        wp_enqueue_script( 'indicators', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js');
    }
    add_action( 'wp_enqueue_scripts', 'theme_gsap_script' );
        
//Footer Enque
	function ahs_footer() {
		wp_register_script('custom', get_template_directory_uri() . '/js/custom.js' ); // Conditionizr
        wp_enqueue_script('custom'); // Enqueue it!
        wp_enqueue_script( 'swiper-js', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js');
    }
    add_action( 'get_footer', 'ahs_footer' );

    
// Custom login screen for wp-admin
function admin_login_logo() {
    echo '<style type="text/css">
    h1 a {
        background-image: url('.get_template_directory_uri().'/img/screenshot.png) !important;
        background-size: contain !important;
        height: 90px !important;
        width: 100% !important; }
    body{
        background: #f6f2ef !important;
        color: #fff !important;}
    .login form{
        background: #282d40 !important;
        border: 2px solid;}
    .login #login_error, .login .message, .login .success{
        color: #373a46 !important;}
    .login form label{
            color: #fff;}
    .login #login_error, .login .message, .login .success{
            background-color: transparent;}
    input#wp-submit {
        background: #5b745f !important;
        color: #fff !important;
        border-color: #fff !important;}
    div#login_error {
        background: #ffffff !important;}
    .login #backtoblog a, .login #nav a {
        color: #000;}
    </style>';
}
add_action('login_head', 'admin_login_logo');

//show admin bar
function admin_bar(){

    if(is_user_logged_in()){
      add_filter( 'show_admin_bar', '__return_true' , 1000 );
    }
  }
  add_action('init', 'admin_bar' );

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
        'quicklinks-menu' => __('Quick links', 'bcBlank'), // Quicklink Navigation
        'doc-menu' => __('Document links', 'bcBlank'), // doc Navigation
        'woo-menu' => __('Woocommerce', 'bcBlank'), // woo Navigation
        'logged-in' => __('Logged in', 'bcBlank'), // Logged in menu
        'logged-out' => __('Logged out', 'bcBlank') //logged out menu
    ));
}
  add_action('init', 'register_BC_menu'); // Add BC Blank Menu

// custom menu
function arkhealthspace_nav(){
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
function arkhealthspace_quicklinknav(){
    wp_nav_menu(
        array(
            'theme_location'  => 'quicklinks-menu',
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
// custom document link menu
function arkhealthspace_doclinknav(){
    wp_nav_menu(
        array(
            'theme_location'  => 'doc-menu',
            'menu'            => '',
            'container'       => 'div',
            'container_class' => 'menu-{menu slug}-container',
            'container_id'    => 'acrb-doc-menu',
            'menu_class'      => 'doc-menu',
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
// custom woo menu
function arkhealthspace_woonav(){
    wp_nav_menu(
        array(
            'theme_location'  => 'woo-menu',
            'menu'            => '',
            'container'       => 'div',
            'container_class' => 'menu-{menu slug}-container',
            'container_id'    => 'acrb-woo-menu',
            'menu_class'      => 'woo-menu',
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
function arkhealthspace_nav_logged_in(){
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

// Search form
function wpdocs_my_search_form( $form ) {
    $form = '
    <form action="' . home_url( '/' ) . '" id="searchform" class="search" method="get" role="search">
        <div class="sf_wrapper">
            <label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label>
            <input class="search-bar__input" type="text" placeholder="Search" name="s" id="s" />
            <button type="submit" id="searchsubmit" class="search-bar__submit"><i class="fas fa-search"></i></button>
        </div>
    </form>';

    return $form;
}
add_filter( 'get_search_form', 'wpdocs_my_search_form' );