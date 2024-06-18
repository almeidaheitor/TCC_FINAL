<?php
session_start();
if (!isset($_SESSION['login_user'])) {
    header("location: login.php");
    exit;
}

include("config.php");

$sql = "SELECT * FROM precificacao";
$result = $conn->query($sql);

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Projetos</title>
</head>
<body>
    <h2>Projetos</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome do Cliente</th>
            <th>Valor</th>
            <th>Descrição</th>
            <th>Data e Hora</th>
            <th>Andamento</th>
            <th>Previsão de Entrega</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['nome_cliente'] . "</td>
                        <td>" . $row['valor'] . "</td>
                        <td>" . $row['descricao'] . "</td>
                        <td>" . $row['data_hora'] . "</td>
                        <td>" . $row['andamento'] . "</td>
                        <td>" . $row['previsao_entrega'] . "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='7'>Nenhum projeto encontrado</td></tr>";
        }
        ?>
    </table>
</body>
</html>
