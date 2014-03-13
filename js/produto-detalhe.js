$(document).ready(function(){
	trocaImagemDestaque();
	modalMaisInformacoes();
	validaFormInformacoes();
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


/* =========
   MODAL MAIS INFORMACOES
   ========= */
function modalMaisInformacoes(){
	$(".btMaisInfos").fancybox({
		fitToView: false,
		padding: 0,
		scrolling: "visible"
	});


	$('.btMaisInfos').on('click', function(){
		var ele = $(this),
			tituloProduto,
			modal = $('#modalMaisInformacoes');

		imagemProduto = ele.parents().find('.itemThumbCapa').find('.imgThumb').attr('src');
		tituloProduto = ele.parents().find('.nomeProduto').html();

		modal.find('.imagemProduto').attr('src', imagemProduto);
		modal.find('.tituloProduto').html(tituloProduto);
		modal.find('input[name^=produto]').attr('value', tituloProduto);
	});
}



/* =========
   VALIDACAO DO FORMULARIO DE MAIS INFORMACOES
   ========= */
function validaFormInformacoes(){
	$('#formInformacoes').validate({
		ignore: "",
		errorLabelContainer: "#errorContainer", 
		errorElement: "div",
		rules: {
			nome:     { required: true },
			telefone: { required: true },
			email:    { required: true, email: true },
			mensagem: { required: true },
		},

		messages: {
			nome: "",
			telefone: "",
			email: "",
			mensagem: ""
		},

		submitHandler:function() {
			enviaInformacoes();
		},

		errorContainer: $('#formInformacoes .errorBox')
	});
}

function enviaInformacoes(){
	var produto   = $("#produto").val();
	var nome      = $("#nome").val();
	var telefone  = $("#telefone").val();
	var email     = $("#email").val();
	var mensagem  = $("#mensagem").val();

	$.post("./ajax/_post.mais_informacoes.php", {
		'produto'  : produto,
		'nome'     : nome,
		'telefone' : telefone,
		'email'    : email,
		'mensagem' : mensagem
	},

	function(data){
		$("#produto").val('');
		$("#nome").val('').prev().show();
		$("#telefone").val('').prev().show();
		$("#email").val('').prev().show();
		$("#mensagem").val('').prev().show();
	}, "html");
	
	alert('Sua mensagem foi enviada com sucesso. Obrigado!');
}