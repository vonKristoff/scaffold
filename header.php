<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta name="viewport" content="width=device-width">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('name'); ?></title>
	
	<!-- Meta -->
	<meta charset = "UTF-8" />
	
	<!-- RSS Feed -->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	
	<!-- Pingbacks -->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<div class="slideshow"><?php getAttachedImages(pid('slides'));?></div>
	<nav>
		<?php wp_nav_menu( array( 'menu'=>'main','container_class' => 'menu-main' ) ); ?>
	</nav>
	<?php get_sidebar(); ?>

	<div id="content">

