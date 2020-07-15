<div class="theTribeSection">
    <div class="large-wrapper">
        <div class="magic">
        <?php if ( have_rows('the_tribe') ) : ?>
            <div class="swiper-container2 second">
                <div class="swiper-wrapper">
                    <?php while( have_rows('the_tribe') ) : the_row(); ?>
                        <div class="swiper-slide swiper-slide2">
                            <a href="http://kstest.co.za/apple-tree/our-people/<?php if(get_sub_field('tribe_member_url')): the_sub_field('tribe_member_url'); endif;?>">
                                <div class="the_tribe_image" style="background-image:url(<?php if(get_sub_field('image')): the_sub_field('image'); endif;?>)">
                                </div>
                                <p class="the_tribe_name"><?php if(get_sub_field('title')): the_sub_field('title'); endif;?></p>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
                 <!-- Add Arrows -->
                <div class="swiper-button-next swiper-button-black"></div>
                <div class="swiper-button-prev swiper-button-black"></div>
            </div>
        <?php endif; ?>
        </div>
    </div>
</div>
        <!-- <div class="line1"></div>  -->