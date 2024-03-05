<?php
session_start();
if (!empty($_SESSION)) {
    echo "<script>location.href='inicio.php'</script>";
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
    <title>TCC_Maira</title>

    <style>
        body {
            background-color: #f2f2f2;
            background-image: url(espacotrabalho.jpg);
            background-size: cover;
            background-blend-mode: overlay;
            background-color: rgba(255, 255, 255, 0.7);
        }

        .login {
            width: 100%;
            height: 100vh;
            align-items: center;
            justify-content: center;
            display: flex;
        }
       
    </style>

</head>

<body>
    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="card">
                        <div class="card-body">
                        <div class="imgProduto">
                        <img src="agendalog3.png" alt="produto" class="produtominiatura" />
                           
                            <form action="login.php " method="post">
                                
                                <label for="nome">Usuário:</label>
                                <input class="form-control" type="text" name="nome">
                                <label for="senha">Senha:</label>
                                <input class="form-control" type="password" name="senha">
                                <button class="btn btn-primary mt-2" type="submit">Entrar</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>