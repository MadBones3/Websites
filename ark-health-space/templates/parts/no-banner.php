<?php if(is_category()) { ?>
<div id="vs" class="nobanner" style="margin-top: 4rem;">
    <img class="element1 catebanner" src="/wp-content/themes/ark-health-space/img/elements/grey-dots.png">
    <h1>Victory Stories</h1>
    <img class="element2" src="/wp-content/themes/ark-health-space/img/elements/grey-dots.png">
</div>
<?php } elseif(is_page_template( 'templates/linkedin.php' )) { ?>
<div class="nobanner">
    <h1><?php echo the_title();?></h1>
    <img class="ele-leaves" src="/wp-content/themes/ark-health-space/img/elements/green-leaves.png">
</div>
<?php } else { ?>
<div class="nobanner">
    <img class="element1" src="/wp-content/themes/ark-health-space/img/elements/grey-dots.png">
    <h1><?php echo the_title();?></h1>
</div>
<?php } ?>