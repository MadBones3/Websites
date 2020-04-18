<?php
// TOP
    $left_image = get_field('left_image');
    $right_title = get_field('right_title');
    $right_description = get_field('right_description');
    $right_button_text = get_field('right_button_text');
    $right_button_url = get_field('right_button_url');
// BOTTOM
    $right_image = get_field('right_image');
    $left_title = get_field('left_title');
    $left_description = get_field('left_description');
    $left_button_text = get_field('left_button_text');
    $left_button_url = get_field('left_button_url');
?>
<section id="Homesection1" class="wrapper">
    <div id="top" class="two-col">
        <div class="left">
            <div data-aos="flip-up" data-aos-duration="2000" class="square">
                <span></span>
                <div class="content">
                    <div class="Sone"></div>
                    <img src="<?= $left_image; ?>">
                    <div class="Stwo"></div>
                </div>
            </div>
        </div>
        <div data-aos="zoom-in"  data-aos-duration="2500" class="right">
            <h3><?= $right_title; ?></h3>
            <?= $right_description; ?>
            <div class="button">
                <a href="<?= $right_button_url; ?>">
                    <span><?= $right_button_text; ?></span>
                </a>
            </div>
        </div>
    </div>
    <div id="bottom" class="two-col">
        <div data-aos="zoom-in"  data-aos-duration="2500" class="left">
            <h3><?= $left_title; ?></h3>
            <?= $left_description; ?>
            <div class="button">
                <a href="<?= $left_button_url; ?>">
                    <span><?= $left_button_text; ?></span>
                </a>
            </div>
        </div>
        <div class="right">
            <div data-aos="flip-down" data-aos-duration="2000" class="square">
                <span></span>
                <div class="content">
                    <div class="Sone"></div>
                    <img src="<?= $right_image; ?>">
                    <div class="Stwo"></div>
                    <div class="Slem"></div>
                </div>
            </div>
        </div>
    </div>
</section>