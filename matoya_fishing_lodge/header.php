<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<style>
			[unresolved] {
				display: none;
			}
		</style>

	</head>
	<body <?php body_class();?> id="acrb" unresolved>
	<header>
		<div class="wrapper">
			<div class="headtop">
				<div class="logo">
					<a href="<?php echo home_url();?>">
						<img src="<?php echo get_template_directory_uri()?>/img/matoya.png"/>
					</a>
				</div>
				<nav role="navigation">
					<?php brandcandy_nav(); ?>            
				</nav>
				<!--   Hamburger Bars   -->
				<div class="burger">
					<div class="line1"></div>
					<div class="line2"></div>
					<div class="line3"></div>
				</div>
				<!--   End Hamburger Bars   -->
			</div>
		</div>
		<div id="myOverlay" class="overlay">
			<span class="closebtn" onclick="closeSearch()" title="Close Overlay"><i class="fas fa-times"></i></span>
			<div class="overlay-content">
				<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
					<input class="search-input" type="search" name="s" placeholder="<?php _e( 'To search, type and hit enter.', 'bcBlank' ); ?>">
					<button class="btn search-submit" type="submit" role="button"><?php _e( 'Search', 'bcBlank' ); ?></button>
				</form>
			</div>
		</div>
<script>
	  function openSearch() {
    document.getElementById("myOverlay").style.display = "block";
  }

  function closeSearch() {
    document.getElementById("myOverlay").style.display = "none";
  }
</script>
	</header>