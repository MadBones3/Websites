<?php
    /* Template Name: Apple Tree */
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
        <div class="at_content magic">
            <?php the_content(); ?>
        </div>
    <?php endwhile; endif;?>

    
<?php
    get_footer();
?>