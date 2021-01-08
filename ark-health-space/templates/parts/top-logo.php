<?php 
    $logo = get_field('site_logo', 'options');
?>
<div id="thelogo">
    <div class="logo">
        <a href="<?php echo esc_url(home_url());?>">
        <img src="<?php echo $logo;?>" alt="<?php echo the_title();?>">
        </a>
    </div>
</div>