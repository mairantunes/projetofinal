<?php 
    session_start();
    unset($_SESSION["nome"]);
    session_destroy();
    echo"<script>location.href='index.php'</script>";
?>