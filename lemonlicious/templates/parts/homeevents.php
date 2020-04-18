<?php
    $events = get_field('events', 'options');
?>
<section id="Hevents">
    <div class="shapes">
        <div data-aos="fade-down" data-aos-duration="2000" class="blueblob">
            <img src="/wp-content/themes/lemonlicious/images/blueblob.png">
        </div>
        <div data-aos="fade-down" data-aos-duration="3000" class="Bline">
            <img src="/wp-content/themes/lemonlicious/images/blackstrip1.png">
        </div>
        <div data-aos="zoom-in-down" data-aos-duration="3000" class="Glemon">
            <img src="/wp-content/themes/lemonlicious/images/greenlemon.png">
        </div>
        <div data-aos="zoom-in-down" data-aos-duration="2000" class="Rlemon">
            <img src="/wp-content/themes/lemonlicious/images/redlemon.png">
        </div>
    </div>
    <div class="wrapper">
        <h2>Upcoming Events</h2>
        <div class="container">
            <!-- Start loop -->

            <?php 
                // the query
                $the_query = new WP_Query( array(
                    'posts_per_page' => 2,
                    // 'posts_per_page' => 3,
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