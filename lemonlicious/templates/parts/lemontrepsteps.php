<?php 
    $main_title = get_field('main_title');
    $main_description = get_field('main_description');
?>
<section id="steps">
    <div data-aos="fade-down-right" data-aos-duration="2000" class="bluelemon">
        <img src="/wp-content/themes/lemonlicious/images/bluelemonwbits.png">
    </div>
    <div data-aos="fade-down-right" data-aos-duration="2500" class="blackstripe">
        <img src="/wp-content/themes/lemonlicious/images/black_line_lemontrep.png">
    </div>
    <div class="wrapper">
        <div class="main-content">
            <h2><?= $main_title;?></h2>
            <div class="desc"><?= $main_description; ?></div>
        </div>
    </div>
</section>


        