<?php 
    $qualify = get_field('qualify_repeat');
    $qualify_title = get_field('qualify_title');
    $subtitle = get_field('sub-title');
    $above = get_field('above');
    $becoming = get_field('becoming');
?>
<section id="Qu">
    <div data-aos="zoom-in" data-aos-duration="2000" class="greendots">
        <img src="/wp-content/themes/lemonlicious/images/greendots.png">
    </div>
    <div class="wrapper">
        <div class="abovequal"><?= $above;?></div>
        <div class="becoming"><?= $becoming;?></div>
        <div class="qualify">
            <h2 data-aos="flip-down" data-aos-duration="2000"><?= $qualify_title;?></h2>
            <h3 data-aos="flip-down" data-aos-duration="2000"><?= $subtitle;?></h3>
            <div data-aos="zoom-in-down" data-aos-duration="2500" class="face-section">

            <?php foreach($qualify as $qual){ ?>
                <div class="col-flex">
                    <img src="<?= $qual['qualify_image'];?>">
                    <div class="text"><?= $qual['qualify_content'];?></div>
                </div>
            <?php }?>

            </div>
        </div>
    </div>
</section>