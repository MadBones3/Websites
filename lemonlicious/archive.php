<?php 
    get_header();
?>
<?php
	$term = get_queried_object(); 
    $archive_banner_image = get_field('archive_banner_image',$term);
?>

<main id="archive" class="padtop10">
    <!-- banner -->
    <div class="sectioncolor">
        <div class="wrapper">
            <div class="banner">
                <div class="content">
                    <h1>Let’s talk lemons</h1>
                </div>
                <div class="square">
                    <span></span>
                    <div class="content">
                        <div class="Sone"></div>
                        <img src="<?= $archive_banner_image;?>">
                        <div class="Stwo"></div>
                        <div class="Slem"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end banner -->
    <section style="position: relative;">
    <div data-aos="fade-right" data-aos-duration="2000" class="orangeblob">
        <img src="/wp-content/themes/lemonlicious/images/orangeblob.png">
    </div>
    <div data-aos="fade-up-right" data-aos-duration="2000" class="Ylemon">
        <img src="/wp-content/themes/lemonlicious/images/yellowlemon.png">
    </div>
    <div data-aos="fade-up-right" data-aos-duration="3000" class="Bline">
        <img src="/wp-content/themes/lemonlicious/images/blackstrip1.png">
    </div>
        <div class="wrapper allPostsWrap">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
            <div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="50" class="archive-wrap">
                <div class="imager">
                    <a href="<?php the_permalink();?>" style="background-image: url('<?php the_post_thumbnail_url();?>');"></a>
                </div>
                <div class="archivePost">
                    <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                    <p><?php echo wp_trim_words(get_the_content(), 50, '...');?></p>
                    <p class="read"><a href="<?php the_permalink();?>">Read more...</a></p>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
        <div class="wrapper pagination">
            <div class="nav-next alignleft"><?php previous_posts_link( '<i class="fas fa-chevron-left"></i> Newer posts' ); ?></div>
            <div class="nav-previous alignright"><?php next_posts_link( 'Older posts <i class="fas fa-chevron-right"></i>' ); ?></div>
        </div>
    </section>
</main>

<?php get_footer();?>