<?php

// -------------------------------------------------------------
// Exclude pages from search results
// -------------------------------------------------------------

add_filter('pre_get_posts','clutterless_mySearchFilter');
function clutterless_mySearchFilter($query) {
	 if ($query->is_search) {
	    $query->set('post_type', 'post');
	 }
	 return $query;
}

 // -------------------------------------------------------------
 // Enable Widgets
 // -------------------------------------------------------------

add_action('widgets_init', 'slidebars');

function slidebars(){

	register_sidebar(array(
		'name' => 'Slidebar',
		'before_widget' => '<div class="sidebar-widget">',
		'after_widget' => '</div>',
		'before_title' => '<span class="sidebar-widget-title">',
		'after_title' => '</span>',
	));
	
}
// custom sidebars -> editable in wp-menu
$args = array(
	'name'          => 'Custom-Sidebar %d',
	'id'            => "sidebar-$i",
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );

register_sidebars(3,$args);

// adds featured images
add_theme_support( 'post-thumbnails' );

 // -------------------------------------------------------------
 // Theme Options
 // -------------------------------------------------------------

 add_action('admin_menu', 'clutterless_options_menu');
 function clutterless_options_menu() {
 	add_theme_page("Clutterless Options", "Options", 'edit_themes', basename(__FILE__), 'clutterless_options_page');
 }

function clutterless_options_page()
{
	?>
	<div class="wrap">
	  	
	  	<?php
	   		if (@$_POST['action'] == 'save') {
	    ?>
	     <div style="border-radius: 2px; height: 20px; width: 360px; background-color: #d8fcc4; text-align:center; padding:5px;">
	    Yay! Theme options updated.
	    </div>
	    <?php } ?>

	    <form method="POST" action="">
	    <input type="hidden" name="update_themeoptions" value="true" />
		
	        <h3>Image/Logo</h3>
	        <p><i>Full URL, recommended 48px x 48px</i></p>
	        <p><input type="text" name="logo" id="logo" size="40" value="<?php echo get_option('clutterless_logo'); ?>" /></p>
	        <br />
	
	        <h3>Favicon</h3>
	        <p><i>Full URL, recommended 32px x 32px</i></p>
	        <p><input type="text" name="favicon" id="favicon" size="40" value="<?php echo get_option('clutterless_favicon'); ?>" /></p>
	        <br />
	
	        <h3>About/Bio</h3>
	        <p><i>Why not keep it short 'n sweet...</i></p>
			<p><textarea name="bio" id="bio" cols="40" rows="5" value="<?php echo get_option('clutterless_bio'); ?>" /><?php echo get_option('clutterless_bio'); ?></textarea></p>
			<br />	
	
	    <input type="hidden" name="action" value="save" />
	    <p><input type="submit" name="search" value="Update Options" class="button" /></p>
	  </form>
	
	 </div> <!-- #wrap -->
	
	 <?php
} 

function clutterless_themeoptions_update(){
	update_option('clutterless_logo', $_POST['logo']);
	update_option('clutterless_favicon', $_POST['favicon']);
	update_option('clutterless_bio', $_POST['bio']);
}
 

// -------------------------------------------------------------
// Enqueue Scripts and Styles
// -------------------------------------------------------------

add_action('wp_enqueue_scripts', 'enqueue_scripts');

function enqueue_scripts(){
	// Stylesheet	
	wp_enqueue_style( 'clutterless', get_stylesheet_uri(), array(), 'screen' );

	// Google Fonts
	wp_enqueue_style('google-webfonts-nc', 'http://fonts.googleapis.com/css?family=News+Cycle:400');
	wp_enqueue_style('google-webfonts-mw', 'http://fonts.googleapis.com/css?family=Merriweather:700');
	
	// Scripts
	// wp_enqueue_script('handle','{$url}filename.js',array(dependency-handle),'',loadinfooter:boolean);
	$url = get_stylesheet_directory_uri() . '/js/';

	// wp_enqueue_script('controller','{$url}controls.js',array(jquery),'',true);
	
}

// Favicon
add_action('wp_head', 'clutterless_favicon');
function clutterless_favicon(){
	$favicon = get_option('clutterless_favicon');
	if ($favicon != '') {
        ?><link rel="shortcut icon" href="<?php echo $favicon; ?>" /><?php
	}
}

// -------------------------------------------------------------




// use simple styling for gallery deployment
add_filter( 'use_default_gallery_style', '__return_false' );





