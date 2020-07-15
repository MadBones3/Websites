<?php /* Template Name: home */?>
<?php get_header()?>
<div id="home">
    <div class="bannerContent">
        <div class="bikeHalf">
            <img class="bicycle" src="<?php echo get_field('banner_illustration', 'options');?>"/>
        </div>
        <div class="content">
            <h1>
                <span class="small"><?php if(get_field('smaller_text', 'options')): echo get_field('smaller_text', 'options'); endif;?></span>
                <span class="big"><?php if(get_field('main_heading', 'options')): echo get_field('main_heading', 'options'); endif;?></span>
            </h1>
            <div class="conAndBut">
                <p>
                    <?php if(get_field('sub_heading', 'options')): echo get_field('sub_heading', 'options'); endif;?>
                </p>
                <?php
                    $link = get_field('link', 'options');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                    endif;
                ?>
                <a class="outerBorderBut" href="http://kstest.co.za/apple-tree/contact/"><?php echo $link_title?></a>
            </div>
        </div>
        <span class="giantText">thrive</span>
    </div>
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php the_content();?>
    <?php endwhile; endif;?>

    <!-- Recent Blogs -->
    <div class="homeblog">
    <!-- <div class="line1"></div> -->
        <div class="large-wrapper magic">
            <span class="giantInspire">Blog</span>
        </div>
    </div>
    <section id="blog">
        
    <div class="large-wrapper magic">
        <?php 
            $args = array(
            'numberposts' 	=> 3
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
            <a class="outerBorderBut" href="<?php echo home_url();?>/blog">See more blogs</a>
        </div>
        <!-- <div class="line1"></div> -->
    </section>
</div>
<?php get_footer()?>