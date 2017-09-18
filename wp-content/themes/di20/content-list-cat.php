<article class="item">
	<div class="bg-image" style="background-image: url('<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' )[0]; ?>');">
		<div class="bg-item"></div>
	</div>

	<div class="content-item">
		<h3><?php the_title(); ?></h3>

		<span class="tags">
			<?php
				$posttags = get_the_tags();
				if ($posttags) {
					foreach($posttags as $tag) { //var_dump($tag); ?>
						<a href="<?php echo get_tag_link($tag->term_id); ?>">
							#<?php echo strtoupper($tag->name); ?>
						</a>
					<?php }
				}
			?>
		</span>

		<?php the_excerpt() ?>
		<a href="<?php the_permalink(); ?>" title="LEIA MAIS" class="button contratar">LEIA MAIS</a>
	</div>
</article>