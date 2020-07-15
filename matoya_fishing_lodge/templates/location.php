<?php 
    /* Template Name: Location */
    get_header();
?>
<div id="location">
    <main class="dark">
        <?php get_template_part('templates/parts/heroBanner');?>
        <div class="location">
            <div class="blackswipe" style="background-image: url('http://kstest.co.za/matoyafl/wp-content/uploads/2020/05/MFL_Homepage_Welcome_to_Matoya_grunge_v1-min.png');">
                <div class="content">
                    <div class="wrapper">
                        <h2><?php echo get_field('LL_section_title');?></h2>
                        <div class="txt"><?php echo get_field('LL_content');?></div>
                    </div>
                </div>
                <div class="map">
                    <div class="wrapper">
                        <div class="flex">
                            <div class="image magic-left">
                                <img src="<?php echo get_field('image_map');?>" alt="<?php echo the_title();?>">
                            </div>
                            <div class="gmap magic-right"><?php echo get_field('map_iframe');?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $counter = 1;?>
    <main class="light">
        <div class="ways">
            <div class="whiteswipe" style="background-image: url('http://kstest.co.za/matoyafl/wp-content/uploads/2020/05/white_grunge.png');">
                <div class="ways-content">
                    <div class="wrapper magic">   
                        <h3><?php echo get_field('three_ways_tilte');?></h3>
                        <!-- re -->
                        <?php if ( have_rows('three_ways') ) : ?>
                        <?php while( have_rows('three_ways') ) : the_row(); ?>
                        <div id="part<?php echo $counter++; ?>" class="ways-repeater">
                            <div class="way-image magic-left">
                                <img src="<?php echo get_sub_field('ways_image');?>" alt="">
                            </div>
                            <div class="block magic-right">
                                <div class="number"><?php echo get_sub_field('way_number');?></div>
                                <h3><?php echo get_sub_field('ways_title');?></h3>
                                <div class="text"><?php echo get_sub_field('ways_content');?></div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <!-- en -->
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php get_footer();?>