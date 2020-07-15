<?php
    /* Template Name: Blog */
    get_header();
?>
 <?php 
    // ACF
    $author_image = get_field('author_image');
    // ACF Taxonomy
    $terms = get_field('blog_category_tax');
    $count = 0;
    
?>

<!-- <div class="at_below_header_content roots">
    <div class="left_half"></div>
    <div class="bikeHalf">
        <img class="bicycle" src="<?php //echo home_url();?>/wp-content/uploads/2020/03/bicycle.png"/>
    </div>
</div> -->

<!-- Blog code -->
<section id="blog">

    <?php foreach( $terms as $term ) { ?>
        <div class="large-wrapper">
            <div class="blog-cat <?php echo (++$count%2 ? "odd" : "even")?>">
                <h1 class="giantHeadingSmall"><?php echo "Blogs"; ?></h1><br>
                <h1 class="giantHeadingBig"><?php echo get_cat_name( $term );?></h1>
            </div>
        </div>
        <div class="txt-center">
            <p><?php echo category_description( $term ); ?></p>
        </div>
        <div class="large-wrapper magic">
            <?php 
                $args = array(
                'numberposts' 	=> 3,
                    'category'      => $term
                );
                
                $latest_posts = get_posts( $args );

                foreach ( $latest_posts as $post ) { ?>
                <a class="singlepost" href="<?php echo the_permalink($post);?>">
                    <div class="innercontainer">
                        <div class="imager">
                            <img src="<?php the_post_thumbnail_url();?>">
                        </div>
                        <div class="pad20">
                            <div class="author"><img src="<?php echo get_field('author_image');?>"></div>
                            <h3><?php echo $post->post_title;?></h3>
                            <div class="description"><p><?php echo wp_trim_words($post->post_content, 20, '...');?></p></div>
                            <p class="read">Read more</p>
                        </div>
                    </div>
                </a>
                    
                <?php }
            ?>
            
        </div>
        <div class="more">
            <a class="outerBorderBut" href="<?php echo esc_url( get_term_link( $term ) );?>">See more articles</a>
        </div>
        <!-- <div class="line1"></div> -->
    <?php } ?>
</section>
 
<?php
    get_footer();
?>
