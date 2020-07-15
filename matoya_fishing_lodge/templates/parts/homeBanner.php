<div id="home">
    <div class="banner">
        <div class="swiper-container home">
            <div class="swiper-wrapper">
                <?php if ( have_rows('banner') ) : ?>
                <?php while( have_rows('banner') ) : the_row(); ?>
                <!-- repeater -->
                <div class="swiper-slide">
                    <div class="bg-img" style="background-image: url('<?php echo get_sub_field('banner_image');?>');">
                        <div class="wrapper">
                            <h1 class="homeheroh1" style="color: <?php echo get_sub_field('banner_title_color');?>"><?php echo get_sub_field('banner_title');?></h1>
                            <div class="btn-wrap homeherobtn">
                                <a class="btn" href="<?php echo get_sub_field('banner_button_url');?>"><?php echo get_sub_field('banner_button_text');?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end repeater -->
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            
            <!-- padination here -->
            <div class="swiper-button-next swiper-button-black"></div>
            <div class="swiper-button-prev swiper-button-black"></div>
        </div>
    </div>
</div>
