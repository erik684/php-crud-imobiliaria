<!DOCTYPE html>
<html lang="pt-br">
<head>
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="js/bootstrap.min.js">
 <link rel="stylesheet" href="js/jquery-3.1.1.min">
 <link rel="stylesheet" href="css/custom-navbar.css">
 <script src="js/jquery-3.1.1.min"></script>
 <script src="js/bootstrap.min.js"></script>

 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Consultar Vendedor</title>
 <!-- scripts aqui -->
</head>

<body>

<div class="container">
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
</div>
</div>
<div class="container">
	<form action="" method="GET">
		<label for=""></label>
			<input id="nome" type="text" class="form-control" name="nome" placeholder="Consultar por nome"><br>
		<button type="submit" class="btn btn-primary">Consultar</button>
	</form>
</div>
<div class="container">

<?php 
if (isset($_GET['alterado']) == 'sucesso') {
            echo '<div class="alert alert-success text-center" id="alert">
                            <strong>Usuário Alterado</strong>
                            <br>Usuário Alterado com sucesso
                    </div>';
}
 ?>    
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
<div class="PanelCollection">              
<div class="panel panel-success" id="panel">
    <input type="hidden" name="Sme_Product_Number_1" value="" id="Sme_Product_Number_1">
    <div id="QuestionForm" class="panel-collapse collapse in">
        <div class="panel-body">
            <div class="form-group">
                <label class="col-sm-12 control-label">
                    
                    <h2 class="text-center">Alterar Vendedores</h2><br>
                </label>
            </div>

            <table class="table table-bordered">
                <tr>
                    <th width="10px">Id</th>
                    <th>
                        Nome                                              
                    </th>
                    <th>
                        Sobrenome                                               
                    </th>
                    <th>
                        Email                        
                    </th>
                    <th>
                        Cep                        
                    </th>
                    <th>
                        Rua                        
                    </th>
                    <th>
                        Cidade                        
                    </th>                    
                    <th>
                        Bairro                       
                    </th>
                    <th>
                        Estado                        
                    </th>
                    <th>
                        Numero                        
                    </th>  
                    <th>
                        Cpf                        
                    </th>
                    <th>
                        Telefone                        
                    </th>
                    <th>
                        Celular                        
                    </th>  
                    </th><th class="td-actions" id="table_action">Opções</th>                   
                </tr>

					<?php  
						while ($row = mysqli_fetch_array($resultado)) {
					?>
				<form action="alterarBanco.php" method="POST">
                <tr id="Qus_1" title="Question 1">                	
                    <td><span style="color:red"><?php echo $row['Id_Vend'] ?></span>
                    </td>
                    <td width="150px">
                        <div class="form-group controls">
							<input type="text" name="nome" value=<?php echo $row['Nome_Vend'] ?> class="form-control" required="" maxlength="20">
                        </div>
                    </td>
                    <td width="150px">
                        <div class="form-group controls">
							<input type="text" name="sobrenome" value=<?php echo $row['Sobrenome_Vend'] ?> class="form-control" required="" maxlength="20">
                        </div>
                    </td>
                    <td width="800px">
                        <div class="form-group controls">
							<input type="text" name="email" value=<?php echo $row['Email_Vend'] ?> class="form-control" maxlength="40">
                        </div>
                    </td>
                    <td width="500px">
                        <div class="form-group controls">
							<input type="text" name="cep" value=<?php echo $row['Cep_Vend'] ?> class="form-control" required="" maxlength="9">
                        </div>
                    </td>   
                    <td width="500px">
                        <div class="form-group controls">
							<input type="text" name="rua" value=<?php echo $row['Rua_Vend'] ?> class="form-control" required="" maxlength="40">
                        </div>
                    </td>                                       
                    <td width="200px">
                        <div class="form-group controls">
							<input type="text" name="cidade" value=<?php echo $row['Cidade_Vend'] ?> class="form-control" required="" maxlength="20">
                        </div>
                    </td>
                    <td width="200px">
                        <div class="form-group controls">
							<input type="text" name="bairro" value=<?php echo $row['Bairro_Vend'] ?> class="form-control" required="" maxlength="40">
                        </div>
                    </td> 
                    <td width="80px">
                        <div class="form-group controls">
							<input type="text" name="estado" value=<?php echo $row['Estado_Vend'] ?> class="form-control" required="" maxlength="2">
                        </div>
                    </td> 
                    <td width="100px">
                        <div class="form-group controls">
							<input type="text" name="numero" value=<?php echo $row['Numero_Vend'] ?> class="form-control" required="" maxlength="5">
                        </div>
                    </td> 
                    <td width="400px">
                        <div class="form-group controls">
							<input type="text" name="cpf" value=<?php echo $row['Cpf_Vend'] ?> class="form-control" required="" maxlength="20">
                        </div>
                    </td> 
                    <td width="200px">
                        <div class="form-group controls">
							<input type="text" name="telefone" value=<?php echo $row['Telefone_Vend'] ?> class="form-control" required="" maxlength="20">
                        </div>
                    </td> 
                    <td width="200px">
                        <div class="form-group controls">
							<input type="text" name="celular" value=<?php echo $row['Celular_Vend'] ?> class="form-control" maxlength="20">
                        </div>
                    </td>
                    <td width="20px">
                        <div class="form-group controls">
                        	<input type="hidden" name="Id_Vend" value=<?php echo $row['Id_Vend'] ?>>
							<button type="submit" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#myModal">
								<span class="glyphicon glyphicon-pencil"></span>Alterar
							</button>
                        </div>
                    </td>                                                                                                                                              
                </tr>
				</form>
                <?php 
            			} 
            	?>
            </table>
        </div>
    </div>
</div>
			<?php  
		}
	}
	
?>
</div>
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