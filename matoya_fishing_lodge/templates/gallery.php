<?php 
    /* Template Name: Gallery */
    get_header();
?>
<?php
    // $best = get_field('bb_gallery');
    // $mfl = get_field('mfl_gallery');
    // $fish = get_field('f_gallery');
    // $me = get_field('me_gallery');

?>
<main class="dark">
<?php get_template_part('templates/parts/heroBanner');?>
<div id="gallerySection" class="belowbanner">
    <div class="blackswipe" style="background-image: url('http://kstest.co.za/matoyafl/wp-content/uploads/2020/05/MFL_Homepage_Welcome_to_Matoya_grunge_v1-min.png');">
        <div class="padtop200">
            <section class="wrapper">
                <div class="w3-bar w3-black">
                    <button class="w3-bar-item w3-button" onclick="openCity('video')"><a href="#video">Videos</a></button>
                    <button class="w3-bar-item w3-button" onclick="openCity('best')"><a href="#best">Best of the Best</a></button>
                    <button class="w3-bar-item w3-button" onclick="openCity('mfl')"><a href="#mfl">Matoya Fishing Lodge</a></button>
                    <button class="w3-bar-item w3-button" onclick="openCity('fish')"><a href="#fish">Fishing</a></button>
                    <button class="w3-bar-item w3-button" onclick="openCity('me')"><a href="#me">Mobile Experience</a></button>
                </div>
            </section>  
        </div>
    </div>
    </div>
</main>
<main class="light">
<div id="gallerySection">
<div class="whitestripe" style="background-image: url('http://kstest.co.za/matoyafl/wp-content/uploads/2020/06/short_white_grunge.png');"></div>
    <section class="wrapper">
        <!--  -->
        <div id="video" class="tab magic" >
            <?php if ( get_field('vid_heading') ) : ?>
                <h3><?php echo get_field('vid_heading'); ?></h3>
            <?php endif; ?>
            <?php if ( have_rows('videos') ) : ?>
                <?php while( have_rows('videos') ) : the_row(); ?>
                    <div class="vid">
                        <?php the_sub_field('video_url'); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <!--  -->
        <div id="best" class="tab" style="display:none">
            <?php if ( get_field('bb_heading') ) : ?>
                <h3><?php echo get_field('bb_heading'); ?></h3>
            <?php endif; ?>
            <?php echo do_shortcode('[foogallery id="701"]')?>
        </div>
        <!--  -->
        <div id="mfl" class="tab" style="display:none">
            <?php if ( get_field('mfl_heading') ) : ?>
                <h3><?php echo get_field('mfl_heading'); ?></h3>
            <?php endif; ?>
            <?php echo do_shortcode('[foogallery id="703"]')?>
        </div>
        <!--  -->
        <div id="fish" class="tab" style="display:none">
            <?php if ( get_field('f_heading') ) : ?>
                <h3><?php echo get_field('f_heading'); ?></h3>
            <?php endif; ?>
            <?php echo do_shortcode('[foogallery id="704"]')?>
        </div>
        <!--  -->
        <div id="me" class="tab" style="display:none">
            <?php if ( get_field('me_heading') ) : ?>
                <h3><?php echo get_field('me_heading'); ?></h3>
            <?php endif; ?>
            <?php echo do_shortcode('[foogallery id="705"]')?>
        </div>
    </section>
</div>
<div id="coupon">
    <div class="greystripe" style="background-image: url('http://kstest.co.za/matoyafl/wp-content/uploads/2020/05/greytexture.png');">
        <div class="wrapper">
            <div class="fishtube magic">
                <h3><?php echo get_field('coupon_section_title'); ?></h3>
                <div class="ftcont"><?php echo get_field('ft_content');?></div>
                <a class="btn" href="<?php echo get_field('coupon_button_url'); ?>" target="_blank"><?php echo get_field('coupon_button_text'); ?></a>
            </div>
        </div>
    </div>
</div>
</main>
<script>
    function openCity(cityName) {
        var i;
        var x = document.getElementsByClassName("tab");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        document.getElementById(cityName).style.display = "flex";
    }
</script>
<?php get_footer();?>

