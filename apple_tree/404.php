<?php get_header(); ?>

<div id="siteWrapper">
	<main role="main" class="large-wrapper">
	<!-- section -->
	<section>

		<!-- article -->
		<article id="post-404">

			<div class="error404">

				<span>4</span>
					<img class="bicycle" src="<?php echo home_url();?>/wp-content/uploads/2020/04/bicycle.png"/>
				<span>4</span>

			</div>
			<h2>
				<p>This page does not exist.</p>
				<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
			</h2>
		

		</article>
		<!-- /article -->

	</section>
		<!-- /section -->
	</main>
</div>


<?php //get_sidebar(); ?>

<?php get_footer(); ?>
