<?php get_header();?>

	<div id="single">
		
		<div class="wrapper">
			<div class="inner-wrap">

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<!-- post thumbnail -->
				<div data-aos="zoom-in" data-aos-duration="2000" class="Ydot">
					<img src="/wp-content/themes/lemonlicious/images/yellowdot1.png">
				</div>
				<div data-aos="fade-up-right" data-aos-duration="2000" class="Bline">
					<img src="/wp-content/themes/lemonlicious/images/blackstrip1.png">
				</div>
					<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
						<div class="imgwrap">
							<?php the_post_thumbnail(); // Fullsize image for the single post ?>
						</div>
					<?else:?>
						<div class="imgwrap">
							<img src="http://kstest.co.za/lemonlicious/wp-content/uploads/2019/12/LL_Logo_aw2-02_72dpi_RGB.png">
						</div>
					<?php endif; ?>
					<!-- /post thumbnail -->
					<div class="singleContent">
						<?php the_content(); // Dynamic Content ?>
					</div>
				</article>
				<!-- /article -->
			<?php endwhile; endif; ?>

			</div>
		</div>
	</div><!-- #single -->

<?php get_footer();?>