<?php get_header(); ?>

<section class="box-content box-blog box-category">
	<div class="container">

		<div class="list-blog">

			<?php
				$item_blog = 1;

				while ( have_posts() ) : the_post();

					if($item_blog == 1){
						get_template_part( 'content-list-1' ); ?>

						<h2><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico_busca.png"> SOBRE O QUE VOCÊ QUER LER HOJE?</h2>

						<div class="busca-post box-select">
							<div class="select">
								<span class="icon_select"></span>
								<ul>
									<li class="fixo">Encontre o assunto que você quer ler…</li>				
								</ul>
							</div>
						</div>

						<div class="row">

					<?php }else{ ?>

							<div class="col-4">
								<?php get_template_part( 'content-list-cat' ); ?>
							</div>

					<?php }

					$item_blog = $item_blog+1;

				endwhile;
			?>

				</div>

		</div>

		<?php //paginacao(); ?>

	</div>
</section>

<?php get_footer(); ?>

<script type="text/javascript">
	jQuery.noConflict();
	jQuery('document').ready(function(){
		jQuery('.blog a').addClass('active');

		jQuery('.icon_select').click(function(){
			if(jQuery(this).parent().hasClass('open')){
				jQuery('.select').removeClass('open');
			}else{
				jQuery('.select').removeClass('open');
				jQuery(this).parent().addClass('open');
			}
		});

		jQuery('.select li').click(function(){
			/*if((!(jQuery(this).hasClass('ativo'))) && (!(jQuery(this).hasClass('fixo')))){
				jQuery(this).siblings().removeClass('ativo');
				jQuery(this).addClass('ativo');
				var item = jQuery(this).attr('rel');
				var txt = jQuery(this).html();
				jQuery(this).siblings('.fixo').attr('rel',item);
				jQuery(this).siblings('.fixo').html(txt);
				jQuery('.select').removeClass('open');
				var fixo = '';
				jQuery('.select li.fixo').each(function(){
					fixo += jQuery(this).attr('rel');
				});
				if(fixo == ''){
					jQuery('.filtro-casa').show();
				}else{
					jQuery('.filtro-casa').hide();
					jQuery(fixo).show();
				}
			}*/
		});
	});	
</script>