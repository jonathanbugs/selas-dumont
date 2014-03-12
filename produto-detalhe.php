<? $sessao = 'produto-detalhe'; ?>
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
		<link rel="stylesheet" href="css/jquery.fancybox.css"/>
		<link rel="stylesheet" href="css/main.css"/>
		<link rel="stylesheet" href="css/produto-detalhe.css"/>
		<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
		<!--[if lt IE 7]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->

		<div id="wrapper" class="internas">
			<? include 'includes/topo.php'; ?>

			<!-- SESSAO PRODUTO DETALHe -->
			<section id="produtoDetalhe" class="sessaoInterna">
				<div class="container">
					<h2 class="sessaoTitulo">
						<span class="tituloMenor clearfix">
							<span class="tituloBg"></span>  
							<span class="titulo">Conheça</span>
							<span class="tituloBg"></span>
						</span>
						<span class="tituloMaior">Nossos Produtos</span>
					</h2>

					<div class="infoProduto clearfix">
						<div class="galeriaProduto">
							<ul class="thumbs">
								<li class="itemThumb geralTransition">
									<a class="linkThumb" href="javascript:;">
										<div class="tableCell">
											<img class="imgThumb" src="img/produto-detalhe/thumbs/1.png" alt="" />
										</div>
									</a>
								</li>
								<li class="itemThumb geralTransition">
									<a class="linkThumb" href="javascript:;">
										<div class="tableCell">
											<img class="imgThumb" src="img/produto-detalhe/thumbs/2.png" alt="" />
										</div>
									</a>
								</li>
								<li class="itemThumb geralTransition">
									<a class="linkThumb" href="javascript:;">
										<div class="tableCell">
											<img class="imgThumb" src="img/produto-detalhe/thumbs/3.png" alt="" />
										</div>
									</a>
								</li>
							</ul>
							<div class="imgDetalhe">
								<div class="table">
									<div class="tableCell">
										<img class="imgDestaque" src="img/produto-detalhe/grandes/1.png" alt="" />
									</div>
								</div>
							</div>
						</div>
						<div class="sobreProduto">
							<h1 class="nomeProduto">Sela Australiana</h1>
							<div class="descricaoProduto cms">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dapibus erat ligula, in volutpat urna viverra at. Cras vel sem eget arcu consequat dictum. Nunc cursus quam mauris, vitae mattis nunc consequat bibendum.</p>
							</div>

							<a href="javascript:;" class="btMaisInfos">Quero saber mais sobre este produto</a>
						</div>
					</div>

					<a href="" class="btVoltar">Voltar para a página de produtos</a>
				</div>
			</section>

			<? include 'includes/rodape.php'; ?>
		</div>

		<!-- SCRIPTS -->
		<script src="js/vendor/jquery-1.9.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/main.js"></script>
		<script src="js/produto-detalhe.js"></script>
	</body>
</html>
 