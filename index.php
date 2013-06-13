<?php get_header(); ?>
	
         <div id="post">

            <?php 	$posts = array ('post_type' => includePostTypes() ) ;
					$query = new WP_Query($posts); 
 
            if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 

            	postTypeTemplate( get_post_type(), 'index-' );	
           
            endwhile; else: ?>

			<p>sorry, but there's some kind of error...</p>
            
            <?php endif; ?>

          </div><!-- #post -->

<?php get_footer(); ?>