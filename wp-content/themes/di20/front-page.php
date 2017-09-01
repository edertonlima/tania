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
		
		<?php $page = get_page_by_path('quem-sou-eu'); ?>

		<article class="content">			
			<div class="row">
				<div class="col-5">
					<img src="<?php the_field('foto_tania',$page->ID) ?>" alt="<?php the_field('foto_tania',$page->ID) ?>">
				</div>

				<div class="col-7">
					<h2><?php the_field('titulo_tania',$page->ID) ?></h2>

					<div class="cont-txt">
						<?php the_field('texto_tania',$page->ID) ?>
						<a href="<?php echo get_permalink(get_page_by_path('quem-sou-eu')); ?>" class="button leia-mais" title="LEIA MAIS">LEIA MAIS</a>
					</div>
				</div>
			</div>
		</article>

	</div>
</section>

<section class="box-content box-ajuda">
	<div class="container">

		<article class="content">			
			<div class="row">
				<div class="col-6">
					<h2><?php the_field('titulo_ajuda',$page->ID) ?></h2>

					<div class="cont-txt">
						<?php the_field('texto_ajuda',$page->ID) ?>
					</div>
				</div>

				<div class="col-6">
					<a href="<?php the_field('url_ajuda',$page->ID) ?>" class="button ajuda" title="<?php the_field('tit_url_ajuda',$page->ID) ?>"><?php the_field('tit_url_ajuda',$page->ID) ?></a>
				</div>
			</div>
		</article>

	</div>
</section>

<section class="box-content">
	<div class="container">

		<article class="content">			
			<div class="row">
				<div class="col-7">
					<h2><?php the_field('titulo_coaching',$page->ID) ?></h2>

					<div class="cont-txt">
						<?php the_field('texto_coaching',$page->ID) ?>
					</div>
				</div>

				<div class="col-5">
					<img src="<?php the_field('foto_coaching',$page->ID) ?>" alt="<?php the_field('foto_coaching',$page->ID) ?>">
				</div>
			</div>
		</article>

	</div>
</section>

<section class="box-content box-msg-contato">
	<div class="container">

		<h3>Entre em contato e tenha o serviço que<br>melhor se adapta ao que você precisa</h3>

	</div>
</section>

<section class="box-content box-servicos list-servicos">
	<?php
		query_posts(
			array(
				'posts_per_page' => 2,
				'post_type' => 'servicos'
			)
		);

		while ( have_posts() ) : the_post();
		
			get_template_part( 'content-list-servico' );

		endwhile;
		wp_reset_query();
	?>
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
	});	
</script>

