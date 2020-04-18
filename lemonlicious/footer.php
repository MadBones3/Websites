        <!-- footer -->
        <?php 
            $newsletter_shortcode = get_field('newsletter_shortcode', 'options');
            $facebook = get_field('facebook', 'options');
            $instagram = get_field('instagram', 'options');
            $halaal_logo = get_field('halaal_logo', 'options');
        ?>
        <footer id="acrb-foot" class="lemon-footer">
            <img data-aos="zoom-in" data-aos-duration="3000" src="/wp-content/themes/lemonlicious/images/orangedot.png" class="dots_footer">
            <img data-aos="fade-out" data-aos-duration="2000" src="/wp-content/themes/lemonlicious/images/redlemonnodots.png" class="redlemon_footer">
            <img data-aos="fade-out" data-aos-duration="3000" src="/wp-content/themes/lemonlicious/images/bluestripe.png" class="stripe_footer">
            <div class="wrapper">
                <div class="col newsletter">
                    <h3>Sign-up to our newsletter</h3>
                    <?= $newsletter_shortcode; ?>
                </div>
                <div class="col quicklinks">
                    <h3>Quick links</h3>
                    <?php brandcandy_quicklinknav()?>
                </div>
                <div class="col socialicons">
                    <h3>Let's get social</h3>
                    <div class="icons">
                        <a href="<?= $facebook;?>"><i class="fab fa-facebook-square"></i></a>
                        <a href="<?= $instagram;?>"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="halaal">
                        <img src="<?=$halaal_logo;?>" alt="<?=$halaal_logo;?>">
                        <div class="hal-number">
                            <p>S - 1631</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="copyRight">
            &copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?> | Site By <a href="https://brandcandy.co.za/">Brand Candy</a>						
        </div>
        <!-- END footer -->
        <?php wp_footer(); ?>
    </body>
</html>