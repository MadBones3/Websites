<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class();?> id="acrb">
	<header>
		<div class="wrapper">
			<div class="headtop">
				<div class="logo">
					<a href="<?php echo home_url();?>">Ark Health Space</a>
				</div>
				<nav class="topnav" role="navigation">
					<?php arkhealthspace_nav(); ?>
					<div class="search-bar">
					<?php get_search_form( );?>
					</div>            
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
	</header>
				