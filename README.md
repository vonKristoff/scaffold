Performing-Arts wordpress scaffold template

<h1>Custom Functions</h1>

<ul>
	<li>
		<pre>includePostTypes()</pre>
		<p>Defined in functions.php - returns array of custom post types to use as an $arg</p> 
	</li>
	<li>
		<pre>postTypeTemplate($type,$slug)</pre>
		<p>Edit in functions.php - takes a post-type and returns a get_template_part() loop for that specific post</p>
	</li>
	<li>
		<pre>getAttachedImages($pageID)</pre>
		<p>Attach images in media library to a page, and their urls are returned as html inside li items</p>
		<p>Used for Slideshow.js</p>
	</li>
	<li>
		<pre>pid('string')</pre>
		<p>Define page ID's in Functions.php, then its easier to target custom post types and pages when deploying from local to remote server</p>
	</li>
	<li>
		<p>Slideshow.js</p>
		<p>not a fully fledged plugin yet - but adds the url of images to the css background property of the li items and animates them - change the slideshow.js file to customise its settings</p>
		<p>nb. see slideshow.css for styling</p>
	</li>
	<li>
		<pre>register_custom_menu()</pre>
		<p>Functions.php - add menus that can be configured through the wordpress backend</p>
	</li>
	<li>
		<pre>register_sidebar()</pre>
		<p>Functions.php - add custom sidebars</p>
	</li>
	<li>
		<p>Featured image support included</p>
	</li>
	<li>
		<p>Gallery behaviours (from post) are set to default</p>
	</li>
	<li>
		<p>Custom Fonts are reachable from VPS path, set in fonts.css</p>
	</li>
</ul>