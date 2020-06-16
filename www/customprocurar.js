$(document).ready(function(){
	$('form[name = "form_procurar"]').submit(function(){
		var forma = $(this);
		var botao = $(this).find(':button');

		$.ajax({
			url: "ajax/controle_procurar.php",
			type: "POST",
			data: "acao=procurar&"+forma.serialize(),
			beforeSend: function(){
				botao.attr('disabled', true);
				$('.load').fadeIn('slow');
			},
			success: function(retorno){
				$('.load').fadeOut('slow', function(){
					botao.attr('disabled', false);
				});
					if(retorno === "naoencontrado"){
							swal("Não encontramos nenhuma República!");
					}else{
						swal({
						  title: "Repúblicas encontradas!",
						  text: "Aguarde alguns segundos.",
						  timer: 4000,
						  showConfirmButton: false
						});
						setTimeout(function(){
							$( ".body" ).hide( "slow" );
						}, 4000)
						setTimeout(function(){
							$(location).attr('href', 'resultado_procura.php');
						}, 4500)
				}
			}
		});

		return false;
	});

});