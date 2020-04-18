<?php
    $banner_heading_1 = get_field('banner_heading_1');
    $banner_heading_2 = get_field('banner_heading_2');
    $banner_image = get_field('banner_image');
?>
<section id="Lemontrepbanner">
<div class="sectioncolor">
    <div class="wrapper">
        <div class="banner">
            <div class="content">
                <h1>
                    <span style="color:<?php the_field('banner_heading_1_color') ?>"><?= $banner_heading_1; ?></span>
                    <span style="color:<?php the_field('banner_heading_2_color') ?>" ><?= $banner_heading_2; ?></span>
                </h1>
            </div>
            <div class="square">
                <span></span>
                <div class="content">
                    <div class="Sone"></div>
                    <img src="<?= $banner_image;?>">
                    <div class="Stwo"></div>
                    <div class="Slem"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>