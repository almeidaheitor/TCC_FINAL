<?php
include('config.php');

// Fetch project data from the database
$query = "SELECT localizacao, endereco, largura, altura, profundidade, id, id_contato, valor_medicao, contra_proposta, desconto, valor_final, data_fim, hora_fim FROM modelagem";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='project-box'>";
        echo "<h3>Localização: " . htmlspecialchars($row['localizacao']) . "</h3>";
        echo "<p><strong>Endereço:</strong> " . htmlspecialchars($row['endereco']) . "</p>";
        echo "<p><strong>Largura:</strong> " . htmlspecialchars($row['largura']) . " m</p>";
        echo "<p><strong>Altura:</strong> " . htmlspecialchars($row['altura']) . " m</p>";
        echo "<p><strong>Profundidade:</strong> " . htmlspecialchars($row['profundidade']) . " m</p>";
        echo "<p><strong>ID Contato:</strong> " . htmlspecialchars($row['id_contato']) . "</p>";
        echo "<p><strong>Valor Medição:</strong> R$ " . htmlspecialchars($row['valor_medicao']) . "</p>";
        echo "<p><strong>Contra Proposta:</strong> R$ " . htmlspecialchars($row['contra_proposta']) . "</p>";
        echo "<p><strong>Desconto:</strong> " . htmlspecialchars($row['desconto']) . " %</p>";
        echo "<p><strong>Valor Final:</strong> R$ " . htmlspecialchars($row['valor_final']) . "</p>";
        echo "<p><strong>Data Fim:</strong> " . htmlspecialchars($row['data_fim']) . "</p>";
        echo "<p><strong>Hora Fim:</strong> " . htmlspecialchars($row['hora_fim']) . "</p>";
        echo "<form action='delete_project.php' method='post' style='display:inline;'>";
        echo "<input type='hidden' name='id' value='" . $row['id'] . "' />";
        echo "<button type='submit' class='delete-button'>Apagar</button>";
        echo "</form>";
        echo "</div>";
    }
} else {
    echo "<p>Nenhum projeto encontrado.</p>";
}

$conn->close();
