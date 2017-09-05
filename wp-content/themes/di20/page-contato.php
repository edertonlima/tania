<?php get_header(); ?>

	<section class="box-content box-contato">
		<div class="container">

			<h2>ENTRE EM CONTATO</h2>

			<div class="row">
				<div class="col-6">
					<div class="cont-txt">
						<?php the_field('texto') ?>
					</div>

					<div class="icon-top">
						<?php if(get_field('endereco','option')){ ?>
							<span class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico_mapa.png" alt="Endereço">
								<span><?php the_field('endereco','option'); ?></span>
							</span>
						<?php } ?>

						<?php if(get_field('telefone_1','option')){ ?>
							<span class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico_whats_pink.png" alt="Endereço">
								<span><?php the_field('telefone_1','option'); ?></span>
							</span>
						<?php } ?>

						<?php if(get_field('email','option')){ ?>
							<span class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico_envelope.png" alt="Endereço">
								<span class="email"><?php the_field('email','option'); ?></span>
							</span>
						<?php } ?>
					</div>
				</div>

				<div class="col-6">
					<form action="javascript:" id="form-contato">

						<fieldset>
							<input type="text" name="nome" id="nome" placeholder="Nome Completo">
						</fieldset>

						<fieldset>
							<input type="text" name="email" id="email" placeholder="E-mail">
						</fieldset>

						<fieldset>
							<input type="text" name="telefone" id="telefone" placeholder="Telefone">
						</fieldset>

						<fieldset>
							<input type="text" name="assunto" id="assunto" placeholder="Assunto">
						</fieldset>

						<fieldset>
							<textarea name="mensagem" id="mensagem">Escreva aqui sua mensagem…</textarea>
						</fieldset>

						<button type="button" class="enviar">ENVIAR</button>
						<p class="msg-form"></p>
					
					</form>
				</div>

		</div>
	</section>

<?php get_footer(); ?>

<script type="text/javascript">
	jQuery.noConflict();
	jQuery('document').ready(function(){
		jQuery('.contato a').addClass('active');
	});	
</script>