<?php
    $steps = get_field('steps');
?>
<section id="stepsslider">
    <div data-aos="zoom-in-left" data-aos-duration="2000" class="orangeblob">
        <img src="/wp-content/themes/lemonlicious/images/orangeblob2.png">
    </div>
    <div class="wrapper">
        <div class="slides">
            <!-- swiper -->
            <div class="swiper-container stepswip">
                <div class="swiper-wrapper">
            <!-- repeater -->

            <?php foreach($steps as $todo){ ?>
                <div class="swiper-slide">
                    <div class="square">
                        <img src="<?= $todo['step_image'];?>">
                        <h3><?= $todo['step_title'];?></h3>
                        <div class="content"><?= $todo['step_description'];?></div>
                    </div>
                </div>
            <?php }?>

            <!-- end repeater -->
                </div>
            
            </div>
            <!-- end swiper -->
            <!-- Add Pagination -->
            <div class="swiper-button-next swiper-button-black"></div>
            <div class="swiper-button-prev swiper-button-black"></div>
        </div>
    </div>
</section>