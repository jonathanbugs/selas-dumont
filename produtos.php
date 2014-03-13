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
		<link rel="stylesheet" href="css/produtos.css"/>
		<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
		<!--[if lt IE 7]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->
		
		<div id="wrapper" class="internas">
			<? include 'includes/topo.php'; ?>

			<!-- SESSAO PRODUTOS -->
			<section id="produtos" class="sessaoInterna">
				<div class="container">
					<h2 class="sessaoTitulo">
						<span class="tituloMenor clearfix">
							<span class="tituloBg"></span>  
							<span class="titulo">Conheça</span>
							<span class="tituloBg"></span>
						</span>
						<span class="tituloMaior">Nossos Produtos</span>
					</h2>
				</div>
				<nav id="menuProdutos">
					<ul id="menuProdutosUl" class="clearfix">
						<li class="menuProdutosLi">
							<a class="menuProdutosLink geralTransition filter" href="javascript:;" data-filter="all">Todos</a>
						</li>
						<li class="menuProdutosLi">
							<a class="menuProdutosLink geralTransition filter" href="javascript:;" data-filter="selas">Selas</a>
						</li>
						<li class="menuProdutosLi">
							<a class="menuProdutosLink geralTransition filter" href="javascript:;" data-filter="bastos">Bastos</a>
						</li>
						<li class="menuProdutosLi">
							<a class="menuProdutosLink geralTransition filter" href="javascript:;" data-filter="loros">Loros</a>
						</li>
						<li class="menuProdutosLi">
							<a class="menuProdutosLink geralTransition filter" href="javascript:;" data-filter="caronas-e-xergas">Caronas e Xergas</a>
						</li>
						<li class="menuProdutosLi">
							<a class="menuProdutosLink geralTransition filter" href="javascript:;" data-filter="redeas-e-bucais">Rédeas e Buçais</a>
						</li>
						<li class="menuProdutosLi">
							<a class="menuProdutosLink geralTransition filter" href="javascript:;" data-filter="badanas">Badanas</a>
						</li>
						<li class="menuProdutosLi">
							<a class="menuProdutosLink geralTransition filter" href="javascript:;" data-filter="barrigueiras-e-travessoes">Barrigueiras e Travessões</a>
						</li>
					</ul>
				</nav>

				<div id="filtroCategoria">
					<a id="btSelect" href="javascript:;">
						<span class="txt">Todos</span>
						<span class="icone geralTransition"></span>
					</a>
					<ul id="filtroUl" class="clearfix">
						<li class="filtroLi">
							<a class="filtroLink filter" href="javascript:;" data-filter="all">Todos</a>
						</li>
						<li class="filtroLi">
							<a class="filtroLink filter" href="javascript:;" data-filter="selas">Selas</a>
						</li>
						<li class="filtroLi">
							<a class="filtroLink filter" href="javascript:;" data-filter="bastos">Bastos</a>
						</li>
						<li class="filtroLi">
							<a class="filtroLink filter" href="javascript:;" data-filter="loros">Loros</a>
						</li>
						<li class="filtroLi">
							<a class="filtroLink filter" href="javascript:;" data-filter="caronas-e-xergas">Caronas e Xergas</a>
						</li>
						<li class="filtroLi">
							<a class="filtroLink filter" href="javascript:;" data-filter="redeas-e-bucais">Rédeas e Buçais</a>
						</li>
						<li class="filtroLi">
							<a class="filtroLink filter" href="javascript:;" data-filter="badanas">Badanas</a>
						</li>
						<li class="filtroLi">
							<a class="filtroLink filter" href="javascript:;" data-filter="barrigueiras-e-travessoes">Barrigueiras e Travessões</a>
						</li>
					</ul>
				</div>

				<div id="listaProdutos">
					<ul id="produtosUl" class="produtosUl clearfix geralTransition">
						<li class="produtosLi mix selas geralTransition">
							<a class="produtosLink" href="">
								<span class="table">
									<span class="tableCell">
										<span class="verProduto geralTransition">Ver Produto</span>
										<img class="produtosImg" src="img/produto1.png" />
									</span>
								</span>
								<span class="produtosTitulo">Sela Australiana</span>
							</a>
						</li>
						<li class="produtosLi mix selas geralTransition">
							<a class="produtosLink" href="">
								<span class="table">
									<span class="tableCell">
										<span class="verProduto geralTransition">Ver Produto</span>
										<img class="produtosImg" src="img/produto2.png" />
									</span>
								</span>
								<span class="produtosTitulo">Sela Casquinha</span>
							</a>
						</li>
						<li class="produtosLi mix selas geralTransition">
							<a class="produtosLink" href="">
								<span class="table">
									<span class="tableCell">
										<span class="verProduto geralTransition">Ver Produto</span>
										<img class="produtosImg" src="img/produto3.png" />
									</span>
								</span>
								<span class="produtosTitulo">Sela Crioula</span>
							</a>
						</li>
						<li class="produtosLi mix selas geralTransition">
							<a class="produtosLink" href="">
								<span class="table">
									<span class="tableCell">
										<span class="verProduto geralTransition">Ver Produto</span>
										<img class="produtosImg" src="img/produto4.png" />
									</span>
								</span>
								<span class="produtosTitulo">Sela Marrequinha Especial</span>
							</a>
						</li>
						<li class="produtosLi mix bastos geralTransition">
							<a class="produtosLink" href="">
								<span class="table">
									<span class="tableCell">
										<span class="verProduto geralTransition">Ver Produto</span>
										<img class="produtosImg" src="img/produto5.png" />
									</span>
								</span>
								<span class="produtosTitulo">Basto Criolo</span>
							</a>
						</li>
					</ul>
				</div>
			</section>

			<? include 'includes/rodape.php'; ?>
		</div>

		<!-- Scripts -->
		<script src="js/vendor/jquery-1.9.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/main.js"></script>
		<script src="js/produto.js"></script>
	</body>
</html>
 