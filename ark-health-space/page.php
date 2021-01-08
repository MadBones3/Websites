<?php get_header();?>

<?php get_template_part('templates/parts/banner');?>

<main id="the-page">
	<div class="wrapper">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
				<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</div>
</main>

<?php if( !is_cart() && !is_checkout() ) {
	get_template_part('templates/parts/reviews');
} ?>
<?php get_footer();?>