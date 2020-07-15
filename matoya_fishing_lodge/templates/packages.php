<?php 
    /* Template Name: Package */
    get_header();
?>
<?php 
    $First = 1;
    $Second = 1;
?> 
<main class="dark">
    <?php get_template_part('templates/parts/heroBanner');?>
    <div id="package" class="belowbanner">
        <div class="blackswipe" style="background-image: url('http://kstest.co.za/matoyafl/wp-content/uploads/2020/05/MFL_Homepage_Welcome_to_Matoya_grunge_v1-min.png');">
        <div class="padtop200">
			<div class="wrapper">
                <div class="pack-content">
                    <h2><?php echo get_field('pa_section_title');?></h2>
                    <div class="txt"><?php echo get_field('pa_section_content');?></div>
                </div>
                <div class="package-flex">
                    <!-- re -->
                    <?php if ( have_rows('packages') ) : ?>
                    <?php while( have_rows('packages') ) : the_row(); ?>
                    <div class="package-contain">
                        <div class="image magic-left">
                            <img src="<?php echo get_sub_field('package_image');?>" alt="<?php echo the_title();?>">
                        </div>
                        <div class="package-content magic-right">
                            <h3><?php echo get_sub_field('package_title');?></h3>
                            <div class="content"><?php echo get_sub_field('package_content');?></div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <!-- end -->
                </div>
            </div>
        </div>
        </div>
    </div>
</main>
<main class="light">
    <div id="date" >
        <div class="whitestripe" style="background-image: url('http://kstest.co.za/matoyafl/wp-content/uploads/2020/05/white_grunge.png');">
            <div class="wrapper">
                <div class="duration-content magic">
                    <h3><?php echo get_field('dd_section_title');?></h3>
                    <div class="txt"><?php echo get_field('dd_section_content');?></div>
                </div>
                <div class="duration-container magic">
                    <div class="date">
                        <h4>DATE:</h4>
                        <!-- re -->
                        <?php if ( have_rows('departure_date') ) : ?>
                        <?php while( have_rows('departure_date') ) : the_row(); ?>
                            <div class="duration-flex row<?php echo $First++;?>">
                                <p class="date"><?php echo get_sub_field('date');?></p>
                            </div>
                        <!-- end -->
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="spaces">
                        <h4>SPACES:</h4>
                        <!-- re -->
                        <?php if ( have_rows('departure_date') ) : ?>
                        <?php while( have_rows('departure_date') ) : the_row(); ?>
                            <div class="duration-flex row<?php echo $Second++;?>">
                                <p class="spaces"><?php echo get_sub_field('available_spaces');?></p>
                            </div>
                        <!-- end -->
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer();?>