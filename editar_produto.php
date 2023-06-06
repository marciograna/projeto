<?php
 $conn = new mysqli(HOST, USER, PASS, BASE);

 if ($conn->connect_error) {
     die("Falha na conexão com o banco de dados: " . $conn->connect_error);
 }

 $sql = "SELECT * FROM produtos WHERE codigo_produto = ".$_REQUEST['codigo_produto'];

 $res = $conn->query($sql);

 $qtd = $res->num_rows;

 if ($qtd > 0) {
    while ($row = $res->fetch_object()) {
?>
        <h1>Cadastro de Produtos</h1>

        <form action="?page=salvar" method="POST">
            <input type="hidden" name="acao" value="editar">
            <input type="hidden" name="codigo_produto" value="<?=$row->codigo_produto?>">
            <div class="mb-3">
                <label>Descrição do Produto</label>
                <input type="text" name="descricao_prod" class="form-control" value="<?=$row->descricao_produto?>">
            </div>
            <div class="mb-3">
                <label>Estoque Inicial</label>
                <input type="text" name="estoq_inicial" class="form-control" value="<?=$row->estoque_inicial?>">
            </div>
            <div class="mb-3">
                <label>Estoque Atual</label>
                <input type="text" name="estoq_atual" class="form-control" value="<?=$row->estoque_atual?>">
            </div>
            <div class="mb-3">
                <label>Fornecedor</label>
                <input type="text" name="nome_fornecedor" class="form-control" value="<?=$row->fornecedor?>">
            </div>
            <div class="mb-3">
                <label>Valor de Compra</label>
                <input type="text" name="preco_compra" class="form-control" value="<?=$row->preco_compra?>">
            </div>
            <div class="mb-3">
                <label>Valor de Venda</label>
                <input type="text" name="preco_venda" class="form-control" value="<?=$row->preco_venda?>">
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
