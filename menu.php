<?php
session_start();


echo $_SESSION['login'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projeto php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bg-purple {
            background-color: blue !important;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-purple text-light">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="#">Projeto PHP</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cadastrar
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="cadastroCliente.php">Cliente</a></li>
                            <li><a class="dropdown-item" href="cadastroFuncionario.php">Funcionario</a></li>
                            <li><a class="dropdown-item" href="cadastroFornecedor.php">Fornecedor</a></li>
                            <li><a class="dropdown-item" href="cadastroProduto.php">Produto</a></li>
                            <li><a class="dropdown-item" href="cadastroUsuario.php">Usuario</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Consultar
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <li><a class="dropdown-item" href="consultaCliente.php">Cliente</a></li>
                            <li><a class="dropdown-item" href="consultaFuncionario.php">Funcionario</a></li>
                            <li><a class="dropdown-item" href="consultaFornecedor.php">Fornecedor</a></li>
                            <li><a class="dropdown-item" href="consultaProduto.php">Produto</a></li>
                            <li><a class="dropdown-item" href="consultaUsuario.php">Usuario</a></li>
                        </ul>
                    </li>
                </ul>
                <a href="index.php" class="btn btn-danger " role="button">SAIR</a>
                
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
