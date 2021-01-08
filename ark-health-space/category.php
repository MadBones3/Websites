<?php 
    get_header();
?>
<?php get_template_part('templates/parts/no-banner');?>
<main id="archive">
	<section style="position: relative;">
	    <div class="wrapper allPostsWrap">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
            <div class="archive-wrap magic">
                <div class="archivePost">
					<div class="imager">
						<img src="<?php the_post_thumbnail_url();?>">
					</div>
                    <h4><?php the_title(); ?></h4>
                    <p><?php echo wp_trim_words(get_the_content(), 25, '...');?></p>
                    <p class="read"><a class="fancy" href="<?php the_permalink();?>">Read more</a></p>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
        <div class="wrapper pagination">
            <div class="nav-next alignleft"><?php previous_posts_link( '<i class="fas fa-chevron-left"></i> Newer posts' ); ?></div>
            <div class="nav-previous alignright"><?php next_posts_link( 'Older posts <i class="fas fa-chevron-right"></i>' ); ?></div>
        </div>
    </section>
</main>

<?php get_footer();?>