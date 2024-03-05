  
<?php 
    $id=$_GET['id'];
    $sql = "SELECT * FROM contatos WHERE id = {$id}";
    $resultado = $conexao->query($sql);
    $contato = $resultado->fetch_object();

    if($contato != null){ 
        echo
        "<h4 class='alert alert-danger mb-3'>Tem certeza que deseja excluir este contato?</h4>  
            <div class='card mt-4 mb-4'>    
                <div class='card-body'>
                    <form action='?page=atuarNoBanco' method='post'>
                    <input type='hidden' name='acao' value='excluir'>
                    <input type='hidden' name='id' value='{$contato->id}'>                       
                        <h5>Id: {$contato->id}</h5>
                        <h5>Nome: {$contato->nome}</h5>
                        <h5>Email: {$contato->email}</h5>
                        <h5>Telefone: {$contato->telefone}</h5>
                        <h5>Endereço: {$contato->endereco}</h5>
                        <button type='button' class='btn btn-success' onclick=\"location.href='?page=lista'\">Cancelar</button>
                        <button type='submit' class='btn btn-danger'>Excluir definitivamente</button>                        
                    </form>
                </div>
            </div>";
    }else{
        echo "<h4 class='alert alert-danger mb-3'>Nenhum item foi encontrado.</h4> ";
    };       
?>
  