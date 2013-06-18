<?php
/* Template Name: New */
?>
<?php get_header(); ?>

   	<div id="post new">
		
		<div class="page-content">
			<?php $post = get_page(pid('new')); $txt = $post->post_content;  echo wpautop($txt);  ?>
		</div>		

		<?php 	$posts = array ('post_type' => 'performance' ) ;
				$query = new WP_Query($posts); 

			if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 

				get_template_part( 'loop' );	

			endwhile; else: ?>

		<p>sorry, but there's some kind of error...</p>

		<?php endif; ?>

	</div><!-- #post -->

<?php get_footer(); ?>