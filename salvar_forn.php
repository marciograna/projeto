<?php
$acao_forn = $_POST['acao_forn'] ?? $_REQUEST['acao_forn'];

switch ($acao_forn) {

    case 'cadastrar_forn':
        $nome = $_POST["nome"];
        $cnpj = $_POST["cnpj"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $endereco = $_POST["endereco"];

        // Estabeleça a conexão com o banco de dados
        $conn = new mysqli(HOST, USER, PASS, BASE);

        // Verifique se a conexão foi estabelecida com sucesso
        if ($conn->connect_error) {
            die("Falha na conexão com o banco de dados: " . $conn->connect_error);
        }

        // Crie a consulta SQL para inserir os dados na tabela
        $sql = "INSERT INTO forn (nome, cnpj, telefone, email, endereco) VALUES ('$nome', '$cnpj', '$telefone', '$email', '$endereco')";

        // Execute a consulta SQL
        if ($conn->query($sql) == TRUE) {
            echo "Cadastro realizado com sucesso!";
        } else {
            echo "Erro ao cadastrar: " . $conn->error;
        }

        // Feche a conexão com o banco de dados
        $conn->close();
    break;

    case 'editar_forn':
        $nome = $_POST["nome"];
        $cnpj = $_POST["cnpj"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $endereco = $_POST["endereco"];
        $id = $_POST["id"];

        // Estabeleça a conexão com o banco de dados
        $conn = new mysqli(HOST, USER, PASS, BASE);

        // Crie a consulta SQL para editar os dados na tabela
        $sql = "UPDATE forn SET 
                    nome='$nome',
                    cnpj='$cnpj',
                    telefone='$telefone',
                    email='$email',
                    endereco='$endereco'
                WHERE id=$id";

        // Execute a consulta SQL
        if ($conn->query($sql) === TRUE) {
            echo "Edição realizada com sucesso!";
        } else {
            echo "Erro ao editar: " . $conn->error;
        }

    break;

    case 'excluir_forn':
        $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
    echo 'es';
        // Estabeleça a conexão com o banco de dados
        $conn = new mysqli(HOST, USER, PASS, BASE);


        // Crie a consulta SQL para excluir o registro da tabela
        $sql = "DELETE FROM forn WHERE id=$id";

        // Execute a consulta SQL
        if ($conn->query($sql) === TRUE) {
            echo "Exclusão realizada com sucesso!";
        } else {
            echo "Erro ao excluir: " . $conn->error;
        }

    break;

}