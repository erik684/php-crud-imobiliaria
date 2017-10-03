<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="js/bootstrap.min.js">
 <link rel="stylesheet" href="js/jquery-3.1.1.min">
<script src="js/jquery.min.js"></script>
 <script type='text/javascript' src='js/cepPF.js'></script>
 
 <link rel="stylesheet" href="css/custom-navbar.css">


 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Cadastrar Vendedor</title>
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

<?php 
if (isset($_GET['acao']) == 'sucesso') {
            echo '<div class="alert alert-success text-center" id="alert">
                            <strong>Usuário Cadastrado</strong>
                            <br>Usuário Cadastrado com sucesso!
                  </div>';
}
?>

	<form class="form-horizontal" action="inserirBanco.php" method="POST">
	<fieldset>

	<!-- Form Name -->
	<legend>Cadastro de Vendedor</legend>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="nome">Nome*</label>  
	  <div class="col-md-2">
	  <input id="nome" name="nome" type="text" placeholder="Mario" class="form-control input-md" required="" maxlength="20">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="sobrenome">Sobrenome*</label>  
	  <div class="col-md-4">
	  <input id="sobrenome" name="sobrenome" type="text" placeholder="Jonas da Silva" class="form-control input-md" required="" maxlength="20">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="email">Email</label>  
	  <div class="col-md-4">
	  <input id="email" name="email" type="text" placeholder="mario.jonas@gmail.com" class="form-control input-md" maxlength="40">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="cep">Cep*</label>  
	  <div class="col-md-2">
	  <input id="cep" name="cep" type="text" placeholder="05568-695" class="form-control input-md" required="" maxlength="9">    
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="rua">Rua*</label>  
	  <div class="col-md-5">
	  <input id="rua" name="rua" type="text" placeholder="R. Banana Street" class="form-control input-md" required="" maxlength="40">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="bairro">Bairro*</label>  
	  <div class="col-md-5">
	  <input id="bairro" name="bairro" type="text" placeholder="Pq. Fruteira da Feira" class="form-control input-md" required="" maxlength="40">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="cidade">Cidade*</label>  
	  <div class="col-md-4">
	  <input id="cidade" name="cidade" type="text" placeholder="Fazenda" class="form-control input-md" required="" maxlength="20">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="estado">Estado*</label>  
	  <div class="col-md-2">
	  <input id="estado" name="estado" type="text" placeholder="FZ" class="form-control input-md" required="" maxlength="2">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="numero">Numero*</label>  
	  <div class="col-md-2">
	  <input id="numero" name="numero" type="text" placeholder="123" class="form-control input-md" required="" maxlength="5">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="cpf">Cpf*</label>  
	  <div class="col-md-4">
	  <input id="cpf" name="cpf" type="text" placeholder="456.689.555-28" class="form-control input-md" required="" maxlength="20">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="telefone">Telefone*</label>  
	  <div class="col-md-4">
	  <input id="telefone" name="telefone" type="text" placeholder="11 5555-6666" class="form-control input-md" required="" maxlength="20">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="celular">Celular</label>  
	  <div class="col-md-4">
	  <input id="celular" name="celular" type="text" placeholder="11 98888-7777" class="form-control input-md" maxlength="20">
	    
	  </div>
	</div>

	<!-- Button -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="cadastrar">Cadastrar</label>
	  <div class="col-md-4">
	    <button id="cadastrar" name="cadastrar" class="btn btn-primary" type="submit">Cadastrar</button>
	  </div>
	</div>

	</fieldset>
	</form>

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