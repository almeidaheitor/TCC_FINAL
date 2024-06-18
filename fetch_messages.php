<?php
include('config.php');

// Fetch messages from the database
$query = "SELECT idcontato, nome, email, assunto, mensagem FROM contato";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='message-box'>";
        echo "<h3>Nome: " . htmlspecialchars($row['nome']) . "</h3>";
        echo "<p><strong>Email:</strong> " . htmlspecialchars($row['email']) . "</p>";
        echo "<p><strong>Assunto:</strong> " . htmlspecialchars($row['assunto']) . "</p>";
        echo "<p><strong>Mensagem:</strong> " . nl2br(htmlspecialchars($row['mensagem'])) . "</p>";
        echo "<form action='delete_message.php' method='post' style='display:inline;'>";
        echo "<input type='hidden' name='idcontato' value='" . $row['idcontato'] . "' />";
        echo "<button type='submit' class='delete-button'>Apagar</button>";
        echo "</form>";
        echo "</div>";
    }
} else {
    echo "<p>Nenhuma mensagem encontrada.</p>";
}

$conn->close();


