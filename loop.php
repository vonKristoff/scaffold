<div class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="padding">

	<div class="post-date">
		<a href="<?php the_permalink(); ?>"><?php echo the_time('j F Y') ?></a>
	</div><!-- .post-date -->

	<div class="post-title">
		<h2><?php the_title(); ?></h2> 
	</div><!-- .post-title -->

	<div class="post-content">
		<?php wpautop(the_content());?>
	</div><!-- .post-content -->

</div>
</div><!-- /.post -->