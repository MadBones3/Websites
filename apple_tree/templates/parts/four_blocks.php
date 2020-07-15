<?php 
    $section_title = get_field('section_title');
?>
<div class="developSection partners">
    <div class="greyBack"></div>
    <div class="large-wrapper">
        <div class="magic">
        <span class="giantInspire"><?= $section_title;?></span>
        <?php if ( have_rows('block_services') ) : ?>
            <div class="swiper-container first">
                <div class="swiper-wrapper">
                    <?php while( have_rows('block_services') ) : the_row(); ?>
                        <div class="swiper-slide">
                            <div class="servicesContent">
                                <img src="<?php if(get_sub_field('partner_logo')): the_sub_field('partner_logo'); endif;?>"> 
                                <hr>
                                <p><?php if(get_sub_field('info')): the_sub_field('info'); endif;?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination white"></div>
            </div>
        <?php endif; ?>   
         <?php
            $link = get_field('dev_link');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
            endif;
        ?>
        <a class="outerBorderBut2" href="<?php echo $link_url;?>"><?php echo $link_title;?></a>
        </div>  
    </div>
</div>
        <!-- <div class="line1"></div>  -->