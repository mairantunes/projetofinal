<?php 
    session_start();
    if(empty($_POST) or (empty($_POST["nome"])) or (empty($_POST["senha"]))){
        echo"<script>location.href='index.php'</script>";
    }

    include("config.php");
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM usuarios WHERE nome='{$nome}' AND senha='{$senha}'";

    $resultado = $conexao->query($sql);
    $linha = $resultado->fetch_object();

    if($linha){
        $_SESSION['nome'] = $linha->nome;
        echo"<script>location.href='inicio.php'</script>";
    }else{
        echo"<script>alert('Usuário ou senha incorreto(s).')</script>";
        echo"<script>location.href='index.php'</script>";
    }
?>