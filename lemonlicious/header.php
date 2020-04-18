<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>
            <?php 
            if ( is_front_page() ){ echo 'Home'; echo ' | ';  bloginfo( 'name' );}
            else { echo wp_title(''); echo ' | ';  bloginfo( 'name' );}?>
        </title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> id="acrb">
    <div class="wrapper">
        <nav role="navigation">
            <div class="logo">
                <a href="<?php echo home_url();?>">
                    <img src="<?php echo get_template_directory_uri()?>/images/LEM_logo.png"/>
                </a>
            </div>
            <?php brandcandy_nav(); ?>            
        <!--   Hamburger Bars   -->
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        <!--   End Hamburger Bars   -->
        </nav>
    </div>
    <?php
    if(is_single()) : ?>
        <!-- banner -->
        <main id="post">
        <div class="sectioncolor">
            <div class="wrapper">
                <div class="banner">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
        </main>
        <!-- end banner -->
    <?php endif;
    ?>