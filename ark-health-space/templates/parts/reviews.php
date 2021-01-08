<div id="reviews" class="magic-appear">
<h3><?php echo get_field('re_section_title', 'options');?></h3>
<div class="wrapper">
  <!-- Swiper -->
    <div class="swiper-container reviews">
        <div class="swiper-wrapper">
        
        
        <!-- re -->
        <?php if ( have_rows('reviews', 'options') ) : ?>
            <?php while( have_rows('reviews', 'options') ) : the_row(); ?>
        
            <div class="swiper-slide">
                <div class="single-review"><?php if(get_sub_field('a_review', 'options')): the_sub_field('a_review', 'options'); endif;?></div>
            </div>
            
            <?php endwhile; ?>
        <?php endif; ?>
        <!-- end -->
        </div>

        
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

</div>
</div>