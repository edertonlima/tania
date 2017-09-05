<!-- slide -->
<section class="box-content box-slide">
	<div class="slide">
		<div class="carousel slide" data-ride="carousel" data-interval="5000" id="slide">

			<div class="carousel-inner" role="listbox">

				<div class="item slide-home active on-active" style="background-image: url('<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' )[0]; ?>');">
				</div>

			</div>
			
		</div>
	</div>
</section>

<section class="box-content blog-detalhe">
	<div class="container">

		<article class="content">		
			<h2><?php the_title() ?></h2>
			<span class="tags">
				<?php
					$posttags = get_the_tags();
					if ($posttags) {
						foreach($posttags as $tag) {
							echo '#'.strtoupper($tag->name).'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
						}
					}
				?>
			</span>
			<span class="date"><?php the_author(); echo ', '; the_date(); ?></span>
			<div class="cont-txt"><?php the_field('texto') ?></div>
		</article>

	</div>
</section>

<script type="text/javascript">
	jQuery.noConflict();
	jQuery('document').ready(function(){
		jQuery('.blog a').addClass('active');
	});	
</script>
