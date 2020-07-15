<!-- search -->
<!-- in navigation label
<button class="openBtn"  onclick="openSearch()"><i class="fas fa-search"></i></button> 
css class: menuSearchIcon
-->
<?php
get_header();
global $wp_query;
?>
<div id="searchpg">
  <div class="wrapper">
      <div class="content">
        <h2 class="search-title"> <?php echo $wp_query->found_posts; ?>
          <?php _e( 'Search Results Found For', 'locale' ); ?>: "<?php the_search_query(); ?>" </h2>

          <?php if ( have_posts() ) { ?>

              <ul>

              <?php while ( have_posts() ) { the_post(); ?>

                <li>
                  <?php  the_post_thumbnail('medium') ?>
                  <h3><a href="<?php echo get_permalink(); ?>">
                    <?php the_title();  ?>
                  </a></h3>
                  <?php echo substr(get_the_excerpt(), 0,200); ?>
                  <div> <a class="btn" href="<?php the_permalink(); ?>">Read More</a></div>
                </li>

              <?php } ?>

              </ul>

            <?php echo paginate_links(); ?>

          <?php } ?>

      </div>
  </div>
</div>
<?php get_footer(); ?>
