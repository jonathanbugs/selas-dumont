$(document).ready(function(){
	produtos();
	selectCategorias();
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


function selectCategorias(){
	var config = {
		'.chosen-select'           : {},
		'.chosen-select-deselect'  : {allow_single_deselect:false},
		'.chosen-select-no-single' : {disable_search_threshold:10},
		'.chosen-select-no-results': {no_results_text:'Oops, nothing found!'}
	}

	for (var selector in config) {
		$(selector).chosen(config[selector]);
	}
}