<?php
    /* Template Name: Roots */
    get_header();
?>
<section id="roots">
    <div class="at_below_header_content roots">
        <div class="left_half">
            <h1 class="giantHeadingSmall"><?php if(get_field('title_one')){ echo get_field('title_one');}?></h1><br>
            <h1 class="giantHeadingBig"><?php if(get_field('title_two')){ echo get_field('title_two');}?></h1>
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
    </section>
<?php
    get_footer();
?>

