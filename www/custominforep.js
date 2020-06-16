$(document).ready(function(){
	$('form[name = "form_info_rep"]').submit(function(){
		var forma = $(this);
		var botao = $(this).find(':button');

		$.ajax({
			url: "ajax/controle_altera_rep.php",
			type: "POST",
			data: "acao=altera&"+forma.serialize(),
			beforeSend: function(){
				botao.attr('disabled', true);
				$('.load').fadeIn('slow');
			},
			success: function(retorno){
				$('.load').fadeOut('slow', function(){
					botao.attr('disabled', false);
				});
				swal("Alteração feita com sucesso!", "...", "success");
			}
		});

		return false;
	});

});
