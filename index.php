<? $sessao = 'home'; ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<!--meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"-->
		<title>Selas Dumont</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta property="og:url" content="http://selasdumont.com.br"/>
		<meta property="og:title" content="Selas Dumont"/>
		<meta property="og:image" content="http://selasdumont.com.br/img/facebook-thumb.jpg"/>
		<meta property="og:site_name" content="Selas Dumont"/>

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="shortcut icon" href="http://selasdumont.com.br/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="http://selasdumont.com.br/apple-touch-icon.png"/>


		<link rel="stylesheet" href="css/reset.css"/>
		<link rel="stylesheet" href="css/main.css"/>
		<link rel="stylesheet" href="css/inicial.css"/>
		<link rel="stylesheet" href="css/jquery.fancybox.css"/>
		<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
		<!--[if lt IE 7]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->

		<div id="wrapper">
			<? include 'includes/topo.php'; ?>

			<!-- SESSAO SELAS DUMONT -->
			<section id="sessaoSelasDumont" class="sessao">
				<div class="container">
					<h2 class="sessaoTitulo">
						<span class="tituloMenor clearfix">
							<span class="tituloBg"></span>  
							<span class="titulo">Sobre a</span>
							<span class="tituloBg"></span>
						</span>
						<span class="tituloMaior">Selas Dumont</span>
					</h2>
					<p class="sessaoDescricao">
						As Selas Dumont vem desde 1994 desenvolvendo encilhas de qualidade,visando o melhor em tecnologia e conforto para o cavaleiro e seu cavalo. Buscando sempre novas alternativas e materias para melhor atende-los. Contamos com experiencia de uso proprio em todos nossas linhas e afirmamos a qualidade e conforto de nossos produtos.
					</p>
					<div id="fotos">
						<div id="blocoFotos">
							<span class="linha"></span>
							<ul id="fotosUl" class="clearfix">
								<li class="fotosLi geralTransition">
									<img src="img/fotos/1.jpg" alt="" />
								</li>
								<li class="fotosLi geralTransition">
									<img src="img/fotos/2.jpg" alt="" />
								</li>
								<li class="fotosLi geralTransition">
									<img src="img/fotos/3.jpg" alt="" />
								</li>
								<li class="fotosLi geralTransition">
									<img src="img/fotos/4.jpg" alt="" />
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			
			<!-- SESSAO PRODUTOS -->
			<section id="sessaoProdutos" class="sessao">
				<div class="container">
					<h2 class="sessaoTitulo sessaoTituloBranco">
						<span class="tituloMenor clearfix">
							<span class="tituloBg tituloBgBranco"></span>  
							<span class="titulo">Conheça</span>
							<span class="tituloBg tituloBgBranco"></span>
						</span>
						<span class="tituloMaior">Nossos Produtos</span>
					</h2>

					<div id="produtos">
						<div id="listaProdutos">
	    					<a href="javascript:;" class="btProdutos geralTransition" id="anteriorProduto">
	    						<span class="icone geralTransition arrow_carrot-left"></span>
	    					</a>
	    					<a href="javascript:;" class="btProdutos geralTransition" id="proximoProduto">
	    						<span class="icone geralTransition arrow_carrot-right"></span>
	    					</a>

							<ul id="produtosUl" class="clearfix" data-cycle-log="false" data-cycle-fx="carousel" data-cycle-timeout="0" data-cycle-next="#proximoProduto" data-cycle-prev="#anteriorProduto" data-cycle-carousel-visible="3" data-allow-wrap="false" data-cycle-slides="li">
								<li class="produtosLi">
									<a class="produtosLink" href="javascript:;">
										<span class="produtoImagem">
											<img class="produtosImg" src="img/produtos/selas.jpg" alt="" />
										</span>
										<h3 class="produtosTitulo table">
											<span class="tableCell">Selas</span>
										</h3>
									</a>
								</li>
								<li class="produtosLi">
									<a class="produtosLink" href="javascript:;">
										<span class="produtoImagem">
											<img class="produtosImg" src="img/produtos/bastos.jpg" alt="" />
										</span>
										<h3 class="produtosTitulo table">
											<span class="tableCell">Bastos</span>
										</h3>
									</a>
								</li>
								<li class="produtosLi">
									<a class="produtosLink" href="javascript:;">
										<span class="produtoImagem">
											<img class="produtosImg" src="img/produtos/loros.jpg" alt="" />
										</span>
										<h3 class="produtosTitulo table">
											<span class="tableCell">Loros</span>
										</h3>
									</a>
								</li>
								<li class="produtosLi">
									<a class="produtosLink" href="javascript:;">
										<span class="produtoImagem">
											<img class="produtosImg" src="img/produtos/selas.jpg" alt="" />
										</span>
										<h3 class="produtosTitulo table">
											<span class="tableCell">Selas</span>
										</h3>
									</a>
								</li>
								<li class="produtosLi">
									<a class="produtosLink" href="javascript:;">
										<span class="produtoImagem">
											<img class="produtosImg" src="img/produtos/bastos.jpg" alt="" />
										</span>
										<h3 class="produtosTitulo table">
											<span class="tableCell">Bastos</span>
										</h3>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>

			<!-- SESSAO ONDE COMPRAR -->
			<section id="sessaoOndeComprar" class="sessao">
				<div class="container">
					<h2 class="sessaoTitulo">
						<span class="tituloMenor clearfix">
							<span class="tituloBg"></span>  
							<span class="titulo">Saiba</span>
							<span class="tituloBg"></span>
						</span>
						<span class="tituloMaior">Onde Comprar</span>
					</h2>
					<p class="sessaoDescricao">
						As Selas Dumont vem desde 1994 desenvolvendo encilhas de qualidade,visando o melhor em tecnologia e conforto para o cavaleiro e seu cavalo. Buscando sempre novas alternativas e materias para melhor atende-los. Contamos com experiencia de uso proprio em todos nossas linhas e afirmamos a qualidade e conforto de nossos produtos.
					</p>
					<ul id="ondeComprarUl" class="clearfix">
						<li class="ondeComprarLi">
							<a class="ondeComprarLink geralTransition" href="#modalLojasFisicas">
								<img src="img/fotos/lojas_fisicas.jpg" alt="Lojas F&iacute;sicas" />
								<span class="circulo geralTransition">
									<span class="titulo geralTransition">
										<span class="tituloLojas">
											<span class="nome geralTransition">Lojas</span>
											<span class="linha geralTransition"></span>
										</span>
										<span class="tituloTipo">F&iacute;sicas</span>
									</span>
								</span>
							</a>
						</li>
						<li class="ondeComprarLi">
							<a class="ondeComprarLink geralTransition" href="#modalLojasVirtuais">
								<img src="img/fotos/lojas_virtuais.jpg" alt="Lojas Virtuais" />
								<span class="circulo geralTransition">
									<span class="titulo geralTransition">
										<span class="tituloLojas">
											<span class="nome geralTransition">Lojas</span>
											<span class="linha geralTransition"></span>
										</span>
										<span class="tituloTipo">Virtuais</span>
									</span>
								</span>
							</a>
						</li>
					</ul>
				</div>
			</section>

			<!-- SESSAO FALE CONOSCO -->
			<section id="sessaoFaleConosco" class="sessao sessaoCentro">
				<div class="container">
					<h2 class="sessaoTitulo">
						<span class="tituloMenor clearfix">
							<span class="tituloBg"></span>  
							<span class="titulo">Lorem</span>
							<span class="tituloBg"></span>
						</span>
						<span class="tituloMaior">Fale Conosco</span>
					</h2>
					<div id="conteudoContatos">
						<div id="blocoContatos" class="clearfix">
							<div id="formulario">
								<form action="javascript:;" method="post" name="contatoForm" id="contatoForm" lang="pt">
									<div class="relative">
										<label class="label" for="nome">Nome</label>
										<input class="input" type="text" id="nome" name="nome" />
									</div>
									<div class="relative">
										<label class="label" for="email">E-mail</label>
										<input class="input" type="email" id="email" name="email" />
									</div>
									<div class="relative">
										<label class="label" for="mensagem">Mensagem</label>
										<textarea class="textarea" id="mensagem" name="mensagem"></textarea>
									</div>
									<div class="relative">
										<button type="submit" class="btSubmit geralTransition">
											Enviar
										</button>
									</div>
									<div id="contatoResposta">
										<div id="erroContato" class="message">
											<span class="icone icon_close_alt2"></span>
											<span class="txtMensagem">Aconteceu um erro. Tente novamente</span>
										</div>
										<div id="sucessoContato" class="message">
											<span class="icone icon_check_alt2"></span>
											<span class="txtMensagem">Mensagem enviada com sucesso!</span>
										</div>
									</div>				
								</form>
							</div>
							<div id="informacoesContato">
								<span class="tituloGeral">Contatos:</span>
								<ul class="informacoesUl">
									<li class="informacoesLi">
										<a href="tel:+5135682905">(051) 3568 2905</a>
									</li>
									<li class="informacoesLi">
										<a href="mailto:contato@selasdumont.com.br">contato@selasdumont.com.br</a>
									</li>
								</ul>
								<ul class="informacoesUl">
									<li class="informacoesLi">Avenida Arnaldo Pereira da Silva, 208</li>
									<li class="informacoesLi">Santos Dumont, São Leopoldo</li>
									<li class="informacoesLi">RS, Brasil</li>
								</ul>
								<ul id="socialUl" class="clearfix">
									<li class="socialLi">
										<a class="socialLink geralTransition" href="mailto:contato@selasdumont.com.br" target="_blank">
											<span class="icone geralTransition icon_mail_alt"></span>
										</a>
									</li>
									<li class="socialLi">
										<a class="socialLink geralTransition" href="javascript:;" target="_blank">
											<span class="icone geralTransition social_facebook"></span>
										</a>
									</li>
									<li class="socialLi">
										<a class="socialLink geralTransition" href="javascript:;" target="_blank">
											<span class="icone geralTransition social_youtube"></span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>

			<? include 'includes/rodape.php'; ?>
		</div>

		<div id="modalLojasFisicas" class="modal">
			<span class="modalTitulo">Lojas Físicas</span>

			<ul id="lojasUl">
				<li class="lojasLi clearfix">
					<span class="lojaTitulo">Loja da Fábrica</span>
					<div class="lojaBloco">
						<span class="icone icon_phone"></span>
						<ul class="lojainfosUl">
							<li class="lojainfosLi">
								<a href="tel:+5135723000">51 3572 3000</a>
							</li>
							<li class="lojainfosLi">
								<a href="mailto:contato@loja.com.br">contato@loja.com.br</a>
							</li>
							<li class="lojainfosLi">
								<a href="http://www.loja.com.br" target="_blank">www.loja.com.br</a>
							</li>
						</ul>
					</div>
					<div class="lojaBloco">
						<span class="icone icon_pin"></span>
						<ul class="lojainfosUl">
							<li class="lojainfosLi">
								<span>Rua Juiz de Fora, 257,</span>
								<span>Scharlau, São Leopoldo</span>
								<span>RS, Brasil</span>
							</li>
						</ul>
					</div>
				</li>

				<li class="lojasLi clearfix">
					<span class="lojaTitulo">Loja dos Pampas</span>
					<div class="lojaBloco">
						<span class="icone icon_phone"></span>
						<ul class="lojainfosUl">
							<li class="lojainfosLi">
								<a href="tel:+5135723000">51 3572 3000</a>
							</li>
							<li class="lojainfosLi">
								<a href="mailto:contato@loja.com.br">contato@loja.com.br</a>
							</li>
							<li class="lojainfosLi">
								<a href="http://www.loja.com.br" target="_blank">www.loja.com.br</a>
							</li>
						</ul>
					</div>
					<div class="lojaBloco">
						<span class="icone icon_pin"></span>
						<ul class="lojainfosUl">
							<li class="lojainfosLi">
								<span>Rua Juiz de Fora, 257,</span>
								<span>Scharlau, São Leopoldo</span>
								<span>RS, Brasil</span>
							</li>
						</ul>
					</div>
				</li>
			</ul>
		</div>

		<div id="modalLojasVirtuais" class="modal">
			<span class="modalTitulo">Lojas Virtuais</span>

			<ul id="lojasUl">
				<li class="lojasLi">
					<div class="lojaBloco">
						<span class="icone icon_cursor"></span>
						<ul class="lojainfosUl">
							<li class="lojainfosLi">
								<span class="lojaTitulo">Loja dos Pampas</span>
								<a href="http://www.universocampeiro.com.br" target="_blank">www.universocampeiro.com.br</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="lojasLi">
					<div class="lojaBloco">
						<span class="icone icon_cursor"></span>
						<ul class="lojainfosUl">
							<li class="lojainfosLi">
								<span class="lojaTitulo">Loja dos Pampas</span>
								<a href="http://www.universocampeiro.com.br" target="_blank">www.universocampeiro.com.br</a>
							</li>
						</ul>
					</div>
				</li>
			</ul>
		</div>

		<!-- SCRIPTS -->
		<script src="js/vendor/jquery-1.9.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/main.js"></script>
		<script src="js/inicial.js"></script>
	</body>
</html>
 