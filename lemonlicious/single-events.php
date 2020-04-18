<?php 
    get_header();
?>

<?php 
    $date = get_field('date_picker');
    $Tstart = get_field('start_time_picker');
    $Tend = get_field('end_time_picker');
    $address = get_field('event_address');
?>

<main id="single-event" class="padtop10">

<div data-aos="fade-up-right" data-aos-duration="2000" class="YlemonR">
    <img src="/wp-content/themes/lemonlicious/images/yellowlemon.png">
</div>
<div data-aos="fade-up-right" data-aos-duration="3000" class="BlineR">
    <img src="/wp-content/themes/lemonlicious/images/blackstrip1.png">
</div>
<div data-aos="fade-up-left" data-aos-duration="2000" class="RlemonL">
    <img src="/wp-content/themes/lemonlicious/images/redlemonnodots.png">
</div>
<div data-aos="fade-up-left" data-aos-duration="3000" class="BlineL">
    <img src="/wp-content/themes/lemonlicious/images/bluestripe.png">
</div>
            
    <div class="wrapper padtop10 padbot10">
        <div class="inner-wrap">

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <!-- post thumbnail -->
                <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                    <div class="imgwrap">
                        <?php the_post_thumbnail(); // Fullsize image for the single post ?>
                    </div>
                <?php endif; ?>
                <!-- /post thumbnail -->
                <div class="container">
                    <div class="details">
                        <h3>Date: <span><?= $date; ?></span></h3>
                        <h3>Time: <span><?= $Tstart;?> - <?= $Tend;?></span></h3>
                        <h3>Address: <span><?= $address; ?></span></h3>
                    </div>

                    <div class="singleContent">
                        <?php the_content(); // Dynamic Content ?>
                    </div>
                </div>
            </article>
            <!-- /article -->
        <?php endwhile; endif; ?>

        </div>
    </div>
    
    
</main>

<?php get_footer();?>