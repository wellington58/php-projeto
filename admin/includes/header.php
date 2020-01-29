<?php session_start(); ?>
<?php
if (!isset($_SESSION['login'])) header("location: login.php");
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Acesso Restrito</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


	<link href="css/styles.css" rel="stylesheet">

</head>

<body>
	<div class="header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Minha conta
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Editar</a>
							<div class="dropdown-divider"></div>							
							<a class="dropdown-item" href="#">Sair</a>							
						</div>
					</li>
					
				</ul>				
			</div>
		</nav>
	</div>

	<div class="page-content">
		<div class="row">
			<div class="col-md-2">
				<div class="sidebar content-box" style="display: block;">
					<ul class="nav">
						<!-- Main menu -->
						<li class="current"><a href="index.php"><i class="glyphicon glyphicon-home"></i> Início</a></li>

						<li class="submenu">
							<a href="#">
								<i class="glyphicon glyphicon-user"></i>Acesso Restrito
								<span class="caret pull-right"></span>
							</a>
							<!-- Sub menu -->
							<ul>
								<li><a href="restrito-cadastrar.php"><i class="icon-inbox"></i>Cadastrar Usuários administrativos</a></li>
								<li><a href="restrito-lista.php"><i class="icon-inbox"></i>Lista de Usuários </a></li>
								<li><a href="restrito-form-pesquisa-nome.php"><i class="icon-inbox"></i>Pesquisar Usuários </a></li>
							</ul>
						</li>

						<li class="submenu">
							<a href="#">
								<i class="glyphicon glyphicon-user"></i>Cliente
								<span class="caret pull-right"></span>
							</a>
							<!-- Sub menu -->
							<ul>
								<li><a href="form-cliente.php"><i class="icon-inbox"></i>Cadastrar Cliente </a></li>
								<li><a href="cliente-lista.php">Clientes Cadastrados</a></li>
								<li><a href="cliente-form-pesquisa-nome.php">Pesquisar cliente</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#">
								<i class="glyphicon glyphicon-user"></i>Produto
								<span class="caret pull-right"></span>
							</a>
							<!-- Sub menu -->
							<ul>
								<li><a href="form-produto.php"><i class="icon-inbox"></i>Cadastrar Produto </a></li>
								<li><a href="produto-lista.php">Produtos Cadastrados</a></li>
								<li><a href="produto-form-pesquisa-nome.php">Pesquisar Produto</a></li>
							</ul>
						</li>

						<li class="submenu">
							<a href="#">
								<i class="glyphicon glyphicon-user"></i>Pedido
								<span class="caret pull-right"></span>
							</a>
							<!-- Sub menu -->
							<ul>

								<li><a href="pedido-lista.php">Pedidos Cadastrados</a></li>
								<li><a href="pedido-pesquisaporcliente.php">Pedidos por cliente</a></li>
								<li><a href="pedido-form-pesquisa-nome.php">Pesquisar Pedido</a></li>
							</ul>
						</li>




						<li class="current"><a href="cliente-sair.php"><i class="glyphicon glyphicon-log-out"></i>Sair</a></li>
					</ul>
				</div>
			</div>