<?php
    /* Template Name: Services */
    get_header();
?>
<?php
    $formT = get_field('form_title');
    $form = get_field('the_form');
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
        <div class="at_content large-wrapper magic">
            <?php the_content(); ?>
        </div>
    <?php endwhile; endif;?>
    <? if(get_field('tabs')) :?>
        <?php get_template_part('templates/parts/service_tabs');?>
    <?php endif;?>

    <div class="large-wrapper magic">
        <div class="innerC">
            <h1 class="giantHeadingSmall"><?= $formT;?></h1>
            <div class="instered"><?= $form;?></div>
        </div>
    </div>
        <!-- <div class="line1"></div> -->
<?php
    get_footer();
?>