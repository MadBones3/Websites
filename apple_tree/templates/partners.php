<?php
    /* Template Name: Partners */
    get_header();
?>
<?php
    $add_partner = get_field('add_partner');
?>
<section id="partner">
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

    <div class="magic">
        <div class="partner-flex">
        <?php foreach($add_partner as $partner) {  
            
        ?>
            <div class="content-flex">
                <img src="<?= $partner['logo_partner'];?>">
                <?php if($partner['title_partner']) :?>
                    <h1><?= $partner['title_partner'];?></h1>
                <?php endif;?>
                <div><?= $partner['content_partner'];?></div>
            </div>
        <?php }?>
        </div>
    </div>
    <div class="line1"></div>

</section>
<?php
    get_footer();
?>
