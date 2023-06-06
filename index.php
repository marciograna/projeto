<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Loja de Bebidas</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Loja do seu zé</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?page=fornecedor">Cadastro de fornecedores</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="?page=listar-forn">Listar Fornecedores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=produtos">Cadastro de Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=listar">Listar Produtos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                  include("conexao.php");
                  switch (@$_REQUEST["page"]) {
                    case "produtos":
                        include("cadastro_produto.php");
                        break;
                    case "salvar":
                        include("salvar_produto.php");
                        break;
                    case "editar":
                        include("editar_produto.php");
                        break;
                    case "listar":
                        include("listar_produtos.php");
                        break;
                  include("conexao.php");
                    case "fornecedor":
                        include("cadastro_fornecedor.php");
                        break;
                    case "salvar_forn":
                        include("salvar_forn.php");
                        break;
                    case "editar_forn":
                        include("editar_forn.php");
                        break;
                    case "listar-forn":
                        include("listar-forn.php");
                        break;
                    default:
                        echo "Bem-vindo!";
                  }
                ?>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>