<?php get_header(); ?>
<div id="siteWrapper">
	<main role="main">
		<!-- section -->
		<section>

			<h1><?php echo sprintf( __( '%s Search Results for ', 'bcBlank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php get_template_part('wp_parts/loop'); ?>

			<?php get_template_part('wp_parts/pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
