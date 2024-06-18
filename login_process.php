<?php
session_start();
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT id, nome, senha FROM usuarios2 WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['senha'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_nome'] = $row['nome'];
            echo "Login bem-sucedido! Bem-vindo, " . $row['nome'];
            // Redirecionar para uma página protegida ou dashboard
            header("Location: index.html");
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "Nenhuma conta encontrada com esse email.";
    }

    $conn->close();
}