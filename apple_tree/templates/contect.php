<?php
    /* Template Name: contact */
    get_header();
?>
    <div class="at_below_header_content">
        <div class="left_half">
            <h1 class="giantHeading"><?php the_title(); ?></h1>
        </div>
        <div class="bikeHalf">
            <img class="bicycle" src="<?php echo get_field('illustration');?>"/>
        </div>
    </div>
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <div class="large-wrapper at_content magic padmobile">
            <?php the_content(); ?>
        </div>
    <?php endwhile; endif;?>
        <!-- <div class="line1 contactline"></div> -->

    
<?php
    get_footer();
?>