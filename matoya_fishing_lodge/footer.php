
<?php
//varables
$cc = get_field('contact_content', 'options');
$facebook = get_field('facebook_url', 'options');
$instagram = get_field('instagram_url', 'options');
$whatsapp = get_field('whatsapp_url', 'options');
$linkedin = get_field('linkedin_url', 'options');
$newsletter_short_code = get_field('newsletter_short_code','options');
$enquiry_short_code = get_field('enquiry_short_code','options');
$enq_title = get_field('enq_section_title','options');
$enq_description = get_field('enq_section_description','options');
$form_title = get_field('enq_form_title','options');

?>
<footer id="footer" role="contentinfo">
	<!-- Gravity form section -->
	<section id="subform">
		<div class="wrapper">
			<div class="form-container magic">
				<h2><?= $enq_title;?></h2>
				<div class="form-desc"><?= $enq_description;?></div>
				<h3><?= $form_title;?></h3>
				<div id="the-form"><?= $enquiry_short_code;?></div>
			</div>
		</div>
	</section>
	<!-- the footer -->
	<div class="foot-bg">
	<div class="wrapper">
		<div class="footer-container">
			<div class="block wid20">
				<h3>Quick Links</h3>
				<?php brandcandy_quicklinknav();?>
			</div>
			<div class="block wid20">
				<h3>Contact Details</h3>
				<div class="contdets"><?= $cc;?></div>
			</div>
			<div class="block wid20">
				<h3>Social Links</h3>
				<div class="soicons">
					<a href="<?= $facebook;?>"><i class="fab fa-facebook-f"></i></a>
					<a href="<?= $instagram;?>"><i class="fab fa-instagram"></i></a>
					<a href="<?= $linkedin;?>"><i class="fab fa-linkedin-in"></i></a>
					<a href="<?= $whatsapp;?>"><i class="fab fa-whatsapp"></i></a>
				</div>
			</div>
			<div class="block wid40">
				<h3>Sign up to our newsletter</h3>
				<div id="newsletter"><?= $newsletter_short_code;?></div>
			</div>
		</div>
	</div>
	</div>
	<div class="copyRight">
		&copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?> | All rights reserved | Site By <a href="https://brandcandy.co.za/">Brand Candy</a>						
	</div>
</footer>
<?php wp_footer(); ?>

</body>
</html>