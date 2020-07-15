<?php 
    /* Template Name: Accomdation */
    get_header();
?>
<main class="dark">
    <?php get_template_part('templates/parts/heroBanner');?>
    <div id="accomadtion" class="belowbanner">
        <div class="blackswipe" style="background-image: url('http://kstest.co.za/matoyafl/wp-content/uploads/2020/05/MFL_Homepage_Welcome_to_Matoya_grunge_v1-min.png');">
            <div class="padtop200">
                <div class="wrapper">
                    <h2><?php echo get_field('ac_section_title');?></h2>
                    <div class="txt"><?php echo get_field('ac_section_content');?></div>
                    <div class="accfeatures magic">
                        <!-- re -->
                    <?php if ( have_rows('accommodation_features') ) : ?>
                    <?php while( have_rows('accommodation_features') ) : the_row(); ?>
                        <div class="accblock">
                            <div class="image">
                                <img src="<?php echo get_sub_field('acc_image');?>" alt="<?php echo the_title();?>">
                            </div>
                            <h4><?php echo get_sub_field('acc_title');?></h4>
                            <div class="desc"><?php echo get_sub_field('acc_description');?></div>
                        </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                        <!-- end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="environment">
    <div class="greystripe" style="background-image: url('http://kstest.co.za/matoyafl/wp-content/uploads/2020/05/Vector-Smart-Object-copy-35.png');">
        <div class="wrappers">
            <div class="flex">
                <div class="image magic-left">
                    <div class="swiper-container acc-env">
                        <div class="swiper-wrapper">
                        <!-- re -->
                        <?php if ( have_rows('environment_images') ) : ?>
                        <?php while( have_rows('environment_images') ) : the_row(); ?>
                            <div class="swiper-slide">
                                <img src="<?php echo get_sub_field('envir_image');?>" alt="<?php echo the_title();?>">
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <!-- en -->
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
                <div class="content top magic-right"><?php echo get_field('top_content');?></div>
            </div>
            <div class="flex flip">
                <div class="image magic-right">
                    <div class="swiper-container acc-corp">
                        <div class="swiper-wrapper">
                        <!-- re -->
                        <?php if ( have_rows('corporate_images') ) : ?>
                        <?php while( have_rows('corporate_images') ) : the_row(); ?>
                            <div class="swiper-slide">
                                <img src="<?php echo get_sub_field('corp_image');?>" alt="<?php echo the_title();?>">
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <!-- en -->
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
                <div class="content bot magic-left"><?php echo get_field('bottom_content');?></div>
            </div>
        </div>
    </div>    
    </div>
</main>
<div id="facilities">
    <div class="test" style="background-image: url('http://kstest.co.za/matoyafl/wp-content/uploads/2020/05/test.png');"></div>
    <div class="blackswipe" style="background-image: url('http://kstest.co.za/matoyafl/wp-content/uploads/2020/05/MFL_Homepage_Welcome_to_Matoya_grunge_v1-min.png');">
        <div class="padtop200">    
            <div class="wrapper">
                <h2 class="magic"><?php echo get_field('LF_section_title');?></h2>
                <div class="fa-container magic-appear">
                    <!-- re -->
                    <?php if ( have_rows('lodge_facilities') ) : ?>
                    <?php while( have_rows('lodge_facilities') ) : the_row(); ?>
                    <div class="fa-block">
                        <img src="<?php echo get_sub_field('LF_icon');?>" alt="<?php echo the_title();?>">
                        <h4><?php echo get_sub_field('LF_title');?></h4>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <!-- end -->
                </div>
            </div>
        </div>
    </div>
    </div>


<?php get_footer();?> 