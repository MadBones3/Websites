<?php 
    /* Template Name: about */
    get_header();
?>
<?php
// Banner
    $about_banner_image = get_field('about_banner_image');
    $about_banner_heading_1 = get_field('about_banner_heading_1');
    $about_banner_heading_2 = get_field('about_banner_heading_2');
// Content
    $about_tite = get_field('about_tite');
    $about_content = get_field('about_content');
    $about_description = get_field('about_description');
// Form
    $form_resellers = get_field('form_resellers');
?>
<!-- about page main content -->
<main id="aboutus">

    <div class="sectioncolor">
        <div class="wrapper">
            <div class="banner">
                <div class="content">
                    <h1>
                    <?php if($about_banner_heading_1) : ?>
                        <span style="color:<?php the_field('banner_heading_1_color') ?>"><?= $about_banner_heading_1; ?></span>
                    <?php endif;?>
                    <?php if($about_banner_heading_2) : ?>
                        <span style="color:<?php the_field('banner_heading_2_color') ?>" ><?= $about_banner_heading_2; ?></span>
                    <?php endif;?>
                    </h1>
                </div>
                <div class="square">
                    <span></span>
                    <div class="content">
                        <div class="Sone"></div>
                        <img src="<?= $about_banner_image;?>">
                        <div class="Stwo"></div>
                        <div class="Slem"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="about">
        <div data-aos="zoom-in" data-aos-duration="2000" class="redlemon">
            <img src="/wp-content/themes/lemonlicious/images/redlemon.png">
        </div>
        <div data-aos="zoom-out" data-aos-duration="2000" class="Glemon">
            <img src="/wp-content/themes/lemonlicious/images/greenlemon.png">
        </div>
        <div class="wrapper">
            <div class="short-desc"><?= $about_description;?></div>
            <h2><?= $about_tite;?></h2>
            <div class="content"><?= $about_content; ?></div>
        </div>
    </section>

    <section class="form">
        <div class="wrapper">
            <div class="resellers">
                <h2><?= $form_resellers;?></h2>
                <?php echo do_shortcode('[gravityform id="5" title="false" description="false" ajax="true"]')?>
            </div>
        </div>
    </section>

</main>
<?php get_footer();?>