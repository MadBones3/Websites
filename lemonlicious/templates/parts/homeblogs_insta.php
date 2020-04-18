<section id="Hblog">
    <div data-aos="fade-right" data-aos-duration="2000" class="orangeblob">
        <img src="/wp-content/themes/lemonlicious/images/orangeblob.png">
    </div>
    <div data-aos="zoom-in-up" data-aos-duration="3000" class="Ylemon">
        <img src="/wp-content/themes/lemonlicious/images/yellowlemon.png">
    </div>
    <div data-aos="zoom-in-up" data-aos-duration="3000" class="Bline">
        <img src="/wp-content/themes/lemonlicious/images/blackstrip1.png">
    </div>
    <div data-aos="zoom-in" data-aos-duration="2000" class="Greenblob">
        <img src="/wp-content/themes/lemonlicious/images/greenblob.png">
    </div>
    <div data-aos="zoom-in" data-aos-duration="3000" class="Ydot">
        <img src="/wp-content/themes/lemonlicious/images/yellowdot1.png">
    </div>
    <div class="wrapper">
        <h2>The Latest Squeeze</h2>
        <?php 
        // the query
        $the_query = new WP_Query( array(
            'posts_per_page' => 1,
            // 'posts_per_page' => 2,
        )); 
        ?>
        <div class="container">
        <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <a href="<?php the_permalink();?>">
                <div data-aos="fade-down" data-aos-duration="2000" class="Bsingle">
                    <div class="Bimg">
                        <img src="<?php the_post_thumbnail_url();?>">
                    </div>
                    <div class="archivePost">
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo wp_trim_words(get_the_content(), 50, '...');?></p>
                        <p class="read">Read more...</p>
                    </div>
                </div>
            </a>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p><?php __('No Latest Squeeze'); ?></p>
        <?php endif; ?>

        </div>
        <div id="instagram">
            <h2>Follow us on Instagram</h2>
            <div data-aos="zoom-in-down" data-aos-duration="2000" class="feed">
                <?php echo do_shortcode('[jr_instagram id="2"]') ?>
            </div>
        </div>
    </div>
</section>