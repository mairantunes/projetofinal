<!-- <h1>Lista de contatos</h1> -->
<style>
    .card-body{
        display: flex !important;
        flex-direction: row !important;
        justify-content: start;
        align-items: center;
    }
</style>


<?php 

    $sql = "SELECT * FROM contatos;";
    $resultado = $conexao->query($sql);
    $qtdLinhas = $resultado->num_rows;
    if($qtdLinhas){
        while($contato = $resultado->fetch_assoc()){
            echo
            "<div class='card mt-2 mb-2'>
                <div class='card-body'> 
                    <div class='row g-5'>
                        <div class='col-auto' style='border-right: 2px rgba(0,0,0, 0.1) solid'>
                            <p><b>id</b>:<br>
                                {$contato['id']}
                            </p>                                   
                        </div>             
                        <div class='col-auto' style='border-right: 2px rgba(0,0,0, 0.1) solid'>
                            <p><b>Nome</b>:<br> 
                                {$contato['nome']}
                            </p>
                        </div>
                        <div class='col-auto' style='border-right: 2px rgba(0,0,0, 0.1) solid'>                         
                            <p><b>Email</b>:<br> 
                                {$contato['email']}
                            </p>
                        </div>
                        <div class='col-auto' style='border-right: 2px rgba(0,0,0, 0.1) solid'>                        
                            <p><b>Telefone</b>:<br> 
                                {$contato['telefone']}
                            </p>
                        </div>
                        <div class='col-auto' style='border-right: 2px rgba(0,0,0, 0.1) solid'> 
                            <p><b>Endereço</b>:<br> 
                                {$contato['endereco']}
                            </p>
                        </div>
                        <div class='col-auto'>
                            <button class='mt-2 btn btn-success' onclick=\"location.href='?page=edicao&id={$contato['id']}'\">Editar</button>
                            <button class='mt-2 btn btn-danger' onclick=\"location.href='?page=exclusao&id={$contato['id']}'\">Excluir</button>                     
                        </div>
                    </div>
                </div>
            </div>";
        }
    }else{
        echo "<p class='alert alert-danger' mt-4>Não há nenhum contato cadastrado.</p>";
    };
?>