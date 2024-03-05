<h3>Edição de contatos:</h3>
<hr>

<form action="?page=atuarNoBanco" method="post" class="mt-2">
    <input type="hidden" name="acao" value="cadastrar">   
    <div class="row">
        <div class="col">
            <!-- NOME -->
            <label for="nome" class="form-label"> Nome:</label>
            <input type="text" name="nome" placeholder="Digite o nome" class="mb-1 form-control" required>
        </div>
        <div class="col">    
            <!-- EMAIL -->
            <label for="email" class="form-label"> Email:</label>
            <input type="text" name="email" placeholder="Digite a email" class="mb-1 form-control" required>
        </div>
    </div> 
    <div class="row">
        <div class="col">
            <!-- TELEFONE -->
            <label for="telefone" class="form-label"> Telefone:</label>
            <input type="text" name="telefone" placeholder="Digite o telefone" class="mb-1 form-control" required>
        </div>
        <div class="col">
            <!-- ENDEREÇO -->
            <label for="endereco" class="form-label"> Endereço:</label>
            <input type="text" name="endereco" placeholder="Digite o endereço" class="mb-1 form-control" required>
        </div>
    </div>
    <button type='button' class='btn btn-success mt-3 mb-5' onclick="location.href='?page=lista'">Cancelar</button>
    <button type="submit" class="btn btn-primary mt-3 mb-5">Cadastrar</button>
</form>