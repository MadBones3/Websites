			<!-- footer -->
			<?php 
				$facebook = get_field('facebook_url', 'options');
				$instagram = get_field('instagram_url', 'options');
				$pin = get_field('pinterest_url', 'options');
				$linkedin = get_field('linkedin_url', 'options');
				$fbgColor = get_field('footer_background_color', 'options');
			?>
			
			<footer id="footer" role="contentinfo" style="background-color:<?= $fbgColor;?>">
				<div class="wrapper">
					<div class="foot-flex">
						<div class="quicklinks">
							<h4>Quick Links</h4>
							<?php arkhealthspace_quicklinknav();?>
						</div>
						<div class="social">
							<h4>Social Links</h4>
							<div class="soicons">
								<a href="<?= $facebook;?>"><i class="fab fa-facebook"></i></a>
								<a href="<?= $instagram;?>"><i class="fab fa-instagram"></i></a>
								<a href="<?= $pin;?>"><i class="fab fa-pinterest"></i></a>
								<!-- <a href="<?= $linkedin;?>"><i class="fab fa-linkedin"></i></a> -->
							</div>
						</div>
						<div class="doc">
							<h4>Document Links</h4>
							<?php arkhealthspace_doclinknav(); ?>
						</div>
					</div>
				</div>
			<div class="copyRight">
				&copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?> </a>						
			</div>
			</footer>
		<?php wp_footer(); ?>
	</body>
</html>