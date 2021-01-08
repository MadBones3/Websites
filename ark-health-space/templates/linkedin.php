<?php 
/* Template Name: linkedin template */
get_header();
?>

<?php get_template_part('templates/parts/no-banner');?>
<main id="linkedin">
    <section class="linkTop">
        <div class="wrapper">
            <div class="linkTop--container">
                <div class="linkTop--contarea magic-left">
                <?php if(get_field('linkedin_title')) { ?>
                    <h3><?php echo get_field('linkedin_title');?></h3>
                <?php } ?>
                    <div class="content"><?php echo get_field('linkedin_content');?></div>
                </div>
                <div class="linkTop--img magic-right">
                    <img src="<?php echo get_field('linkedin_image');?>" alt="<?php echo the_title();?>">
                </div>
            </div>
        </div>
    </section>
    <section class="linkMid">
        <div class="wrapper">
            <div class="linkMid--contarea magic-zoom">
            <?php if(get_field('linkedin_mid_title')) { ?>
                <h3><?php echo get_field('linkedin_mid_title');?></h3>
            <?php } ?>
                <div class="content"><?php echo get_field('linkedin_mid_content');?></div>
            </div>
        </div>
    </section>
    <section class="linkBot">
        <div class="wrapper">
            <div class="linkBot--container">
                <div class="linkBot--img magic-left">
                    <img class="element3" src="/wp-content/themes/ark-health-space/img/elements/pink-dots.png">
                    <img src="<?php echo get_field('linkedin_bot_image');?>" alt="<?php echo the_title();?>">
                </div>
                <div class="linkBot--contarea magic-right">
                <?php if(get_field('linkedin_bot_title')) { ?>
                    <h3><?php echo get_field('linkedin_bot_title');?></h3>
                <?php } ?>
                    <div class="content"><?php echo get_field('linkedin_bot_content');?></div>
                </div>
            </div>
        </div>
    </section>
<!-- form -->
    <div class="beige">
        <div class="wrapper">
            <div class="cont-form magic-down">
                <h3><?php echo get_field('linkedin_form_title');?></h3>
                <div class="short-form"><?php echo get_field('linkedin_form_shortcode');?></div>
            </div>
        </div>
    </div>
</main>

<?php get_footer();?>