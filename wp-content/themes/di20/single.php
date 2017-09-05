<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post();

		get_template_part( 'content', get_post_format() ); ?>

	<?php endwhile; ?>


	<section class="box-content box-ajuda">
		<div class="container">

			<article class="content">			
				<div class="row">
					<div class="col-6">
						<h2><?php the_field('titulo_ajuda',get_page_by_path('quem-sou-eu')->ID) ?></h2>

						<div class="cont-txt">
							<?php the_field('texto_ajuda',get_page_by_path('quem-sou-eu')->ID) ?>
						</div>
					</div>

					<div class="col-6">
						<a href="<?php the_field('url_ajuda',$page->ID) ?>" class="button ajuda" title="<?php the_field('tit_url_ajuda',$page->ID) ?>"><?php the_field('tit_url_ajuda',get_page_by_path('quem-sou-eu')->ID) ?></a>
					</div>
				</div>
			</article>

		</div>
	</section>

<?php get_footer(); ?>