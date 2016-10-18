	$(document).ready(function(){
		    /**
            * @author Caciano - 15-10-2016 - Refresh na tabela sem precisar atualizar a pagina
            * @return - retorna a tabela atualizada apos remoção de registro
            */
            function reloadTable(){
            	$.ajax({
            		url: "FrequencyController/",
            		type: "POST",
            		data: $("table"),
            		success: function(data){
            			$("#Tfrequency").html($(data).find("table"));
            			console.log($(data).find("table"));
            		},
            		error: function(){
            			console.log(data);
            			window.location.reload();
            		}
            	});
            }
        /**
            * @author Caciano - 15-10-2016 - Pega o id do cadastro que quer deletar apartir do click do botao de delete
            * @return - abre o modal com o id
            */
            var idFrequency;
            $("table").on("click",".delete_frequency", function(){
            	$('#deleteFrequency').modal();	
            	idFrequency = $(this).attr("id");
            });

                /**
            * @author Caciano - 15-10-2016 - Envia o id do cadastro que quer deletar apartir do click do botao de delete para o controller
            * @return - mensagem de sucesso ou erro da ação do sistema
            */
            $("#delete_frequency").on("click", function(){
            	$.ajax({
            		url: "FrequencyController/delete/" + idFrequency,
            		type: "POST",
            		data: {id_frequency: idFrequency},
            		success: function(data){
					//Se o controller nao conseguir deletar o cadastro retorna uma mensagem
					if(!data){
						alert(data);
					}else{
						//Se conseguir o controller conseguir deletar
						//Chama uma div de sucess
						var x = document.getElementById("sucessDelete")
						x.className = "show";
                        // Depois de 3 segundos remove a div
                        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
                        reloadTable();
                    }
                },
                error: function(data){
                	console.log(data);
                	alert('Erro ao Excluir! - Cadastro sendo utilizado');	
                }
            });
            }); 
        }); 