<article class="item">
	<div class="bg-image" style="background-image: url('<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' )[0]; ?>');">
		<div class="content-item">
			<h3><?php the_title(); ?></h3>
			<?php the_excerpt() ?>
			<a href="<?php the_permalink(); ?>" title="LEIA MAIS" class="button contratar">CONTRATAR</a>
		</div>
	</div>
</article>