<!-- footer -->
<!-- Clients -->
<?php $clientTitle = get_field('heading_title', 'options');?>
			<div class="clientSection">
				<div class="large-wrapper">
        		<div class="magic">
				<h2><?= $clientTitle;?></h2>
					<?php if ( have_rows('client_logo', 'options') ) : ?>
						<div class="flex-container">
							<?php while( have_rows('client_logo', 'options') ) : the_row(); ?>
								<div class="contme">
									<img src="<?php if(get_sub_field('the_client_logo', 'options')): the_sub_field('the_client_logo', 'options'); endif;?>" alt="clientlogo">
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				</div>
				</div>
			</div>
<!-- End Clients -->
<!-- Testimonal -->
			<div class="testimonialSection">
				<div class="large-wrapper">
        			<div class="magic">
					<?php if ( have_rows('testimonial', 'options') ) : ?>
						<div class="swiper-container3 third">
							<div class="swiper-wrapper">
								<?php while( have_rows('testimonial', 'options') ) : the_row(); ?>
									<div class="swiper-slide swiper-slide3">
										<h4 class="name"><?php if(get_sub_field('name', 'options')): the_sub_field('name', 'options'); endif;?></h4>
										<p class="title"><?php if(get_sub_field('title', 'options')): the_sub_field('title', 'options'); endif;?></p>
										<p class="content"><?php if(get_sub_field('content', 'options')): the_sub_field('content', 'options'); endif;?></p>
									</div>
								<?php endwhile; ?>
							</div>
							<!-- Add Arrows -->
							<div class="swiper-button-next swiper-button-white"></div>
							<div class="swiper-button-prev swiper-button-white"></div>
						</div>
					<?php endif; ?>
				</div>
				</div>
			</div>
<!-- End Testimonial -->
			<div class="clfooter"></div>
			<footer class="footer" role="contentinfo">
				<div class="large-wrapper">
					<div class="fwidget one">
					<?php dynamic_sidebar( 'footer-column-one' ); ?>
					</div>
					<div class="fwidget two">
						<?php dynamic_sidebar( 'footer-column-two' ); ?>
						<!-- Social icons -->
						<?php
						$fb = get_field('facebook', 'options');
						$ig = get_field('instergram', 'options');
						$li = get_field('linkedin', 'options');
						$yt = get_field('youtube', 'options');
						?>
						<div class="socialicons">
							<a href="<?php echo $fb;?>"><i class="fab fa-facebook"></i></a>
							<a href="<?php echo $ig;?>"><i class="fab fa-instagram"></i></a>
							<a href="<?php echo $li;?>"><i class="fab fa-linkedin"></i></a>
							<a href="<?php echo $yt;?>"><i class="fab fa-youtube-square"></i></a>
						</div>
						<div class="textwidget">
							<p>
								<img src="http://kstest.co.za/apple-tree/wp-content/uploads/2020/03/footerLogo.png">
							</p>
						</div>
						<p class="copyright">
							&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | by <a href="https://brandcandy.co.za/" title="Brand Candy - Creative Paradise">Brand Candy</a>.
						</p>
					</div>
	
				</div>
				<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
				
			</footer>
			<!-- /footer -->

		<?php wp_footer(); ?>

	</body>
</html>