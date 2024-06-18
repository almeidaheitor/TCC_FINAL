<?php
include('config.php');

// Get form data
$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

// Prepare SQL statement
$stmt = $conn->prepare("INSERT INTO contato (nome, email, assunto, mensagem) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nome, $email, $assunto, $mensagem);

// Execute and check for success
if ($stmt->execute()) {
    echo "Mensagem enviada com sucesso";
} else {
    echo "Erro no envio dos dados: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem Enviada</title>
</head>
<body>
    <form action="contato.html">
        <button id="enviar" type="submit">Voltar ao Contato</button>
    </form>
    <form action="dash_adm.html">
        <button id="enviar" type="submit">Ir para central</button>
    </form>
</body>
</html>
