$(document).ready(function(){
	produtos();
	filtroProdutos();
});

/* =========
   PRODUTOS
   ========= */
function produtos(){
	$('.produtosUl').mixitup({
		targetSelector: '.mix',
		filterSelector: '.filter',
		effects: ['scale'],
		listEffects: null,
		easing: 'smooth',
		showOnLoad: 'all',
		targetDisplayGrid: 'block',
		targetDisplayList: 'block'
	});
}

function filtroProdutos(){
	var btSelect = $('#btSelect'),
		textoSelect = btSelect.find('.txt');

	btSelect.on('click', function(){
		$(this).toggleClass('btSelectAberto').next().slideToggle();

		$('.filtroLink').on('click', function(){
			var textoSelecionado = $(this).html();
			textoSelect.html(textoSelecionado);

			btSelect.removeClass('btSelectAberto');
			$('#filtroUl').slideUp('fast');
		})
	});
}