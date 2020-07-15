<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>">

	<a class="singlepost" href="<?php the_permalink();?>">
		<div class="innercontainer">
			<div class="imager">
				<?php if ( has_post_thumbnail()) : ?>
					<img src="<?php the_post_thumbnail();?>">
				<?php endif; ?>
			</div>
			<div class="pad20">
				<div class="author"><img src="<?php echo get_field('author_image');?>"></div>
				<h3><?php the_title();?></h3>
				<div class="description"><p><?php echo wp_trim_words(get_the_content(), 20, '...');?></p></div>
				<p class="read">Read more</p>
			</div>
		</div>
	</a>
	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'bcBlank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
