<?php 
/* Template Name: About page */
get_header();
?>

<?php get_template_part('templates/parts/banner');?>

<main id="about">
    <section class="mission">
        <div class="wrapper">
        <!-- rep -->
        <?php if ( have_rows('mission_block') ) : ?>
        <?php while( have_rows('mission_block') ) : the_row(); ?>
            <div class="mission--container">
                <div class="mission--contarea magic-left">
                    <h3><?php echo get_sub_field('mb_title');?></h3>
                    <div class="content"><?php echo get_sub_field('mb_content');?></div>
                </div>
                <div class="mission--img magic-right">
                    <img src="<?php echo get_sub_field('mb_image');?>" alt="<?php echo the_title();?>">
                </div>
            </div>
        <?php endwhile; ?>
        <?php endif; ?>
        <!-- end -->
        </div>
    </section>
    <section class="team">
        <div class="wrapper magic-down">
            <h3>Meet the team</h3>
            <div class="team--container">
            <!-- rep -->
            <?php if ( have_rows('member') ) : ?>
            <?php while( have_rows('member') ) : the_row(); ?>
                <div class="team--member">
                    <div class="team--img">
                        <img src="<?php echo get_sub_field('tm_image');?>" alt="<?php echo the_title();?>">
                        <div class="team--contarea">
                            <h3><?php echo get_sub_field('tm_name');?></h3>
                            <div class="content"><?php echo get_sub_field('tm_description');?></div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <!-- end -->  
            </div>          
        </div>
    </section>
</main>
<?php get_template_part('templates/parts/reviews');?>
<?php get_footer();?>