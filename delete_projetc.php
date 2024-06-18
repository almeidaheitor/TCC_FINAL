<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']);

    // Delete the project from the database
    $query = "DELETE FROM modelagem WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $id);

    if ($stmt->execute()) {
        echo "Projeto apagado com sucesso.";
    } else {
        echo "Erro ao apagar o projeto: " . $conn->error;
    }

    $stmt->close();
} else {
    echo "Requisição inválida.";
}

$conn->close();

