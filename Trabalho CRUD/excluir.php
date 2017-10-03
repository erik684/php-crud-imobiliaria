<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="js/bootstrap.min.js">
 <link rel="stylesheet" href="js/jquery-3.1.1.min">
 <link rel="stylesheet" href="css/custom-navbar.css">
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Consultar Vendedor</title>
</head>

<body>

<div class="container"> 
	<!-- NAVBAR -->
	<nav class="navbar navbar-dark bg-primary">
	  <a class="navbar-brand" href="index.php">Inicio</a>
	  <ul class="nav navbar-nav">
	    <li class="nav-item active">
	      <a class="nav-link" href="cadastro.php">Cadastrar<span class="sr-only">(current)</span></a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="consultar.php">Consultar</a>
	    </li>	    
	    <li class="nav-item">
	      <a class="nav-link" href="alterar.php">Alterar</a>
	    </li>

	    <li class="nav-item">
	      <a class="nav-link" href="excluir.php">Excluir</a>
	    </li>
	  </ul>
	</nav>
	<!-- END NAVBAR -->
</div>
<div class="container">

<?php 
if (isset($_GET['acao']) == 'sucesso') {
            echo '<div class="alert alert-success text-center" id="alert">
                            <strong>Usuário Cadastrado</strong>
                            <br>Usuário Cadastrado com sucesso!
                  </div>';
}
?>

	<form action="" method="GET">
		<label for=""></label>
			<input id="nome" type="text" class="form-control" name="nome" placeholder="Consultar por nome"><br>
		<button type="submit" class="btn btn-primary">Consultar</button>
	</form>
</div>
<div class="container">
	<?php
	if (isset($_GET['nome'])) {
		echo '<hr class="divider"></hr>';
		include 'conectarBanco.php';
		$nome = $_GET['nome'];
		$sql = "SELECT * FROM tb_vendedor WHERE Nome_Vend LIKE '%$nome%'";
		$resultado = mysqli_query($dbconnection, $sql);

			if (mysqli_num_rows($resultado) > 0) {
				$looprow = mysqli_num_rows($resultado);
				
	?>
<div class="container">
	<div class="widget-content">
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th id="table_id">Id
					</th><th id="">Nome
					</th><th id="">Sobrenome
					</th><th id="">Email
					</th><th id="">Cep
					</th><th id="">Rua
					</th><th id="">Bairro
					</th><th id="">Cidade
					</th><th id="">Estado
					</th><th id="">Numero
					</th><th id="">Cpf
					</th><th id="">Telefone
					</th><th id="">Celular
					</th><th class="td-actions" id="table_action">Opções</th>
				</tr>
			</thead>
			<tbody>
					<?php  
					while ($row = mysqli_fetch_array($resultado)) {
					?>
				<tr>
					<td><?php echo $row['Id_Vend'] ?></td>
					<td><?php echo $row['Nome_Vend'] ?></td>
					<td><?php echo $row['Sobrenome_Vend'] ?></td>
					<td><?php echo $row['Email_Vend'] ?></td>
					<td><?php echo $row['Cep_Vend'] ?></td>
					<td><?php echo $row['Rua_Vend'] ?></td>
					<td><?php echo $row['Cidade_Vend'] ?></td>
					<td><?php echo $row['Bairro_Vend']?></td>
					<td><?php echo $row['Estado_Vend'] ?></td>
					<td><?php echo $row['Numero_Vend'] ?></td>
					<td><?php echo $row['Cpf_Vend'] ?></td>
					<td><?php echo $row['Telefone_Vend'] ?></td>
					<td><?php echo $row['Celular_Vend'] ?></td>					
					<td class="td-actions">
						<form action="deletarBanco.php" method="GET">							
							<button type="submit" class="btn btn-danger btn-xs" ><span class="glyphicon glyphicon-pencil">												
								</span> Excluir
							</button>
							<input type="hidden" name="idvend" value=<?php echo $row['Id_Vend'] ?>>
						</form>
					</td>
				</tr>
				<?php 
					} 
				?>
			</tbody>
		</table>
	</div>
</div>
			<?php  
			}
	}	
?>
</div>
  <div class="footer navbar navbar-default navbar-fixed-bottom" role="navigation">
      <div class="container">
        <div class="navbar-text">
          <p id="text-muted">Análise e Desenvolvimento de Sistemas - Fatec Zona Sul
            
          </p>         
      </div>
    </div> 
  </div>
</body>
</html>	