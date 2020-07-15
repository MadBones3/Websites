<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
		this is archive page
			<h1><?php _e( 'Archives', 'bcBlank' ); ?></h1>

			<?php get_template_part('wp_parts/loop'); ?>

			<?php get_template_part('wp_parts/pagination'); ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>