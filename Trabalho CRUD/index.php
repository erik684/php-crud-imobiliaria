<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="js/bootstrap.min.js">
 <link rel="stylesheet" href="js/jquery-3.1.1.min">
 <link rel="stylesheet" href="css/custom-navbar.css">
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Página Inicial</title>
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

<div class="container">
  <div class="jumbotron">
    <h1 class="text-center">Trabalho Banco de Dados</h1><br>
    <p>Trabalho de Banco de Dados. <strong>CRUD</strong> para cadastro de Vendedores.</p>
    <p>Permite <strong>Cadastrar, Alterar, Consultar e Excluir</strong> dados de Vendedores.</p>

    <footer class="blockquote-footer">
    	<i>Analise e Desenvolvimento de Sistemas 5º Semestre</i><br>
    	<i>Erik Aleixo</i>
    </footer>
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