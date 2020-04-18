<?php
// Banner
    $banner_heading_1_color = get_field('banner_heading_1_color');
    $product_banner_heading_1 = get_field('product_banner_heading_1');
    $banner_heading_2_color = get_field('banner_heading_2_color');
    $product_banner_heading_2 = get_field('product_banner_heading_2');
    $product_banner_image = get_field('product_banner_image');
// Under banner description
    $product_description = get_field('product_description');
// Title
    $cranberry_title = get_field('cranberry_title');
    $ginger_title = get_field('ginger_title');
    $origional_title = get_field('origional_title');
    $sugarless_title = get_field('sugarless_title');
// Description
    $cranberry_description = get_field('cranberry_description');
    $ginger_description = get_field('ginger_description');
    $origional_description = get_field('origional_description');
    $sugarless_description = get_field('sugarless_description');
// Image
    $cranberry_image = get_field('cranberry_image');
    $ginger_image = get_field('ginger_image');
    $origional_image = get_field('origional_image');
    $sugarless_image = get_field('sugarless_image');
?>
<?php 
    /* Template Name: Products */
    get_header();
?>
<!-- Product page main content parts -->
<main id="products">
    <div class="redface">
        <img src="/wp-content/themes/lemonlicious/images/greenfacelemon.png">
    </div>
    <div class="orangeface">
        <img src="/wp-content/themes/lemonlicious/images/bluefacelemon.png">
    </div>
    <div class="greenface">
        <img src="/wp-content/themes/lemonlicious/images/orangefacelemon.png">
    </div>
    <div class="blueface">
        <img src="/wp-content/themes/lemonlicious/images/redfacelemon.png">
    </div>

    <div class="sectioncolor">
        <div class="wrapper">
            <div class="banner">
                <div class="content">
                    <h1>
                    <?php if($product_banner_heading_1) : ?>
                        <span style="color:<?= $banner_heading_1_color;?>"><?= $product_banner_heading_1; ?></span>
                    <?php endif;?>
                    <?php if($product_banner_heading_2) : ?>
                        <span style="color:<?= $banner_heading_2_color;?>" ><?= $product_banner_heading_2; ?></span>
                    <?php endif;?>
                    </h1>
                </div>
                <div class="square">
                    <span></span>
                    <div class="content">
                        <div class="Sone"></div>
                        <img src="<?= $product_banner_image;?>">
                        <div class="Stwo"></div>
                        <div class="Slem"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="desc-color">
        <div class="wrapper">
            <div class="underbanner">
                <?= $product_description;?>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="container">
            <!-- origional -->
            <div class="part" data-background="#95c11f">
                <div class="content">
                    <div class="color">
                        <div class="product-flex">
                            <div class="product-content">
                                <h2><?= $origional_title?></h2>
                                <div class="desc"><?= $origional_description; ?></div>
                            </div>
                            <img src="<?=$origional_image;?>">
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- sugarless -->
            <div class="part" data-background="#69b6c9">
                <div class="content">
                    <div class="color">
                        <div class="product-flex">
                            <div class="product-content">
                                <h2><?= $sugarless_title?></h2>
                                <div class="desc"><?= $sugarless_description?></div>
                            </div>
                            <img src="<?=$sugarless_image;?>">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ginger -->
            <div class="part" data-background="#f18825">
                <div class="content">
                    <div class="color">
                        <div class="product-flex">
                            <div class="product-content">
                                <h2><?= $ginger_title?></h2>
                                <div class="desc"><?= $ginger_description?></div>
                            </div>
                            <img src="<?=$ginger_image;?>">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cranberry -->
            <div class="part" data-background="#e72c53">
                <div class="content">
                    <div class="color">
                        <div class="product-flex">
                            <div class="product-content">
                                <h2><?= $cranberry_title; ?></h2>
                                <div class="desc"><?= $cranberry_description?></div>
                            </div>
                            <img src="<?=$cranberry_image;?>">
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
</main>
<?php get_footer();?>