<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="Author" content="Giovanna, Heitor" />
    <meta name="Description" content="TCC - Seletor de Assento" />
    <meta
      name="KeyWords"
      content="Assento, 3D, Cinema, Teatro, Estádio, Show"
    />
    <link rel="shortcut icon" href="img/Assento.svg" type="image/x-icon" />
    <link rel="stylesheet" href="normalize.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/menu.css" />
    <title>Visio - Login</title>
  </head>
</head>
<body>
<header>
<div class="topo">
        <img
          src="img/Assento.svg"
          alt="Menu"
          class="poltrona"
          id="menuButton"
        />
        <div id="menu" class="menu">
          <ul>
            <li><a href="sobre.html"><img src="img/FingerUp.svg" alt="Sobre nós">Sobre</a></li>
            <li><a href="fazemos.html"><img src="img/Pipoca.svg" alt="O que fazemos">O que Fazemos</a></li>
            <li><a href="contato.html"><img src="img/Microfone.svg" alt="">Contato</a></li>
          </ul>
        </div>
        <a href="paginaInicial.html"><img src="img/Triángulo_equilátero.svg" alt="Início" class="triRotTopo" /></a>
    </header>
    <div class="tela-login">
        <h2>Login</h2>
        <form action="login_process.php" method="POST">
            <p><input type="email" name="email" class="inputs required" placeholder="Email" required></p>
            <input type="password" class="inputs required"name="password" placeholder="Senha" required>
            <button type="submit" class="text-button">Login</button>
            <br>
            <p><a href="cadastro.php" class="cadastro">Cadastre-se Agora</a></p>
        </form>
    </div>
</body>
</html>