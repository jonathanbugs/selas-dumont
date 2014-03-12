$(document).ready(function(){
	slideProdutos();
	validaForm();
});


function slideProdutos(){
	$('#produtosUl').cycle({
		slideResize: true,
		containerResize: true,
		fit: 1
	});
}

/* =========
   VALIDACAO DO FORMULARIO DE CONTATO
   ========= */
function validaForm(){
	$('#contatoForm').validate({
		ignore: "",
		errorLabelContainer: "#errorContainer", 
		errorElement: "div",
		rules: {
			nome:     { required: true },
			email:    { required: true, email: true },
			mensagem: { required: true },
		},

		messages: {
			nome: "",
			email: "",
			mensagem: ""
		},

		submitHandler:function() {
			enviaContato();
			
			$('#contatoResposta #sucessoContato').fadeTo(1000, 1);
			setTimeout(function() {
				$('#contatoResposta #sucessoContato').fadeTo(500, 0);
			}, 4000);
		},

		errorContainer: $('#contatoResposta #erroContato')
	});
}


function enviaContato(){
	var nome      = $("#nome").val();
	var email     = $("#email").val();
	var mensagem  = $("#mensagem").val();

	$.post("./ajax/_post.contato.php", {
		'nome'     : nome,
		'email'    : email,
		'mensagem' : mensagem
	},
	function(data){
		$("#nome").val('').prev().show();
		$("#email").val('').prev().show();
		$("#mensagem").val('').prev().show();
	}, "html");
}