$(document).ready(function(){
	$('form[name = "form_cadastro"]').submit(function(){
		var forma = $(this);
		var botao = $(this).find(':button');

		$.ajax({
			url: "ajax/controle_cadastro.php",
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

				if(retorno === "emailexiste"){
					swal("Email já cadastrado!");
				}
				else if(retorno === "pequena"){
					swal("Digite uma senha com no mínimo 8 caracteres!");
				}else{
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
						$(location).attr('href', 'sessao/apos_cadastro_user.php');
					}, 4500)
				}
			}
		});

		return false;
	});

});