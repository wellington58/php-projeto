<!DOCTYPE html>
<html lang="pt">
<head>
  <title>Tecnoinfo</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/estilo.css">
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>    
    </ul>
  </div>  
</nav>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">TecInfo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="produtos.php">Todos os Produtos</a></li>
        <li><a href="comprar.php">Comprar</a></li>
        <li><a href="#">Contato</a></li>
	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categoria <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="produtocat.php">Ferramentas</a></li>
          <li><a href="produtocat2.php">Novidades</a></li>
          <li><a href="produtocat3.php">Embarcados</a></li>
        </ul>
      </li>
	  	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Cadastros <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="cliente.php">Clientes</a></li>
          <li><a href="form-produto.php">Produtos</a></li>
          <li><a href="form-usuario.php">Usuários</a></li>
        </ul>
      </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
	<li class="nav-item">
		<li><a class="nav-link" href="carrinho.php"><span  class="glyphicon glyphicon-shopping-cart"></span>Carrinho</a></li>
		</li>
      <li><a href="cliente.php"><span class="glyphicon glyphicon-user"></span> Cadastrar</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	  <li><a href="admin/login.php"><span class="glyphicon glyphicon-lock"></span> Restrito</a></li>
    </ul>
    </div>
  </div>
</nav>