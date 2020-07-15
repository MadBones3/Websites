<?php 
    /* Template Name: Home */
    get_header();
?>
<!-- Home page main content parts -->
<main class="dark">
    <?php get_template_part('templates/parts/homeBanner');?>

    <div id="welcome" class="belowbanner">
        <div class="blackswipe" style="background-image: url('http://kstest.co.za/matoyafl/wp-content/uploads/2020/05/MFL_Homepage_Welcome_to_Matoya_grunge_v1-min.png');">
        <div class="wrapper">
            <div class="inner-flex">
                <div class="square textblock magic-left">
                    <h2><?php echo get_field('welcome_block_title');?></h2>
                    <div class="text"><?php echo get_field('welcome_block_content');?></div>
                </div>
                <div class="square imageblock magic-right">
                    <img src="<?php echo get_field('welcome_block_image');?>" alt="<?php the_title(); ?>">
                </div>
            </div>
        </div>
        </div>
    </div>

</main>
<main class="ligh">
    <div id="cards">
        <div class="greyswipe" style="background-image: url('http://kstest.co.za/matoyafl/wp-content/uploads/2020/05/greytexture.png');">
            <div class="wrapper contain">
                <div class="txtcenter magic">
                    <h2><?php echo get_field('card_section_title');?></h2>
                    <h4><?php echo get_field('card_section_sub-title');?></h4>
                    <div class="text"><?php echo get_field('card_section_content');?></div>
                </div>
                <div class="swiper-container cards magic">
                    <div class="swiper-wrapper">
                    <?php if ( have_rows('cards') ) : ?>
                    <?php while( have_rows('cards') ) : the_row(); ?>
                        <div class="swiper-slide card" style="background-image: url('<?php echo get_sub_field('card_background_image');?>');">
                            <h3 class="card-title"><?php echo get_sub_field('card_title');?></h3>
                            <div class="card-text"><?php echo get_sub_field('card_content');?></div>
                            <a class="card-btn" href="<?php echo get_sub_field('card_button_url');?>"><?php echo get_sub_field('card_button_text');?></a>
                        </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination custom-dots"></div>
            </div>
                    <!-- padination here -->
                    <div class="swiper-button-next swiper-button-black"></div>
                    <div class="swiper-button-prev swiper-button-black"></div>
        </div>
    </div>
    <div id="gallery">
    <?php $images = get_field('gallery_images'); ?>
        <div class="wrapper contain magic">
            <div class="txtcenter">
                <h2><?php echo get_field('gallery_section_title');?></h2>
                <div class="desc"><?php echo get_field('gallery_section_content');?></div>
            </div>
        </div>
    <?php if($images): ?> 

    <div class="gallery magic-appear"> 

        <?php foreach( $images as $image ) { ?> 

            <a href="<?php echo $image['url']; ?>" target="_blank" class="thumbnail foobox" rel="gallery" > 
            <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php the_title(); ?>" rel="lightbox" /> 
            </a> 

        <?php }; ?> 

    </div> 

    <?php endif; ?>
    </div>
</main>

<?php get_footer();?>