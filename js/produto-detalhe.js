$(document).ready(function(){
	trocaImagemDestaque();
});

/* =========
   IMAGENS PRODUTO
   ========= */
function trocaImagemDestaque(){
	var link,
		novoLink;

	$('.itemThumb').on('click', function(){

		$('.itemThumb').removeClass('itemThumbAtivo');
		$(this).addClass('itemThumbAtivo');

		link = $(this).find('.imgThumb').attr('src');
		novoLink = link.replace('thumbs', 'grandes');

		$('.imgDetalhe').find('.imgDestaque').attr('src', novoLink);
	});
}