<header id="topo" class="clearfix">
	<div class="container">
		<nav id="menu">

			<a id="logoMobile" href="#topo">
				<img src="img/logos/logo.png" data-src2x="img/logos/logo_2x.png" alt="Selas Dumont" />
			</a>

			<a id="btMenuMobile" href="javascript:;">
				<span>menu <span class="icone geralTransition"></span></span>
			</a>
			<ul id="menuUl" class="clearfix">
				<li class="menuLi menuLiLeft geralTransition">
					<a class="menuLink" href="#sessaoSelasDumont">
						Selas Dumont
						<span class="geralTransition"></span>
					</a>
				</li>
				<li class="menuLi menuLiProdutos geralTransition">
					<a class="menuLink" href="produtos.php">
						Nossos Produtos
					</a>
					<ul>
						<li>
							<a href="javscript:;">Selas <span class="borda geralTransition"></span></a>
						</li>
						<li>
							<a href="javscript:;">Bastos <span class="borda geralTransition"></span></a>
						</li>
						<li>
							<a href="javscript:;">Loros <span class="borda geralTransition"></span></a>
						</li>
						<li>
							<a href="javscript:;">Caronas e Xergos <span class="borda geralTransition"></span></a>
						</li>
						<li>
							<a href="javscript:;">Rédeas e Buçais <span class="borda geralTransition"></span></a>
						</li>
					</ul>
				</li>
				<li class="menuLi menuLiLogo">
					<h1 id="logo">
						<a href="#topo">
							<img src="img/logos/logo.png" data-src2x="img/logos/logo_2x.png" alt="Selas Dumont" />
						</a>
					</h1>
				</li>
				<li class="menuLi menuLiComprar geralTransition">
					<a class="menuLink" href="#sessaoOndeComprar">
						Onde Comprar
						<span class="geralTransition"></span>
					</a>
				</li>
				<li class="menuLi menuLiFaleConosco menuLiLast geralTransition">
					<a class="menuLink" href="#sessaoFaleConosco">
						Fale Conosco
						<span class="geralTransition"></span>
					</a>
				</li>
			</ul>
		</nav>

		<?php if( $sessao == "home" ) { ?>
			<section id="banner">
				<img src="img/banner/banner.jpg" alt="" />
			</section>
		<?php } ?>
	</div>
</header>