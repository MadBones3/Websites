<?php 
    /* Template Name: Home */
    get_header();
?>
<!-- Home page main content parts -->
<main>
    <?php get_template_part('templates/parts/homebanner');?>
    <?php get_template_part('templates/parts/homesection1');?>
    <?php get_template_part('templates/parts/homeblogs_insta');?>
    <?php get_template_part('templates/parts/homeevents');?>
    <?php get_template_part('templates/parts/hometestimonial');?>
</main>

<?php get_footer();?>