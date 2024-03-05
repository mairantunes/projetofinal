<?php 
    $acao = $_POST["acao"];

    switch($acao){

        case "cadastrar":
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            $endereco = $_POST["endereco"];

            $sql = "INSERT INTO contatos(nome, email, telefone, endereco)
            VALUES('{$nome}', '{$email}', '{$telefone}', '{$endereco}');";
            $resultado = $conexao->query($sql);

            if($resultado){
                echo 
                "<script>
                    alert('Contato cadastrado com sucesso!')   
                </script>";
                echo 
                "<script>
                    location.href='?page=lista'
                </script>";
            }else{
                echo 
                "<script>
                    alert('Houve um erro ao cadastrar o contato. Tente novamente mais tarde!')   
                </script>";
                echo 
                "<script>
                    location.href='?page=lista'
                </script>";
            }

            //printf($conexao->error);
            break;

        case "editar":
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            $endereco = $_POST["endereco"];
            $id = $_POST["id"];

            $sql = "UPDATE contatos SET nome='{$nome}', email='{$email}', telefone='{$telefone}', endereco='{$endereco}'
            WHERE id={$id};";

            $resultado = $conexao->query($sql);

            if($resultado){
                echo "<script>alert('Contato editado com sucesso!')</script>";
                echo "<script>location.href='?page=lista'</script>";
            }else{
                "<script>
                    alert('Houve um erro ao cadastrar este contato. Tente novamente mais tarde!')   
                </script>";
            }

            break;

        case "excluir":
            //$id = $_REQUEST["id"];
            $id = $_POST["id"];

            $sql = "DELETE FROM contatos WHERE id={$id};";

            $resultado = $conexao->query($sql);

            if($resultado){
                echo "<script>alert('Contato removido com sucesso!')</script>";
                echo "<script>location.href='?page=lista'</script>";
            }else{
                "<script>
                    alert('Houve um erro ao remover este contato. Tente novamente mais tarde!')   
                </script>";
            };

            break;
    };

?>