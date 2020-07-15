<div class="developSection">
    <div class="greyBack"></div>
    <div class="large-wrapper">
        <!-- <div class="line1"></div> -->
        <div class="magic">
        <span class="giantInspire">Develop</span>
        <?php if ( have_rows('services') ) : ?>
            <div class="swiper-container first">
                <div class="swiper-wrapper">
                    <?php while( have_rows('services') ) : the_row(); ?>
                        <div class="swiper-slide">
                            <a href="<?php if(get_sub_field('link_to_page')): the_sub_field('link_to_page'); endif; ?>">
                                <div class="servicesContent">
                                    <h3><?php if(get_sub_field('heading')): the_sub_field('heading'); endif;?></h3>
                                    <hr>
                                    <p><?php if(get_sub_field('info')): the_sub_field('info'); endif;?></p>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination white"></div>
            </div>
        <?php endif; ?>
       
        </div>
    </div>
</div>