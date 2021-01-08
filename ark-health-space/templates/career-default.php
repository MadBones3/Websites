<?php 
/* Template Name: Career Default template */
get_header();
?>

<?php get_template_part('templates/parts/no-banner');?>
<main id="cv">
    <section class="cvTop">
        <div class="wrapper">
            <div class="cv--container">
                <div class="cv--contarea magic-left">
                <?php if(get_field('cv_title')) { ?>
                    <h3><?php echo get_field('cv_title');?></h3>
                <?php } ?>
                    <div class="content"><?php echo get_field('cv_content');?></div>
                </div>
                <div class="cv--img magic-right">
                    <img class="element1" src="/wp-content/themes/ark-health-space/img/elements/green-slash.png">
                    <img src="<?php echo get_field('cv_image');?>" alt="<?php echo the_title();?>">
                </div>
            </div>
        </div>
    </section>
    <section class="cvGal">
    <?php $images = get_field('cv_gallery'); ?>
    <?php if($images): ?>
        <div class="gallery magic-down"> 
            <?php foreach( $images as $image ) { ?> 
                <a href="<?php echo $image['url']; ?>" target="_blank" class="thumbnail foobox" rel="gallery" > 
                    <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php the_title(); ?>" rel="lightbox" /> 
                </a>
            <?php }; ?>
        </div>
    <?php endif; ?>
    </section>
<!-- form -->
    <div class="beige">
        <div class="wrapper">
            <div class="cont-form magic-down">
                <h3><?php echo get_field('car-def_form_title');?></h3>
                <div class="short-form"><?php echo get_field('car-def_form_shortcode');?></div>
            </div>
        </div>
    </div>
</main>

<?php get_footer();?>