<?php 
include 'conectarBanco.php';

$IdVend = $_GET['idvend'];

$sql = "DELETE FROM TB_VENDEDOR WHERE Id_Vend = $IdVend ";
$resultado = mysqli_query($dbconnection, $sql);
header("Location: ./excluir.php?acao=successo");
?>