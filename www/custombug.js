$(document).ready(function(){
	
	$('form[name = "form_email"]').submit(function(){
		var forma = $(this);
		var botao = $(this).find(':button');

		$.ajax({
			url: "ajax/controle_bug.php",
			type: "POST",
			data: "acao=bug&"+forma.serialize(),
			beforeSend: function(){
				botao.attr('disabled', true);
				$('.load').fadeIn('slow');
			},
			success: function(retorno){
				$('.load').fadeOut('slow', function(){
					botao.attr('disabled', false);
				});
				swal("Obrigado pela ajuda!", "Mensagem enviada com sucesso!", "success");
			}
		});

		return false;
	});

});

