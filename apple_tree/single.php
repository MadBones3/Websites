<?php 
    $author_image = get_field('author_image');
?>
<?php get_header(); ?>
<div id="siteWrapper">
	<main role="main">
	<!-- section -->
	<section>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="large-wrapper">
			<div class="single-blog-post">
				
	<?php
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<div class="breadcrumbs"><p id="breadcrumbs">','</p></div>' );
		}
	?>
			<!-- post featured image -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<div class="imgwrap">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</div>
			<?else:?>
				<div class="imgwrap">
					<img src="http://kstest.co.za/apple-tree/wp-content/uploads/2020/03/appletreekogo.png">
				</div>
			<?php endif; ?>
			<!--end post featured image -->

			<div class="author"><img src="<?php echo get_field('author_image');?>"></div>

				<h1><?php the_title(); ?></h1>

				<?php the_content(); // Dynamic Content ?>

				<p><?php _e( 'Categorised in: ', 'bcBlank' ); the_category(', '); // Separated by commas ?></p>
			</div>
		</div>
		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'bcBlank' ); ?></h1>

		</article>
		<!-- /article -->
	<?php endif; ?>
	

	</section>
	<!-- /section -->
	</main>
</div>
<?php get_footer(); ?>
