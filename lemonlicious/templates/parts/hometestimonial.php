<?php 
    $testimonial = get_field('testimonial', 'options');
?>
<section id="Htestimonial">
    <div class="wrapper">
    <div class="shapes">
        <img data-aos="fade-down-right" data-aos-duration="2000" src="/wp-content/themes/lemonlicious/images/redfacelemon.png">
        <img data-aos="fade-down-right" data-aos-duration="2500" src="/wp-content/themes/lemonlicious/images/greenfacelemon.png">
        <img data-aos="fade-down-right" data-aos-duration="3000" src="/wp-content/themes/lemonlicious/images/orangefacelemon.png">
        <img data-aos="fade-down-right" data-aos-duration="3000" src="/wp-content/themes/lemonlicious/images/bluefacelemon.png">
    </div>
        <h2 data-aos="fade-down" data-aos-duration="3000">What our customers have to say</h2>
    <!-- Swiper -->
    <div data-aos="fade-down" data-aos-duration="3000" class="swiper-container testswip">
        <div class="swiper-wrapper">
        
        <?php foreach($testimonial as $test){ ?>
            <div class="swiper-slide testflex">
                <div class="test-text">
                    <?=$test['words_testimonial'];?>
                </div>
                <div class="test-author">
                    <p><?= "- " . $test['author'];?></p>
                </div>                

            </div>
        <?php }?>

        </div>
    </div>

    </div>
    <!-- Add Pagination -->
    <div class="swiper-button-next swiper-button-black"></div>
    <div class="swiper-button-prev swiper-button-black"></div>
</section>