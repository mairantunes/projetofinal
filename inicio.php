<?php
session_start();
if (empty($_SESSION)) {
    echo "<script>location.href='index.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>TCC_Maira</title>
    <style>
        .novo_cadastro a {
            display: flex !important;
            flex-direction: row !important;
            flex-wrap: nowrap !important;
            align-items: baseline;
        }

        .novo_cadastro a i,
        .novo_cadastro a {
            font-size: 1.5rem;

        }

        .logout a {
            align-items: baseline;
        }

        .logout a {
            display: flex !important;
            flex-direction: row !important;
            /* flex-wrap: nowrap !important; */
            align-content: baseline;
            font-size: 1.5rem !important;
        }
    </style>
</head>

<body>
    <style>
        body {

            background-image: url(espacotrabalho.jpg);
            background-size: cover;
            background-blend-mode: overlay;
            background-color: rgba(255, 255, 255, 0.7);
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container ">
            <a class="navbar-brand" href="inicio.php">
                <span class="display-6" style="font-size:1.5em"></span><img src="inicioagendabg.png" alt="logo" class="logominiatura" />
                <div class="logo">
                   
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <div class="novo_cadastro">
                        <a class="nav-link" href="?page=cadastro">
                            <i class="me-2 bi bi-person-fill-add"></i>
                            Novo
                        </a>
                    </div>
                    <div class="logout">
                        <a class="nav-link" href="logout.php">
                            <i class="bi bi-door-open"></i>
                            Sair
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                $page = $_GET["page"] ?? "nada";
                include("config.php");
                switch ($page) {
                    case "atuarNoBanco":
                        include("atuarNoBanco.php");
                        break;
                    case "cadastro":
                        include("cadastro.php");
                        break;
                    case "lista":
                        include("lista.php");
                        break;
                    case "edicao":
                        include("edicao.php");
                        break;
                    case "exclusao":
                        include("exclusao.php");
                        break;
                    default:
                        include("lista.php");
                };
                ?>
            </div>
        </div>
    </div>


    </div>
</body>

</html>