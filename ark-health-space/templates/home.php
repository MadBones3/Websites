<?php 
    /* Template Name: Home page */
    get_header();
?>
<?php get_template_part('templates/parts/banner');?>

<div id="home">
    <div class="wrapper">
        <div class="the-blocks">
            <!-- rep -->
            <?php if ( have_rows('blocks') ) : ?>
            <?php while( have_rows('blocks') ) : the_row(); ?>
            <?php 
                $link = get_sub_field('block_link');
                $bg = get_sub_field('block_image');
            ?>
            <?php if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
            endif;?>
                <a class="block button magic-right" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" style="background-image: url('<?php echo esc_url( $bg ); ?>')" >
                    <div class="overlay"></div>
                    <h3 class="inner-title"><?php echo esc_html( $link_title ); ?></h3>
                </a>
            <?php endwhile; ?>
            <?php endif; ?>
            <!-- end -->
        </div>
    </div>
    <!-- mail -->
    <div class="mail-strip" style="background-color:<?php echo get_field('mail_background_color');?>">
        <div class="wrapper">
            <div class="mail magic-down">
                <h3><?php echo get_field('ml_title');?></h3>
                <div class="shortcode"><?php echo get_field('mailing_list');?></div>
            </div>            
        </div>
    </div>
    <!-- quote -->
<?php get_template_part('templates/parts/quote');?>
    <!-- insta -->
    <div class="instagram magic-left" style="background-color:<?php echo get_field('insta_background_color');?>">
        <div class="wrapper">
            <h3><?php echo get_field('instagram_title');?></h3>
            <div class="shortcode">
                <?php echo do_shortcode('[jr_instagram id="2"]') ?>
            </div>
        </div>
    </div>
</div>
<?php get_template_part('templates/parts/reviews');?>
<?php get_footer();?>