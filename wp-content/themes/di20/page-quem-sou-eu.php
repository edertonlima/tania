<?php get_header(); ?>

<!-- slide -->
<section class="box-content box-slide">
	<div class="slide">
		<div class="carousel slide" data-ride="carousel" data-interval="5000" id="slide">

			<div class="carousel-inner" role="listbox">

				<?php if( have_rows('slide') ):
					$slide = 0;
					while ( have_rows('slide') ) : the_row();

						if(get_sub_field('imagem')){
							$slide = $slide+1; ?>

							<div class="item slide-home active <?php if($slide == 1){ echo 'on-active'; } ?>" style="background-image: url('<?php the_sub_field('imagem'); ?>');">
								<?php if(get_sub_field('titulo')){ ?>
									<span class="titulo">
										<?php the_sub_field('titulo'); ?>
									</span>
								<?php } ?>

								<?php if(get_sub_field('subtitulo')){ ?>
									<span class="subtitulo">
										<?php the_sub_field('subtitulo'); ?>
									</span>
								<?php } ?>
							</div>

						<?php }

					endwhile;
				endif; ?>

			</div>

			
			<ol class="carousel-indicators">
				<?php if($slide > 1){
					for($i=0; $i<$slide; $i++){ ?>
						<li data-target="#slide" data-slide-to="<?php echo $i; ?>" class="<?php if($i == 0){ echo 'active'; } ?>"></li>
					<?php }
				} ?>
			</ol>
			
		</div>
	</div>
</section>

<section class="box-content">
	<div class="container">

		<article class="content">		
			<h2><?php the_title() ?></h2>
			<div class="cont-txt"><?php the_field('texto') ?></div>
		</article>

	</div>
</section>

<section class="box-content box-ajuda">
	<div class="container">

		<article class="content">			
			<div class="row">
				<div class="col-6">
					<h2><?php the_field('titulo_ajuda') ?></h2>

					<div class="cont-txt">
						<?php the_field('texto_ajuda') ?>
					</div>
				</div>

				<div class="col-6">
					<a href="<?php the_field('url_ajuda',$page->ID) ?>" class="button ajuda" title="<?php the_field('tit_url_ajuda',$page->ID) ?>"><?php the_field('tit_url_ajuda') ?></a>
				</div>
			</div>
		</article>

	</div>
</section>

<?php get_footer(); ?>

<script type="text/javascript">
	jQuery.noConflict();
	jQuery('document').ready(function(){
		jQuery('.slide-home').each(function(){
			margem = (jQuery('.titulo', this).height())/1.5;
			jQuery('.titulo', this).css('margin-bottom',('-'+margem+'px'));
			jQuery('.subtitulo', this).css('margin-top',((margem+10)+'px'));
		});

		jQuery('.active').removeClass('active');
		jQuery('.on-active').addClass('active');
		jQuery('.carousel-indicators li[data-slide-to=0]').addClass('active');

		jQuery('.quem-sou-eu a').addClass('active');
	});	
</script>
