<?php 
    /* Template Name: LocalEvents */
    get_header();
?>

<?php
// Banner
    $local_banner_title = get_field('local_banner_title');
    $local_banner_title_2 = get_field('local_banner_title_2');
    $local_banner_heading_color_1 = get_field('local_banner_heading_color_1');
    $local_banner_heading_color_2 = get_field('local_banner_heading_color_2');
    $local_banner_image = get_field('local_banner_image');
// Local events
// Gallery
    $local_gallery = get_field('local_gallery');
?>
<main>

    <section id="local_banner">
        <div class="sectioncolor">
            <div class="wrapper">
                <div class="banner">
                    <div class="content">
                        <h1>
                        <?php if($local_banner_title) : ?>
                            <span style="color:<?= $local_banner_heading_color_1; ?>"><?= $local_banner_title; ?></span>
                        <?php endif;?>
                        <?php if($local_banner_title_2) : ?>
                            <span style="color:<?= $local_banner_heading_color_2; ?>" ><?= $local_banner_title_2; ?></span>
                        <?php endif;?>    
                        </h1>
                    </div>
                    <div class="square">
                        <span></span>
                        <div class="content">
                            <div class="Sone"></div>
                            <img src="<?= $local_banner_image;?>">
                            <div class="Stwo"></div>
                            <div class="Slem"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="local_market">
    <div class="shapes">
        <div data-aos="fade-left" data-aos-duration="2000" class="blueblob">
            <img src="/wp-content/themes/lemonlicious/images/blueblob.png">
        </div>
    </div>
        <div class="wrapper">
            <h2>Upcoming Events</h2>
            <div class="container">
                <!-- Start loop -->

                <?php 
                    // the query
                    $the_query = new WP_Query( array(
                        'posts_per_page' => 3,
                        'post_type'   => 'events',
                        'post_status' => 'publish',
                    )); 
                ?>

                <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <?php
                        $date = get_field('date_picker');
                        $day = substr($date,0,2);
                        $month = substr($date,3,6);
                        $event_address = get_field('event_address');
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
                            <div class="time"> <p><?php the_field('start_time_picker'); ?> - <?php the_field('end_time_picker'); ?></p> </div>
                            <div class="address"> <p><?= $event_address; ?></p> </div>
                            <div class="description"> <p><?php echo wp_trim_words(get_the_content(), 20, '...');?></p> </div>
                            <p class="read">Read more...</p>
                        </div>
                    </a>
                        
                    <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

                <?php else : ?>
                <p><?php __('No Upcoming Events'); ?></p>
                <?php endif; ?>
                <!-- end loop -->
            </div>
        </div>
    </section>

    <section id="local_gallery">
        <div class="wrapper">
            <h2>Gallery</h2>
            <div class="masonry">
            <?php foreach($local_gallery as $local){ ?>
                <div data-aos="fade-down" data-aos-duration="2000" class="brick">
                    <a class="foobox" rel="gallery" href="<?= $local['local_image']; ?>"><img src="<?= $local['local_image']; ?>"></a>
                </div>
            <?php }?>
            </div>

        </div>
    </section>

</main>

<?php get_footer();?>