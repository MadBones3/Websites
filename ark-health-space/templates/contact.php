<?php 
    /* Template Name: contact */
    get_header();
?>
<?php get_template_part('templates/parts/banner');?>

<main id="contact">
<!-- content -->
    <div class="wrapper">
        <div class="touch">
            <h3><?php echo get_field('cont_title');?></h3>
            <div class="content"><?php echo get_field('cont_content_area');?></div>
        </div>
    </div>
<!-- form -->
<div class="beige">
    <div class="wrapper">
        <div class="cont-form">
            <div class="magic-left"><?php echo get_field('cont_form_title');?></div>
            <div class="short-form magic-right"><?php echo get_field('cont_shortcode');?></div>
        </div>
    </div>
</div>

<?php get_template_part('templates/parts/quote');?>
</main>
    
    
<?php get_template_part('templates/parts/reviews');?>
<?php get_footer();?>