<?php
    /* Template Name: Workshop */
    get_header();
?>
<div id="workshop">
    <div class="at_below_header_content">
        <div class="left_half">
            <h1 class="giantHeading"><?php the_title(); ?></h1>
        </div>
        <div class="bikeHalf">
            <img class="bicycle" src="<?php echo get_field('illustration');?>"/>
        </div>
    </div>
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <div class="at_content large-wrapper magic">
            <?php the_content(); ?>
        </div>
    <?php endwhile; endif;?>


    <?php 
    $tab_repeater = get_field('tabs_workshop');
    $main_repeater = get_field('workshop_content_area');
    $workshop_accordion = get_field('workshop_accordion');
    
    $relcount = 1;
    $relcount2 = 1;
    $idcount = 1;
    $count = 1;
    $btncount = 1;

    $mainT = get_field('main_title_p');
    $subC = get_field('sub_content_p');
    $subT = get_field('sub_title_p');
    $contentA = get_field('content_area_p');

    $formT = get_field('w_form_title');
    $form = get_field('w_the_form');
?>
<!-- Accordian -->

<?php if ( have_rows('workshop_accordion') ) : ?>
    <?php while( have_rows('workshop_accordion') ) : the_row(); ?>
    <div class="large-wrapper mespace">
    <button class="accordion giantHeadingSmall"><?= get_sub_field('accordion_title');?></button>
    <div class="panel">
    
    <!-- block click -->
    <?php if ( have_rows('workshop_content_area') ) : ?>
        <?php while( have_rows('workshop_content_area') ) : the_row(); ?>
        <div class="large-wrapper mespace">
    
            <div class="txt-center"><?php echo get_sub_field('section_description');?></div>

            <div class="tab">   
                <?php if ( have_rows('tabs_workshop') ) : 
                    $relcount = 1;
                    ?>
                    <?php while( have_rows('tabs_workshop') ) : the_row(); ?>
                        <button class="tablinks <?php if($relcount == 1 ){echo "active"; $relcount++;}?>" onclick="openTab(event, 'tab<?php echo $count++;?>')">
                            <h3 class="tab-heads"><a href="#tab<?php echo $btncount++;?>"><?php echo get_sub_field('tab_title_workshop');?></a></h3>
                        </button>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            
            <?php if ( have_rows('tabs_workshop') ) : ?>
                <?php while( have_rows('tabs_workshop') ) : the_row(); ?>
                    <div id="tab<?php echo $idcount++;?>" class="tabcontent">
                        <h2><?php echo get_sub_field('tab_title_workshop');?></h2>
                        <p><?php echo get_sub_field('tab_section_description_workshop');?></p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>


        <?php endwhile; ?>

    <?php endif; ?>
    <!-- end block click -->

    </div>

    </div>

<?php endwhile; ?>

<?php endif; ?>

<!-- <div class="line1"></div> -->
<!-- end accordian -->
    <div class="at_below_header_content magic">
        <div class="left_half">
            <h1 class="giantHeading"><?= $mainT;?></h1>
        </div>
    </div>
    <div class="large-wrapper magic">
        <div class="subcontent"><?= $subC;?></div>
    </div>
        <!-- <div class="line1"></div> -->

<!-- partners Accordian -->

<?php if ( have_rows('partners_workshop_accordion') ) : ?>
    <?php while( have_rows('partners_workshop_accordion') ) : the_row(); ?>
        <div class="large-wrapper mespace">
            <button class="Partaccordion giantHeadingSmall"><?= get_sub_field('part_accordion_title');?></button>
            <div class="panel">
                <div class="pad50">
                    <?php echo get_sub_field('content_area_p');?>
                    <img class="poweredlogo" src="<?php echo get_sub_field('powered_by_logo');?>" />
                </div>
            </div>
        </div>
    <?php endwhile;?>
<?php endif; ?>
<!-- <div class="line1"></div> -->

<div class="large-wrapper magic">
    <div class="innerC">
        <h1 class="giantHeadingSmall"><?= $formT;?></h1>
        <div class="instered"><?= $form;?></div>
    </div>
</div>
    <!-- <div class="line1"></div> -->
<?php
    get_footer();
?>