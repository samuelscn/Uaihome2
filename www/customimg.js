$(document).ready(function(){
	$('form[name = "form_img"]').submit(function(){
		var forma = $(this);
		var botao = $(this).find(':button');

		$.ajax({
			url: "ajax/controle_img.php",
			type: "POST",
			data: "acao=img&"+forma.serialize(),
			beforeSend: function(){
				botao.attr('disabled', true);
				$('.load').fadeIn('slow');
			},
			success: function(retorno){
				$('.load').fadeOut('slow', function(){
					botao.attr('disabled', false);
				});
				console.log(retorno);
				if(retorno === "naodeu"){
					swal("Erro ao fazer o upload!");
				}else{
					swal("Upload efetuado com sucesso!");
				}
			}
		});

		return false;
	});

});