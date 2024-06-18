<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_cliente = $_POST['nome_cliente'];
    $valor = $_POST['valor'];
    $descricao = $_POST['descricao'];
    $data_hora = $_POST['data_hora'];
    $andamento = $_POST['andamento'];
    $previsao_entrega = $_POST['previsao_entrega'];

    $sql = "INSERT INTO precificacao (nome_cliente, valor, descricao, data_hora, andamento, previsao_entrega)
            VALUES ('$nome_cliente', '$valor', '$descricao', '$data_hora', '$andamento', '$previsao_entrega')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
