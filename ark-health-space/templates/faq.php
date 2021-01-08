<?php 
    /* Template Name: FAQ */
    get_header();
?>
<?php get_template_part('templates/parts/banner');?>

<main id="FAQ">
    <div class="container">
        <div class="wrapper">
            <div class="accordian">
                <ul class="accordian-list accordian-drop">
                    <!--  re    -->
                    <?php if ( have_rows('faq') ) : ?>
                    <?php while( have_rows('faq') ) : the_row(); ?>
                    <li class="default">
                        <div class="drop-title">
                            <h5><?php echo get_sub_field('faq_question');?></h5>
                            <span><i class="fas fa-chevron-down"></i></span>
                        </div>
                        <ul class="menu-text">
                            <li><?php echo get_sub_field('faq_answer');?></li>
                        </ul>
                    </li>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <!-- end -->
                </ul>
            </div>
        </div>
    </div>
</main>
    
    
<?php get_template_part('templates/parts/reviews');?>
<?php get_footer();?>