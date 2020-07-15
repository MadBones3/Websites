<?php 
    $powered_by_logos = get_field('powered_by_logos');
    $tab_repeater = get_field('tabs');
    $relcount = 1;
    $relcount2 = 1;
    $idcount = 1;
    $count = 1;
    $btncount = 1;
?>
<div class="large-wrapper mespace magic">
<div class="tab">
    <?php foreach($tab_repeater as $repeat) {?>
        <button class="tablinks <?php if($relcount == 1){echo "active"; $relcount++;}?>" onclick="openTab(event, 'tab<?php echo $count++;?>')">
            <h3 class="tab-heads"><a href="#tab<?php echo $btncount++;?>"><?= $repeat['tab_title'];?></a></h3>
        </button>
    <?php } ?>
</div>

<?php if ( have_rows('tabs') ) : ?>
    <?php while( have_rows('tabs') ) : the_row(); ?>
        <div id="tab<?php echo $idcount++;?>" class="tabcontent">
            <h2><?php echo get_sub_field('section_title');?></h2>
            <p><?php echo get_sub_field('section_content');?></p>
            <div class="PL">
            <?php if ( have_rows('powered_by_logos') ) : ?>
                <p class="poweredby">Powered By:</p>
                <div class="power-logo">
                    <?php while( have_rows('powered_by_logos') ) : the_row(); ?>
                        <img class="poweredlogo" src="<?php echo get_sub_field('logo');?>"/>
                    <?php endwhile;?>
                </div>
            <?php endif; ?>
        </div>
        </div>
    <?php endwhile;?>
<?php endif; ?>
</div>
<!-- <div class="line1"></div> -->