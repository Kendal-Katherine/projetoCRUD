<!--AQUI COMEÇA O HEADER-->
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title><?php echo isset($GLOBALS["page_title"]) ? $GLOBALS["page_title"] : "Escola do Futuro" ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #4fa6e4;">
        <a class="navbar-brand" href="index.php">Escola do Futuro</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="cadastro.php"> Cadastro de Aluno(a) <span class="sr-only">(Página
                            atual)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lista.php"> Lista de Alunos </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="busca.php"> Busca e Alteração </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="excluir.php"> Excluir Aluno(a) </a>
                </li>
            </ul>
        </div>
    </nav>
    <!--AQUI TERMINA O HEADER-->