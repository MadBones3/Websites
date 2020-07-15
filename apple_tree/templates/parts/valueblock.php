<?php
    $value_block = get_field('value_block');
    $b = get_field('below_title_description');
?>
<section class="value_blocks">
    <div class="large-wrapper">
    <div class="belowtitle magic"><?= $b; ?></div>
        <div class="square magic">
            <?php foreach($value_block as $value) {?>
                <div class="asquare">
                    <h3><?= $value['value_title'];?></h3>
                    <hr>
                    <div class="content"><?= $value['value_content'];?></div>
                </div>
            <?php } ?>
        </div>
    </div>
<!-- <div class="line1"></div> -->
</section>
