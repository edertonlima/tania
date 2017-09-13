<!DOCTYPE html>
<html lang="pt-br">
<head>

<?php 
	$titulo_princ = get_field('titulo', 'option');
	$descricao_princ = get_field('descricao', 'option');
	$imagem_princ = get_field('imagem_principal', 'option');
	$url = get_home_url();
	$imgPage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' );

	if(is_tax()){
		$terms = get_queried_object();
		$titulo = $terms->name;
		$descricao = $terms->description;
		$imagem = get_field('imagem_listagem',$terms->taxonomy.'_'.$terms->term_id);
		$url = get_term_link($terms->term_id);
	}

	if(is_archive()){
		$titulo = get_field('titulo_pagina','option');
		$descricao = get_field('descricao_pagina','option');
		$imagem = get_field('imagem_pagina','option');
		$url = $url.'/produtos';
	}

	if(is_single()){
		$titulo = get_the_title();
		$descricao = get_the_excerpt();
		
		if($imgPage[0] != ''){
			$imagem = $imgPage[0];	
		}			
		$url = get_the_permalink();
	}

	if($titulo == ''){
		$titulo = $titulo_princ;
	}else{
		$titulo = $titulo.' - '.$titulo_princ;
	}
	
	if($descricao == ''){
		$descricao = $descricao_princ;
	}

	$autor = 'Di20 Desenvolvimento';
?>

<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" href="<?php the_field('favicon', 'option'); ?>" type="image/x-icon" />
<link rel="icon" href="<?php the_field('favicon', 'option'); ?>" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="pt" />
<meta name="rating" content="General" />
<meta name="description" content="<?php echo $descricao; ?>" />
<meta name="keywords" content="" />
<meta name="robots" content="index,follow" />
<meta name="author" content="<?php echo $autor; ?>" />
<meta name="language" content="pt-br" />
<meta name="title" content="<?php echo $titulo; ?>" />

<!-- SOCIAL META -->
<meta itemprop="name" content="<?php echo $titulo; ?>" />
<meta itemprop="description" content="<?php echo $descricao; ?>" />
<meta itemprop="image" content="<?php echo $imagem; ?>" />

<html itemscope itemtype="<?php echo $url; ?>" />
<link rel="image_src" href="<?php echo $imagem; ?>" />
<link rel="canonical" href="<?php echo $url; ?>" />

<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo $titulo; ?>" />
<meta property="og:type" content="article" />
<meta property="og:description" content="<?php echo $descricao; ?>" />
<meta property="og:image" content="<?php echo $imagem; ?>" />
<meta property="og:url" content="<?php echo $url; ?>" />
<meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>" />
<meta property="fb:admins" content="<?php echo $autor; ?>" />
<meta property="fb:app_id" content="1205127349523474" /> 

<meta name="twitter:card" content="summary" />
<meta name="twitter:url" content="<?php echo $url; ?>" />
<meta name="twitter:title" content="<?php echo $titulo; ?>" />
<meta name="twitter:description" content="<?php echo $descricao; ?>" />
<meta name="twitter:image" content="<?php echo $imagem; ?>" />
<!-- SOCIAL META -->

<title><?php echo $titulo; ?></title>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" media="screen" />

<!-- JQUERY -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>

<script type="text/javascript">
	jQuery.noConflict();

	jQuery(document).ready(function(){

		jQuery('.menu-mobile').click(function(){
			if(jQuery(this).hasClass('active')){
				jQuery('.nav').css('top','-100vh');
				jQuery(this).removeClass('active');
				jQuery('.icon-top').removeClass('active');
			}else{
				jQuery('.nav').css('top','0px');
				jQuery(this).addClass('active');
				jQuery('.icon-top').addClass('active');
			}
		});

		if(jQuery('body').height() <= jQuery(window).height()){
			jQuery('.footer').css({position: 'absolute', bottom: '0px'});
		}else{
			jQuery('.footer').css({position: 'relative'});
		}
	});	

	jQuery(window).resize(function(){
		jQuery('.menu-mobile').removeClass('active');
		jQuery('.icon-top').removeClass('active');
		jQuery('.nav').css('top','-100vh');
		if(jQuery('body').height() <= jQuery(window).height()){
			jQuery('.footer').css({position: 'absolute', bottom: '0px'});
		}else{
			jQuery('.footer').css({position: 'relative'});
		}
	});
</script>

</head>
<body <?php body_class(); ?>>

	<header class="header">

		<div class="top-menu">
			<div class="container">
				<h1>
					<a href="<?php echo get_home_url(); ?>" title="<?php the_field('titulo','option'); ?>">
						<img src="<?php the_field('logo_header','option'); ?>" alt="<?php the_field('titulo','option'); ?>">
					</a>
				</h1>

				<div class="box-menu">
					<div class="icon-top">
						<?php if(get_field('link_agenda','option')){ ?>
							<a href="<?php the_field('link_agenda','option'); ?>" title="Agenda" class="item" target="">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico_agenda.png" alt="Agenda">
								<span>AGENDA</span>
							</a>
						<?php } ?>

						<?php if(get_field('telefone_1','option')){ ?>
							<span class="item">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico_whats.png" alt="Agenda">
								<span><?php the_field('telefone_1','option'); ?></span>
							</span>
						<?php } ?>
					</div>

					<nav class="nav">
						<ul class="menu-principal">
							
							<li class="quem-sou-eu">
								<a href="<?php echo get_permalink(get_page_by_path('quem-sou-eu')); ?>" title="Quem sou eu">Quem sou eu</a>
							</li>

							<li class="pergunta-para-tania">
								<a href="<?php echo get_permalink(get_page_by_path('pergunta-para-tania')); ?>" title="Pergunta para Tânia">Pergunta para Tânia</a>
							</li>

							<li class="blog">
								<a href="<?php echo get_home_url(); ?>/blog" title="Blog">Blog</a>
							</li>

							<li class="contato">
								<a href="<?php echo get_permalink(get_page_by_path('contato')); ?>" title="Contato">Contato</a>
							</li>
						</ul>
					</nav>

					<a href="javascript:" class="menu-mobile"><span><em>X</em></span></a>

				</div>
			</div>
		</div>
	</header>