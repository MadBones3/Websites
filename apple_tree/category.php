<?php get_header(); ?>
	<div id="siteWrapper">
		<main role="main">
			<!-- section -->
			<section>
			<div class="at_below_header_content">
				<div class="left_half">
					<h1 class="giantHeading"><?php single_cat_title(); ?></h1>
				</div>
				<div class="bikeHalf">
					
				</div>
			</div>

				<div class="large-wrapper" >
				<?php
					if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb( '<div class="breadcrumbs"><p id="breadcrumbs">','</p></div>' );
					}
				?>
				<div class="flex-posts">
				
					
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				
				<a class="singlepost" href="<?php the_permalink();?>">
					<div class="innercontainer">
					<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
						<div class="imager">
							<?php the_post_thumbnail(); // Fullsize image for the single post ?>
						</div>
					<?else:?>
						<div class="imager">
							<img src="http://kstest.co.za/apple-tree/wp-content/uploads/2020/03/appletreekogo.png">
						</div>
					<?php endif; ?>
						<div class="pad20">
							<div class="author"><img src="<?php echo get_field('author_image');?>"></div>
							<h3><?php the_title();?></h3>
							<div class="description"><p><?php echo wp_trim_words(get_the_content(), 20, '...');?></p></div>
							<p class="read">Read more</p>
						</div>
					</div>
				</a>
				
				<!-- /article -->

				<?php endwhile; ?>

				<?php else: ?>

				<!-- article -->
				<article>
					<h2><?php _e( 'Sorry, nothing to display.', 'bcBlank' ); ?></h2>
				</article>
				<!-- /article -->

				<?php endif; ?>

				</div>
				
				</div>
			</section>
			<!-- /section -->
		</main>

	</div>
<?php get_footer(); ?>
