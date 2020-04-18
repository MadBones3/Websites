<?php get_header();?>
	<div class="wrapper padtop10">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
				<?php the_title();?>
				<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</div>

<?php get_footer();?>