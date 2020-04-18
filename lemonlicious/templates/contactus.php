<?php 
    /* Template Name: contact */
    get_header();
?>
<?php 
// banner
    $contact_banner_heading_1 = get_field('contact_banner_heading_1');
    $contact_banner_heading_2 = get_field('contact_banner_heading_2');
    $contact_banner_image = get_field('contact_banner_image');
// content
    $contact_title = get_field('contact_title');
    $contact_tel_1 = get_field('contact_tel_1');
    $contact_tel_2 = get_field('contact_tel_2');
    $contact_email = get_field('contact_email');
    $contact_facebook = get_field('contact_facebook');
    $contact_instagram = get_field('contact_instagram');
    $contact_form_title = get_field('contact_form_title');
?>
<!-- Home page main content parts -->
<main id="contactus">

    <div class="sectioncolor">
        <div class="wrapper">
            <div class="banner">
                <div class="content">
                    <h1>
                    <?php if($contact_banner_heading_1) : ?>
                        <span style="color:<?php the_field('banner_heading_1_color') ?>"><?= $contact_banner_heading_1; ?></span>
                    <?php endif;?>
                    <?php if($contact_banner_heading_2) : ?>
                        <span style="color:<?php the_field('banner_heading_2_color') ?>" ><?= $contact_banner_heading_2; ?></span>
                    <?php endif;?>
                    </h1>
                </div>
                <div class="square">
                    <span></span>
                    <div class="content">
                        <div class="Sone"></div>
                        <img src="<?= $contact_banner_image;?>">
                        <div class="Stwo"></div>
                        <div class="Slem"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="contact">
        <div class="wrapper">

            <div class="contact-flex">

                <div class="info">
                    <h2><?= $contact_title;?></h2>
                    <span> Tel: <a href="tel:<?= $contact_tel_1; ?>"><?= $contact_tel_1; ?></a> | <a href="tel:<?= $contact_tel_2; ?>"><?= $contact_tel_2; ?></a></span>
                    <span> Email: <a href="mailto:<?= $contact_email; ?>"><?= $contact_email; ?></a></span>
                    <div class="icons">
                        <a href="<?= $contact_facebook; ?>"><i class="fab fa-facebook-square"></i></a>
                        <a href="<?= $contact_instagram; ?>"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="form">
                    <h2><?= $contact_form_title;?></h2>
                    <?php echo do_shortcode('[gravityform id="6" title="false" description="false" ajax="true"]')?>
                </div>

            </div>

        </div>
    </section>

</main>

<?php get_footer();?>