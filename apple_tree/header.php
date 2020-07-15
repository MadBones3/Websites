<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('description'); ?></title>
		<link href="<?php echo get_template_directory_uri()?>/stylesheets/all.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri()?>/stylesheets/theme-style.css" rel="stylesheet">
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
	<body <?php body_class(); ?> unresolved>
		<!-- header -->
		<header class="header clear" role="banner">
			<div class="large-wrapper">
				<nav class="nav" role="navigation">
				<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php if(get_field('logo','options')): the_field('logo','options'); endif;?>" alt="Logo" class="logo-img">
							<!-- <img src="<?php //echo get_template_directory_uri()?>/img/logo_on_scroll.svg" alt="Logo" class="logo-img-on-scroll"> -->
						</a>
					</div>
					<div id="wrapmenu">					
						<?php brandcandy_nav(); ?>
					</div>
					<div id="mobileMenu">
						<?php brandcandy_nav_mobile(); ?>
					</div>
					<!-- mobile nav -->
					<div class="mobilenav">
						<div class="dash1"></div>
						<div class="dash2"></div>
						<div class="dash3"></div>
					</div>
					<!-- end mobile nav -->
				</nav>
				<!-- /nav -->
			</div>
		</header>
		<!-- /header -->
