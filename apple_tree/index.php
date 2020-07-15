<?php get_header(); ?>

	<div id="siteWrapper">
		<main role="main">
			<!-- wrapper section -->
			<div class="wrapper">
				<section>

					<h1><?php _e( 'Latest Posts', 'bcBlank' ); ?></h1>

					<?php get_template_part('wp_parts/loop'); ?>

					<?php get_template_part('wp_parts/pagination'); ?>

				</section>
			</div>
			
			<!-- /wrapper/section -->
		</main>
	</div>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
