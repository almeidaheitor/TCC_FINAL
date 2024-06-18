
<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];

    // Verifica se as senhas coincidem
    if ($senha !== $confirmar_senha) {
        echo "As senhas não coincidem.";
        exit;
    }

    // Verifica se a senha atende aos critérios (mínimo 10 caracteres e pelo menos um símbolo ou número)
    if (!preg_match('/^(?=.*[0-9])(?=.*[\W_]).{10,}$/', $senha)) {
        echo "A senha deve ter no mínimo 10 caracteres e incluir pelo menos um número ou símbolo.";
        exit;
    }

    // Hash da senha
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios2 (nome, email, senha) VALUES ('$nome', '$email', '$senha_hash')";

    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
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
    <link rel="stylesheet" href="css/contact.css" />
    <title>Visio - Cadastro</title>
    <script>
        function validateForm() {
            var senha = document.getElementById("senha").value;
            var confirmarSenha = document.getElementById("confirmar_senha").value;
            var error = "";

            // Verifica se as senhas coincidem
            if (senha !== confirmarSenha) {
                error += "As senhas não coincidem.\n";
            }

            // Verifica se a senha atende aos critérios (mínimo 10 caracteres e pelo menos um símbolo ou número)
            var senhaRegex = /^(?=.*[0-9])(?=.*[\W_]).{10,}$/;
            if (!senhaRegex.test(senha)) {
                error += "A senha deve ter no mínimo 10 caracteres e incluir pelo menos um número ou símbolo.\n";
            }

            if (error) {
                alert(error);
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <header>
        <div class="topo">
            <img src="img/Assento.svg" alt="Menu" class="poltrona" id="menuButton" />
            <div id="menu" class="menu">
                <ul>
                    <li><a href="sobre.html"><img src="img/FingerUp.svg" alt="Sobre nós">Sobre</a></li>
                    <li><a href="fazemos.html"><img src="img/Pipoca.svg" alt="O que fazemos">O que Fazemos</a></li>
                    <li><a href="contato.html"><img src="img/Microfone.svg" alt="">Contato</a></li>
                </ul>
            </div>
            <a href="paginaInicial.html"><img src="img/Triángulo_equilátero.svg" alt="Início" class="triRotTopo" /></a>
            <a href="login.html"><img src="img/Fita.svg" alt="Login" title="Login" width="50rem" class="login" /></a>
        </div>
    </header>
    <main class="form-body">
        <div class="contact-form">
            <h2>Cadastro</h2>
            <form action="cadastro.php" method="POST" onsubmit="return validateForm()">
                <input type="text" name="nome" placeholder="Nome" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" id="senha" name="senha" placeholder="Senha" required>
                <input type="password" id="confirmar_senha" name="confirmar_senha" placeholder="Confirmar Senha" required>
                <button type="submit">Cadastrar</button>
                <br>
                <a href="login.php">Fazer login</a>
            </form>
        </div>
    </main>
    <script type="text/javascript" src="js/menu.js"></script>
</body>
</html>
