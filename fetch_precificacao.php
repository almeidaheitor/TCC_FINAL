<?php
include('config.php');

// Fetch project data from the database
$query = "SELECT nome_cliente, valor, descricao, data_hora, andamento, previsao_entrega FROM precificacao";
$result = $conn->query($query);

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

$conn->close();