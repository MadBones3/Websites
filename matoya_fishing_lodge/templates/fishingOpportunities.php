<?php 
    /* Template Name: fishOpportunities */
    get_header();
?>
<main class="dark">
    <?php get_template_part('templates/parts/heroBanner');?>

    <div id="belowbanner" class="belowbanner">
        <div class="blackswipe" style="background-image: url('http://kstest.co.za/matoyafl/wp-content/uploads/2020/05/MFL_Homepage_Welcome_to_Matoya_grunge_v1-min.png');">
        <div class="wrapper">
            <div class="section-content">
                <h2><?php echo get_field('bb_title');?></h2>
                <div class="textarea"><?php echo get_field('bb_content');?></div>
            </div>
        </div>

        <div id="double-gallery" class="magic">
        <?php $images = get_field('bb_gallery'); ?>
        <?php if($images): ?> 

            <div class="wrapper">
                <div class="double-gallery"> 
                    <div class="swiper-container tworow">
                        <div class="swiper-wrapper">
                        <?php foreach( $images as $image ) { ?> 
                            <div class="swiper-slide">
                                <a href="<?php echo $image['url']; ?>" target="_blank" class="thumbnail foobox" rel="gallery"> 
                                    <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php the_title(); ?>" /> 
                                </a> 
                            </div>
                        <?php }; ?>
                        </div>
                    </div> 
                    <!-- Add Pagination -->
                    <div class="swiper-pagination custom-dots"></div>
                </div>
            </div> 

        <?php endif; ?>
        <!-- Add Arrows -->
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
        </div>

        </div>
    </div>
    
</main>
<?php $counter = 1;?>
<main class="ligh">
    <div id="species">
        <div class="whitestripe" style="background-image: url('http://kstest.co.za/matoyafl/wp-content/uploads/2020/05/white_grunge.png');">
            <div class="wrapper">
                <div class="species-content">
                    <h2 class="magic"><?php echo get_field('sp_section_title');?></h2>
                    <!-- re -->
                    <?php if ( have_rows('species') ) : ?>
                    <?php while( have_rows('species') ) : the_row(); ?>
                        <div id="part<?php echo $counter++; ?>" class="species-repeater">
                            <div class="species-image magic-left">
                                <img src="<?php echo get_sub_field('specie_image');?>" alt="">
                            </div>
                            <div class="species-text magic-right">
                                <div class="number"><?php echo get_sub_field('specie_number');?></div>
                                <h3><?php echo get_sub_field('specie_title');?></h3>
                                <div class="text"><?php echo get_sub_field('specie_content');?></div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <!-- end -->
                </div>
            </div>
        </div>
    </div>
    <div id="season">
        <div class="greystripe" style="background-image: url('http://kstest.co.za/matoyafl/wp-content/uploads/2020/05/greytexture.png');">
            <div class="wrapper">
                <div class="season-content magic">
                    <h3><?php echo get_field('sea_section_title');?></h3>
                    <div class="flex">
                        <!-- re -->
                        <?php if ( have_rows('season') ) : ?>
                        <?php while( have_rows('season') ) : the_row(); ?>
                            <div class="season-repeater">
                                <h4><?php echo get_sub_field('season_title');?></h4>
                                <h5><?php echo get_sub_field('season_months');?></h5>
                                <div class="season-image">
                                    <img src="<?php echo get_sub_field('season_image');?>" alt="">
                                </div>
                                <div class="season-text"><?php echo get_sub_field('season_description');?></div>
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <!-- end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="equip">
        <div class="wrapper">
            <div class="top-content magic">
                <h2><?php echo get_field('eq_section_title');?></h2>
                <h4><?php echo get_field('eq_subtitle');?></h4>
                <div class="txt"><?php echo get_field('eq_content');?></div>
            </div>
            <div class="supplied-flex">
                <!-- re -->
                <?php if ( have_rows('supplied') ) : ?>
                <?php while( have_rows('supplied') ) : the_row(); ?>
                <div class="supplied-contain">
                    <div class="image magic-left">
                        <img src="<?php echo get_sub_field('supp_image');?>" alt="<?php echo the_title();?>">
                    </div>
                    <div class="supplied-content magic-right">
                        <h3><?php echo get_sub_field('supp_title');?></h3>
                        <div class="content"><?php echo get_sub_field('supp_content');?></div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
                <!-- end -->
            </div>
        </div>
    </div>
</main>

<?php get_footer();?>