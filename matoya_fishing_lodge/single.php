<?php get_header(); ?>
<main class="dark">
    <?php get_template_part('templates/parts/heroBanner');?>
    <div id="asingle" class="belowbanner">
		<div class="whitestripe" style="background-image: url('http://kstest.co.za/matoyafl/wp-content/uploads/2020/05/white_grunge.png');">
			<div class="padtop200 padbot150">
			<div class="wrapper">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<!-- post thumbnail -->
					<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail(); // Fullsize image for the single post ?>
						</a>
					<?php endif; ?>
					<!-- /post thumbnail -->

					<!-- post title -->
					<h1>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h1>
					<!-- /post title -->

				</article>
				<!-- /article -->

				<?php endwhile; ?>
				<?php endif; ?>
				<!-- /section -->
			</div>
			<?php get_sidebar(); ?>
			</div>
		</div>
    </div>
</main>

<?php get_footer(); ?>
