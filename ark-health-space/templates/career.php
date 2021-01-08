<?php 
    /* Template Name: career development */
    get_header();
?>
<?php get_template_part('templates/parts/banner');?>

<main id="career"> 
<?php get_template_part('templates/parts/quote');?>
    <div class="wrapper">
        <div class="four-blocks">
            <!-- re -->
            <?php if ( have_rows('cd_blocks') ) : ?>
            <?php while( have_rows('cd_blocks') ) : the_row(); ?>
            <?php 
            $link = get_sub_field('cd_b_link');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
            endif;?>
            <a class="block magic" href="<?= $link_url;?>" style="background-image: url('<?php echo get_sub_field('cd_b_image');?>');">
                <div class="overlay"></div>
                <div><?php echo get_sub_field('cd_b_title');?></div>
            </a>
            <?php endwhile; ?>
            <?php endif; ?>
            <!-- end -->
        </div>
    </div>
    <div class="wrapper magic">
        <div class="pharse">
            <i class="fas fa-arrow-down"></i>
            <i class="fas fa-arrow-right"></i>
            <div class="the-pharse"><?php echo get_field('cd_phrase_content');?></div>
            <i class="fas fa-arrow-left"></i>
            <i class="fas fa-arrow-up"></i>
        </div>
    </div>

</main>
    
    
<?php get_template_part('templates/parts/reviews');?>
<?php get_footer();?>