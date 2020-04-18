<?php 
    /* Template Name: Environmental */
    get_header();
?>
<?php
// Banner
    $envi_banner_image = get_field('envi_banner_image');
    $envi_banner_heading_1 = get_field('envi_banner_heading_1');
    $envi_banner_heading_2 = get_field('envi_banner_heading_2');
// Content
    $description = get_field('description');
    $content = get_field('content');
?>

<main id="environmental">

    <div class="sectioncolor">
        <div class="wrapper">
            <div class="banner">
                <div class="content">
                    <h1>
                    <?php if($envi_banner_heading_1) : ?>
                        <span style="color:<?php the_field('envi_banner_heading_color_1') ?>"><?= $envi_banner_heading_1; ?></span>
                    <?php endif;?>
                    <?php if($envi_banner_heading_2) : ?>
                        <span style="color:<?php the_field('envi_banner_heading_color_2') ?>" ><?= $envi_banner_heading_2; ?></span>
                    <?php endif;?>
                    </h1>
                </div>
                <div class="square">
                    <span></span>
                    <div class="content">
                        <div class="Sone"></div>
                        <img src="<?= $envi_banner_image;?>">
                        <div class="Stwo"></div>
                        <div class="Slem"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="enviprom">
        <div class="wrapper">
            <div data-aos="fade-down" data-aos-duration="2000" class="writeup">
                <?= $description;?>
            </div>
            <div class="bottle-flex">
            <!-- repeater -->
            <?php foreach($content as $con){ ?>
            <div data-aos="fade-down" data-aos-duration="2000" class="container">
                <div class="imager">
                    <img src="<?= $con['content_image'];?>">
                </div>
                <div class="cirlce"><p><?= $con['list_number'];?></p></div>
                <div class="bottle-content">
                    <h3><?= $con['content_title'];?></h3>
                    <?= $con['content_description'];?>
                </div>
            </div>
            <?php }?>
            <!-- end -->
            </div>
        </div>
    </div>

</main>
<?php get_footer();?>
