<?php 
    $b_image = get_field('banner_image');
    $b_text = get_field('banner_text');
    $b_text_color = get_field('banner_text_color');
?>
<?php if(is_front_page()) {?>
    <section class="hbanner" style="background-image: url('<?php if($b_image) : echo esc_url( $b_image ); endif; ?>')">
        <div class="hbanner-text" style="color: <?php echo $b_text_color; ?>">
            <div class="hbanner-block">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <?php echo $b_text;?>
            </div>
        </div>
    </section>
<?php } elseif (is_shop()) { ?>
    <section class="banner" style="background-image: url('<?php echo esc_url('https://arkhealthspace.com/wp-content/uploads/2020/07/kaboompics_Waves-crashing-over-rocks-on-the-beach-scaled.jpg'); ?>')">
        <div class="banner-text magic-down">
            <h1 style="color: #ffffff">Shop</h1> 
        </div>
    </section>
<?php } elseif (is_product_category()) { ?>
    <?php  
        global $wp_query;
        $cat = $wp_query->get_queried_object();
        $prod_banner = get_field('prod_category_banner', $cat);
    ?>
    <section class="banner" style="background-image: url('<?php echo esc_url($prod_banner); ?>')">
        <div class="banner-text magic-down">
            <h1 style="color: #ffffff"><?php echo $cat->name;?></h1> 
        </div>
    </section>
<?php } elseif (is_single()) { ?>
    <section class="banner" style="background-image: url('<?php the_post_thumbnail_url();?>')">
        <div class="banner-text magic-down">
            <h1 style="color: #ffffff"><?php the_title(); ?></h1> 
        </div>
    </section>
<?php } else { ?>
    <section class="banner" style="background-image: url('<?php if($b_image) { echo esc_url( $b_image ); } else { echo esc_url('https://arkhealthspace.com/wp-content/uploads/2020/07/kaboompics_Waves-crashing-over-rocks-on-the-beach-scaled.jpg'); } ?>')">
        <div class="banner-text magic-down" style="color: <?php echo $b_text_color; ?>">
        <?php if($b_text) { 
            echo $b_text; 
            } else { ?> 
            <h1 style="color: <?php echo ( $b_text_color ? $b_text_color : "#ffffff"); ?>"><?php echo the_title();} ?></h1> 
        </div>
    </section>
<?php } ?>