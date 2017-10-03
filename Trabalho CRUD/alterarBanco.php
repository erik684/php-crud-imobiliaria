<?php 
include 'conectarBanco.php';

$id = $_POST['Id_Vend'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$numero = $_POST['numero'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];


$sql = "UPDATE TB_VENDEDOR SET Nome_Vend = '$nome',
		Sobrenome_Vend = '$sobrenome',
		Email_Vend = '$email',
		Cep_Vend = '$cep',
		Rua_Vend = '$rua',
		Bairro_Vend = '$bairro',
		Cidade_Vend = '$cidade',
		Estado_Vend = '$estado',
		Numero_Vend = '$numero',
		Cpf_Vend = '$cpf',
		Telefone_Vend = '$telefone',
		Celular_Vend = '$celular' WHERE
		Id_Vend = $id";

$result = mysqli_query($dbconnection, $sql);
header("Location: alterar.php?alterado=sucesso");
?>