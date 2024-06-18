<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['idcontato'])) {
    $id = intval($_POST['idcontato']);

    // Delete the message from the database
    $query = "DELETE FROM contato WHERE idcontato = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $id);

    if ($stmt->execute()) {
        echo "Mensagem apagada com sucesso.";
    } else {
        echo "Erro ao apagar a mensagem: " . $conn->error;
    }

    $stmt->close();
} else {
    echo "Requisição inválida.";
}

$conn->close();


