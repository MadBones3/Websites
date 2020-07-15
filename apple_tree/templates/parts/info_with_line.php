<div class="info_with_line">
    <div class="large-wrapper">
        <?php if(get_field('line_above') == "yes"):?>
            <div class="new_line1"></div>
        <?php endif;?>
        <div class="at_content magic">
            <?php if(get_field('at_info')): the_field('at_info'); endif;?>
        </div>
        <?php if(get_field('line_below') == "yes"):?>
            <div class="new_line2"></div>
        <?php endif;?>
    </div>
</div>