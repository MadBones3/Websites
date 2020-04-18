<?php 
    get_header();
?>
<?php
	$term = get_queried_object(); 
    $event_banner_image = get_field('event_banner_image','options',$term);
    $event_address = get_field('event_address');
    
?>

<main id="archive-events" class="padtop10">
    <!-- banner -->
    <div class="sectioncolor">
        <div class="wrapper">
            <div class="banner">
                <div class="content">
                    <h1>Local Events</h1>
                </div>
                <div class="square">
                    <span></span>
                    <div class="content">
                        <div class="Sone"></div>
                        <img src="<?= $event_banner_image;?>">
                        <div class="Stwo"></div>
                        <div class="Slem"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end banner -->
    <section>
        <div class="wrapper allPostsWrap">
        <div class="container">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>	

            <?php
                $date = get_field('date_picker');
                $day = substr($date,0,2);
                $month = substr($date,3,6);
            ?>
            
                <a data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="50" class="singleevent" href="<?php the_permalink();?>">
                    <div class="date">
                        <p><?= $day;?></p>
                        <p><?= $month;?></p>
                    </div>
                    <div class="innercontainer">
                        <div class="imager">
                            <img src="<?php the_post_thumbnail_url();?>">
                        </div>
                        <h3><?php the_title(); ?></h3>
                        <div class="time"> <p><?php the_field('start_time_picker'); ?> - <?php the_field('end_time_picker'); ?></p></div>
                        <div class="address"> <p><?= $event_address; ?> </p></div>
                        <div class="description"> <p><?php echo wp_trim_words(get_the_content(), 20, '...');?></p></div>
                        <p class="read">Read more...</p>
                    </div>
                </a>

            <?php endwhile; endif; ?>
        </div>
        </div>
        <div class="wrapper pagination">
            <div class="nav-next alignleft"><?php previous_posts_link( '<i class="fas fa-chevron-left"></i> Newer posts' ); ?></div>
            <div class="nav-previous alignright"><?php next_posts_link( 'Older posts <i class="fas fa-chevron-right"></i>' ); ?></div>
        </div>
    </section>
</main>

<?php get_footer();?>
<div class="imager">
    <a href="<?php the_permalink();?>" style="background-image: url('<?php the_post_thumbnail_url();?>');"></a>
</div>
<div class="archivePost">
    <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
    <?php the_excerpt();?>
    <h4><a href="<?php the_permalink();?>">Read More...</a></h4>
</div>