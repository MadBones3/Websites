<div class="ourPeople">
    <?php if ( have_rows('our_people') ) : ?>
        <?php while( have_rows('our_people') ) : the_row(); ?>
            <div id="<?php if(get_sub_field('member_id')): the_sub_field('member_id'); endif;?>" class="stripe magic">
                <div class="large-wrapper">
                    <div class="tribe-group">
                        <div class="people_image">
                            <img src="<?php if(get_sub_field('image')): the_sub_field('image'); endif;?>">
                            <?php if(get_sub_field('small_quote')) { ?>
                                <p><q><?php echo the_sub_field('small_quote');?></q></p>
                            <?php } ?>
                        </div>
                        <div class="content">
                            <h3><?php the_sub_field('title')?></h3>
                            <?php the_sub_field('info')?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
        <!-- <div class="line1"></div> -->