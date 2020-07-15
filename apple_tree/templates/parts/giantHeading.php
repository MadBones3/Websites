<?php
    $align = "";
    if(get_field('heading_alignment') == "left"){
        $align = "left";
    }
    else{
        $align = "right";
    }
?>
<div class="giantHeading large-wrapper <?php echo $align;?>">
<div class="magic">
    <?php if ( get_field('giant_heading') ) : ?>
        <h2><?php echo get_field('giant_heading'); ?></h2>
    <?php endif; ?>
    </div>
</div>