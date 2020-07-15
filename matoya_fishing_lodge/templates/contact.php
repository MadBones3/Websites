<?php 
    /* Template Name: Contact */
    get_header();
?>
<?php 
$facebook = get_field('facebook_url', 'options');
$instagram = get_field('instagram_url', 'options');
$whatsapp = get_field('whatsapp_url', 'options');
$linkedin = get_field('linkedin_url', 'options');
?>
<main class="dark">
    <?php get_template_part('templates/parts/heroBanner');?>
    <div id="contact" class="belowbanner">
        <div class="blackswipe" style="background-image: url('http://kstest.co.za/matoyafl/wp-content/uploads/2020/05/MFL_Homepage_Welcome_to_Matoya_grunge_v1-min.png');">
            <div class="content">
                <div class="wrapper">
                <h2><?php echo get_field('section_title');?></h2>
                    <div class="flex">
                        <div class="contact-content magic-left">
                            <h3>CONTACT DETAILS</h3>
                            <div class="dets"><?php echo get_field('contact_content');?></div>
                        </div>
                        <div class="social-contact magic-right">
                            <h3>SOCIAL LINKS</h3>
                            <div class="soicons">
                                <a class="icon1" href="<?= $facebook;?>"><i class="fab fa-facebook-f"></i></a>
                                <a class="icon2" href="<?= $instagram;?>"><i class="fab fa-instagram"></i></a>
                                <a class="icon3" href="<?= $linkedin;?>"><i class="fab fa-linkedin-in"></i></a>
                                <a class="icon4" href="<?= $whatsapp;?>"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer();?>