<?php
require('validacao.php');
// Item do menu ativo
$menu = (isset($page)) ? $page : 'index';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HomeShop</title>
    <link rel="icon" href="img/logo.jpeg">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script defer src="js/fontawesome-all.min.js"></script>
    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand navbar-dark bg-danger">
        <a class="sidebar-toggle text-light mr-3">
            <span class="navbar-toggler-icon"></span>
        </a>
        <div class="topo">
            Home Shop <p>O que vocÃª precisa em 24 horas!</p>
            </a>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle menu-header" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
                        <img class="rounded-circle" src="../img/icon.png" width="20" height="20"> &nbsp;<span class="d-none d-sm-inline"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#"><i class="fas fa-user"></i> Perfil</a>
                        <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> Sair</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Menu sidebar -->
    <div class="d-flex">
        <nav class="sidebar">
            <ul class="list-unstyled">
                <li><a href="home.php"><i class="fas fa-home"></i> HOME</a></li>

                <li><a href="#submenu1" data-toggle="collapse"><i class="fas fa-user"></i> Usuário </a>
                    <ul id="submenu1" class="list-unstyled collapse">
                        <li <?php echo ($menu == 'novo_usuario') ? 'class="active"' : null; ?>><a href="usuario_cadastro.php"><i class="fas fa-user-plus"></i> Novo </a></li>
                        <li <?php echo ($menu == 'listar_usuario') ? 'class="active"' : null; ?>><a href="usuario_list.php"><i class="fas fa-users"></i> Listar </a></li>
                        <li <?php echo ($menu == 'buscar_usuario') ? 'class="active"' : null; ?>><a href="usuario_buscar.php"><i class="fas fa-search"></i> Buscar </a></li>
                    </ul>
                </li>
                <li><a href="#submenu2" data-toggle="collapse"><i class="fas fa-user"></i> Cliente </a>
                    <ul id="submenu2" class="list-unstyled collapse">
                        <li <?php echo ($menu == 'novo_cliente') ? 'class="active"' : null; ?>><a href="cliente_cadastro.php"><i class="fas fa-user-plus"></i> Novo </a></li>
                        <li <?php echo ($menu == 'listar_cliente') ? 'class="active"' : null; ?>><a href="cliente_list.php"><i class="fas fa-users"></i> Listar </a></li>
                    </ul>
                </li>
                <li><a href="#submenu3" data-toggle="collapse"><i class="fas fa-list-ul"></i> Produto</a>
                    <ul id="submenu3" class="list-unstyled collapse">
                        <li <?php echo ($menu == 'novo_produto') ? 'class="active"' : null; ?>><a href="produto_cadastro.php"><i class="fas fa-tags"></i> Novo</a></li>
                        <li <?php echo ($menu == 'listar_produto') ? 'class="active"' : null; ?>><a href="produto_list.php"><i class="fas fa-tags"></i> Listar</a></li>
                    </ul>
                </li>
                <li><a href="#submenu4" data-toggle="collapse"><i class="fas fa-shopping-cart"></i> Pedido</a>
                    <ul id="submenu4" class="list-unstyled collapse">
                        <li <?php echo ($menu == 'pedidos') ? 'class="active"' : null; ?>><a href="pedido_lista.php"><i class="fas fa-tags"></i> Pedidos</a></li>
                        <li <?php echo ($menu == 'pedidoC') ? 'class="active"' : null; ?>><a href="pedido_lista_cliente.php"><i class="fas fa-search"></i> Buscar por cliente</a></li>
                        <li <?php echo ($menu == 'pedidoCodigo') ? 'class="active"' : null; ?>><a href="pedido_lista_codigo.php"><i class="fas fa-search"></i> Buscar por código</a></li>
                    </ul>
                </li>
                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Sair</a></li>
            </ul>
        </nav>