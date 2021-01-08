<?php get_header();?>
<?php get_template_part('templates/parts/banner');?>

	<div id="single">
		
		<div class="wrapper">
		<?php
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<div class="breadcrumbs"><p id="breadcrumbs">','</p></div>' );
		}
		?>
			<div class="inner-wrap">

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="singleContent">
						<div class="writeup">
							<?php the_content(); // Dynamic Content ?>
						</div>
					</div>
				</article>
				<!-- /article -->
			<?php endwhile; endif; ?>

			</div>
		</div>
	</div><!-- #single -->

<?php get_footer();?>