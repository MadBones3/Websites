<?php
// BC Theme Options
    if( function_exists('acf_add_options_page') ) {
        $option_page = acf_add_options_page(array(
            'page_title' 	=> 'Options',
            'menu_title' 	=> 'Options',
            'menu_slug' 	=> 'options',
            'capability' 	=> 'edit_posts',
            'icon_url' => get_template_directory_uri(). '/img/admin/bc-theme.png' ,
            'redirect' 	=> false,
            'position' => 2
        ));
    }
//Registering Gutenberg Block Category
function tlj_block_category( $categories, $post ) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'at-blocks',
                'title' => __( 'Apple Tree Blocks', 'at-blocks' ),
            ),
        )
    );
}
add_filter( 'block_categories', 'tlj_block_category', 60, 2);
//Registering Gutenberg Blocks
add_action('acf/init', 'my_register_blocks');
function my_register_blocks() {
    // check function exists
    if( function_exists('acf_register_block') ) {
    // Inspire
        acf_register_block(array(
            'name' =>               'inspire_section',
            'title' =>              __('Inspire'),
            'description' =>        __('Inspire Section on homepage'),
            'render_template' =>    'templates/parts/inspire.php',
            'category' =>           'at-blocks',
            'icon' =>               'admin-comments',
            'mode' =>               'edit',
            'keywords' =>           array( 'custom', 'block' ),
        ));
   // Develop
        acf_register_block(array(
            'name' =>               'develop_section',
            'title' =>              __('Develop'),
            'description' =>        __('Develop Section on homepage'),
            'render_template' =>    'templates/parts/develop.php',
            'category' =>           'at-blocks',
            'icon' =>               'admin-comments',
            'mode' =>               'edit',
            'keywords' =>           array( 'custom', 'block' ),
        ));
   // four blocks
        acf_register_block(array(
            'name' =>               'block_section',
            'title' =>              __('Partners Block'),
            'description' =>        __('Block Section on Root'),
            'render_template' =>    'templates/parts/four_blocks.php',
            'category' =>           'at-blocks',
            'icon' =>               'admin-comments',
            'mode' =>               'edit',
            'keywords' =>           array( 'custom', 'block' ),
        ));
    // The Tribe
        acf_register_block(array(
            'name' =>               'the_tribe',
            'title' =>              __('The Tribe'),
            'description' =>        __('The tribe Section on homepage'),
            'render_template' =>    'templates/parts/thetribe.php',
            'category' =>           'at-blocks',
            'icon' =>               'admin-comments',
            'mode' =>               'edit',
            'keywords' =>           array( 'custom', 'block' ),
        ));
    // Align Headings
        acf_register_block(array(
            'name' =>               'giant_heading',
            'title' =>              __('Big Heading'),
            'description' =>        __('Heading with alignment'),
            'render_template' =>    'templates/parts/giantHeading.php',
            'category' =>           'at-blocks',
            'icon' =>               'admin-comments',
            'mode' =>               'edit',
            'keywords' =>           array( 'custom', 'block' ),
        ));
    // Our People
         acf_register_block(array(
            'name' =>               'our_people',
            'title' =>              __('Our People'),
            'description' =>        __('Our people with image and content on right'),
            'render_template' =>    'templates/parts/ourpeople.php',
            'category' =>           'at-blocks',
            'icon' =>               'admin-comments',
            'mode' =>               'edit',
            'keywords' =>           array( 'custom', 'block' ),
        ));
    // Info with lines above or/and below
        acf_register_block(array(
            'name' =>               'info_with_line',
            'title' =>              __('Info with line'),
            'description' =>        __('Info with vertical line options'),
            'render_template' =>    'templates/parts/info_with_line.php',
            'category' =>           'at-blocks',
            'icon' =>               'admin-comments',
            'mode' =>               'edit',
            'keywords' =>           array( 'custom', 'block' ),
        ));
    // Our People (Both)
        acf_register_block(array(
            'name' =>               'our_people_com',
            'title' =>              __('Our Catalysts and facilitators'),
            'description' =>        __('A display of both catalysts and facilitators'),
            'render_template' =>    'templates/parts/peoplecombined.php',
            'category' =>           'at-blocks',
            'icon' =>               'admin-comments',
            'mode' =>               'edit',
            'keywords' =>           array( 'custom', 'block' ),
        ));
    // Value Blocks
        acf_register_block(array(
            'name' =>               'value_blocks',
            'title' =>              __('Value Block'),
            'description' =>        __('Value Block content'),
            'render_template' =>    'templates/parts/valueblock.php',
            'category' =>           'at-blocks',
            'icon' =>               'admin-comments',
            'mode' =>               'edit',
            'keywords' =>           array( 'custom', 'block' ),
        ));
    }
}