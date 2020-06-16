$(document).ready(function(){
	
	$('form[name = "form_teste"]').submit(function(){
		var forma = $(this);
		var botao = $(this).find(':button');

		$.ajax({
			url: "ajax/controle.php",
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
				
				if(retorno === 'noemail'){
					swal("Email inexistente!");
				}
				else if(retorno === 'nosenha'){
					swal("Senha incorreta");
				}else{
					swal({
					  title: "Login efetuado com sucesso!",
					  text: "Aguarde alguns segundos.",
					  timer: 4000,
					  showConfirmButton: false
					});
					setTimeout(function(){
							$( ".body" ).hide( "slow" );
						}, 4000)
					setTimeout(function(){
						$(location).attr('href', 'menu.php');
					}, 4500)
				}


			}
		});

		return false;
	});

});

