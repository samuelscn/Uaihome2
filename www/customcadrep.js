$(document).ready(function(){
	$('form[name = "form_rep"]').submit(function(){
		var forma = $(this);
		var botao = $(this).find(':button');

		$.ajax({
			url: "ajax/controle_cadastro_rep.php",
			type: "POST",
			data: "acao=email&"+forma.serialize(),
			beforeSend: function(){
				botao.attr('disabled', true);
				$('.load').fadeIn('slow');
			},
			success: function(retorno){
				$('.load').fadeOut('slow', function(){
					botao.attr('disabled', false);
				});
					console.log(retorno);
					swal({
					  title: "Cadastro efetuado com sucesso!",
					  text: "Aguarde alguns segundos.",
					  timer: 4000,
					  showConfirmButton: false
					});
					setTimeout(function(){
							$( ".body" ).hide( "slow" );
						}, 4000)
					setTimeout(function(){
						$(location).attr('href', 'sessao/salvando_id_rep.php');
					}, 4500)
			}
		});

		return false;
	});

});