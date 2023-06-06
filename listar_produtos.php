<h1>Listar Produtos</h1>

<?php

    $conn = new mysqli(HOST, USER, PASS, BASE);

    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM produtos";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0) {
        echo "<table class='table table-hover table-striped table-bordered'>";
        echo "<tr>";
        echo "<th>Descricao</th>";
        echo "<th>Estoque Inicial</th>";
        echo "<th>Estoque Atual</th>";
        echo "<th>Fornecedor</th>";
        echo "<th>Valor Compra</th>";
        echo "<th>Valor Venda</th>";
        echo "<th>Edicao</th>";
        echo "</tr>";

        while ($row = $res->fetch_object()) {
            echo "<tr>";
            echo "<td>" . $row->descricao_produto . "</td>";
            echo "<td>" . $row->estoque_inicial . "</td>";
            echo "<td>" . $row->estoque_atual . "</td>";
            echo "<td>" . $row->fornecedor . "</td>";
            echo "<td>" . $row->preco_compra . "</td>";
            echo "<td>" . $row->preco_venda . "</td>";
            echo "<td>
                    <button onclick=\"location.href='?page=editar&codigo_produto=" .$row->codigo_produto."';\" class='btn btn-success'>Editar</button>

                    <button onclick=\"if(confirm('Deseja Excluir?')){location.href='?page=salvar&acao=excluir&codigo_produto=" .$row->codigo_produto."';}else{false;}\" class='btn btn-danger'>Excluir</button>
                  </td>";

            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p class='alert alert-danger'>Nao encontrou resultados!</p>";
    }

    $conn->close();
?>