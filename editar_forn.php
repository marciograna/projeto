<?php
 $conn = new mysqli(HOST, USER, PASS, BASE);

 if ($conn->connect_error) {
     die("Falha na conexão com o banco de dados: " . $conn->connect_error);
 }

 $sql = "SELECT * FROM forn WHERE id = ".$_REQUEST['id'];

 $res = $conn->query($sql);

 $qtd = $res->num_rows;

 if ($qtd > 0) {
    while ($row = $res->fetch_object()) {
?>
        <h1>Cadastro de fornecedores</h1>

        <form action="?page=salvar_forn" method="POST">
            <input type="hidden" name="acao_forn" value="editar_forn">
            <input type="hidden" name="id" value="<?=$row->id?>">
            <div class="mb-3">
                <label>nome</label>
                <input type="text" name="nome" class="form-control" value="<?=$row->nome?>">
            </div>
            <div class="mb-3">
                <label></label>cnpj
                <input type="number" name="cnpj" class="form-control" value="<?=$row->cnpj?>">
            </div>
            <div class="mb-3">
                <label>telefone</label>
                <input type="number" name="telefone" class="form-control" value="<?=$row->telefone?>">
            </div>
            <div class="mb-3">
                <label>email</label>
                <input type="email" name="email" class="form-control" value="<?=$row->email?>">
            </div>
            <div class="mb-3">
                <label>endereço</label>
                <input type="text" name="endereco" class="form-control" value="<?=$row->endereco?>">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    
<?php
    }
 } else {
    echo "<p class='alert alert-danger'>Nao encontrou resultados!</p>";
}
 $conn->close();
