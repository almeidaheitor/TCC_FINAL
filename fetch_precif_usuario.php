
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="Author" content="Giovanna, Heitor" />
    <meta name="Description" content="TCC - Seletor de Assento" />
    <meta name="KeyWords" content="Assento, 3D, Cinema, Teatro, Estádio, Show" />
    <link rel="shortcut icon" href="img/Assento.svg" type="image/x-icon" />
    <link rel="stylesheet" href="normalize.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/menu.css" />
    <link rel="stylesheet" href="css/dash_adm.css" />
    <title>Visio - Admin Dashboard</title>
    <style>
        .message-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 20px;
        }
        .message-box {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin: 10px 0;
            width: 80%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        .message-box h3, .message-box h4 {
            margin: 0;
            padding: 0;
        }
        .message-box h3 {
            font-size: 1.5rem;
            color: #333;
        }
        .message-box h4 {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 10px;
        }
        .message-box p {
            font-size: 1rem;
            color: #333;
            white-space: pre-wrap;
        }
        .delete-button {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #FF0000;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
        }
        .delete-button:hover {
            background-color: #CC0000;
        }
    </style>
</head>
<body>
    <main>
        <div class="message-container">
            <h2>Projeto</h2>
        </div>
    </main>
    <script type="text/javascript" src="js/menu.js"></script>
</body>
</html>

<?php
session_start();

include('config.php');


// Consulta para obter os dados do projeto apenas para o usuário logado
$query = "SELECT nome_cliente, valor, descricao, data_hora, andamento, previsao_entrega 
          FROM precificacao
          INNER JOIN usuarios2  ON nome_cliente = nome
          WHERE nome = ?";

if ($stmt = $conn->prepare($query)) {
    // Liga o parâmetro
    $stmt->bind_param("s", $nome);
    // Executa a consulta
    $stmt->execute();
    // Obtém o resultado
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='project-box'>";
            echo "<h3>Cliente: " . htmlspecialchars($row['nome_cliente']) . "</h3>";
            echo "<p><strong>Valor:</strong> R$ " . htmlspecialchars($row['valor']) . "</p>";
            echo "<p><strong>Descrição:</strong> " . nl2br(htmlspecialchars($row['descricao'])) . "</p>";
            echo "<p><strong>Data e Hora:</strong> " . htmlspecialchars($row['data_hora']) . "</p>";
            echo "<p><strong>Andamento:</strong> " . htmlspecialchars($row['andamento']) . "</p>";
            echo "<p><strong>Previsão de Entrega:</strong> " . htmlspecialchars($row['previsao_entrega']) . "</p>";
            echo "</div>";
        }
    } else {
        echo "<p>Nenhum projeto encontrado.</p>";
    }
    
    // Fecha a declaração
    $stmt->close();
} else {
    echo "Erro na preparação da consulta.";
}

// Fecha a conexão
$conn->close();
?>
