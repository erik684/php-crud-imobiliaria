$(document).ready( function() {
   /* Executa a requisição quando o campo CEP perder o foco */
   $('#Jcep').blur(function(){
           /* Configura a requisição AJAX */
           $.ajax({
                url : 'consultar_cep.php', /* URL que será chamada */ 
                type : 'POST', /* Tipo da requisição */ 
                data: 'cep=' + $('#Jcep').val(), /* dado que será enviado via POST */
                dataType: 'json', /* Tipo de transmissão */
                success: function(data){
                    if(data.sucesso == 1){
                        $('#Jrua').val(data.rua);
                        $('#Jbairro').val(data.bairro);
                        $('#Jcidade').val(data.cidade);
                        $('#Jestado').val(data.estado); 
                        $('#Jcomplemento').focus();
                    }
                }
           });   
   return false;    
   })
});