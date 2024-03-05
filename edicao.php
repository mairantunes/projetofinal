<?php 
    $id=$_GET['id'];
    $sql = "SELECT * FROM contatos WHERE id = {$id}";
    $resultado = $conexao->query($sql);
    $contato = $resultado->fetch_object();
?>
<h3>Edição de contatos:</h3>
<hr>

<form action="?page=atuarNoBanco" method="post" class="mt-2">
    <input type="hidden" name="acao" value="editar">
    <!-- ID -->
    <input type="hidden" name="id" value="<?php echo $id; ?>">

        <div class="row">
            <div class="col">
                <!-- NOME -->
                <label for="nome" class="form-label"> Nome:</label>
                <input type="text" name="nome" placeholder="Digite o nome do contato" class="mb-2 form-control" 
                value="<?php echo $contato->nome; ?>" required>
            </div>
            <div class="col">    
                <!-- EMAIL -->
                <label for="email" class="form-label"> Email:</label>
                <input type="text" name="email" placeholder="Digite o email" class="mb-2 form-control"
                value="<?php echo $contato->email; ?>" required>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <!-- TELEFONE -->
                <label for="telefone" class="form-label"> Telefone:</label>
                <input type="text" name="telefone" placeholder="Digite o telefone" class="mb-2 form-control"
                value="<?php echo $contato->telefone; ?>" required>
            </div>  
            <div class="col">
                <!-- ENDEREÇO -->
                <label for="endereco" class="form-label"> Endereco:</label>
                <input type="text" name="endereco" placeholder="Digite o endereço" class="mb-2 form-control"
                value="<?php echo $contato->endereco; ?>" required>
            </div>
        </div>
        
    <button type='button' class='btn btn-danger mt-3 mb-5' onclick="location.href='?page=lista'">Cancelar</button>
    <button type="submit" class="btn btn-primary mt-3 mb-5">Cadastrar</button>
</form>