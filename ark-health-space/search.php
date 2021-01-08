<!-- search -->

<?php get_header(); ?>

<div class="nobanner">
    <img class="element1" src="/wp-content/themes/ark-health-space/img/elements/grey-dots.png">
    <h3 class="search-title"> <?php echo $wp_query->found_posts; ?>
      <?php _e( 'Search Results Found For', 'locale' ); ?>: "<?php echo the_search_query(); ?>"
    </h3>
    <img class="element2" src="/wp-content/themes/ark-health-space/img/elements/grey-dots.png">
</div>

	

		<div class="content-left">
			<div id="search-wrap">

			<?php if (have_posts()) : ?>
        <div class="search-container">
          <div class="wrapper">
				<?php while (have_posts()) : the_post(); ?>

					<div class="full post">
						<div class="post-featured-image">
							<a href="<?php the_permalink() ?>">
								<?php if ( has_post_thumbnail()) { ?>
									<?php the_post_thumbnail('thumbnail');
								} else { ?>
									<img src="/wp-content/themes/ark-health-space/img/temp.jpg" />
								<?php } ?>
							</a>
						</div><!--blogpost-featured-image-->
						<div class="post-excerpt">
							<h2>
								<span><?php if ( get_post_type( get_the_ID() ) == 'post' ) {
										echo 'Blog Post';
									}else{
										echo get_post_type( get_the_ID());
									};?>
									</span>
								<a href="<?php the_permalink() ?>">
									<?php the_title(); ?>
								</a>
							</h2>
							<div class="post-readmore">
								<?php// the_excerpt();?>
								<a href="<?php the_permalink(); ?>">
									<?php if ( get_post_type( get_the_ID() ) == 'product' ) {
										echo 'View Product';
									}else{
										echo 'Read more';
									};?>
								</a>
							</div><!--post-readmore-->
						</div><!--post-excerpt-->
					</div><!--post-->

				<?php endwhile; ?>
        </div><!--wrapper-->
				<div class="paginations">
					<?php echo paginate_links( $args ); ?>
				</div>
			<?php endif; ?>
			</div><!--category-post-left-->
		</div><!--content-left-->
		<div class="clear"></div>


<?php get_footer(); ?>

