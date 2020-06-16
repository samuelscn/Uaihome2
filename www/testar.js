$(document).ready(function(){
	$('#perfil05').click(function(){
		var forma = $(this);
		var botao = $(this).find(':button');

		$.ajax({
			url: "ajax/controle_validar.php",
				type: "POST",
				beforeSend: function(){
					botao.attr('disabled', true);
					$('.load').fadeIn('slow');
				},
				sucess: function(retorno){
					$('.load').fadeOut('slow', function(){
					botao.attr('disabled', false);
					});

					if(retorno === 'naoexiste'){
						swal("Desculpe!", "Você não possui nenhuma republica.", "error");
					}else{
						$(location).attr('href', '../adm-republica.php');
					}
				}
		});

		return false;
	});

});


