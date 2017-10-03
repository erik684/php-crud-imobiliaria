<?php 
include 'conectarBanco.php';

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

$sql = "INSERT INTO tb_vendedor (Email_Vend, 
	Nome_Vend, 
	Sobrenome_Vend, 
	Cep_Vend, 
	Rua_Vend, 
	Bairro_Vend,
	Cidade_Vend,
	Estado_Vend,
	Numero_Vend,
	Cpf_Vend,
	Telefone_Vend,
	Celular_Vend)
	VALUES
	('$email', '$nome', '$sobrenome', '$cep', '$rua', '$bairro', '$cidade', '$estado', '$numero', '$cpf', '$telefone', '$celular')";

$resultado = mysqli_query($dbconnection, $sql);

header("Location: ./cadastro.php?acao=sucesso");

?>