<?php get_header();?>
<main class="dark">
    <?php get_template_part('templates/parts/heroBanner');?>
    <div id="aindex" class="belowbanner">
		<div class="whitestripe" style="background-image: url('http://kstest.co.za/matoyafl/wp-content/uploads/2020/05/white_grunge.png');">
			<div class="padtop200 padbot150">
				<div class="wrapper">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
				</div>
			<?php get_sidebar(); ?>
			</div>
        </div>
    </div>
</main>
		


<?php get_footer();?>