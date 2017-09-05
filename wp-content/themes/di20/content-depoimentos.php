<article class="item">

	<?php the_excerpt() ?>
	<img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' )[0]; ?>">
	<h3><?php the_title() ?></h3>

</article>