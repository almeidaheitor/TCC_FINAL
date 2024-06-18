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
    <link rel="stylesheet" href="css/precificacao.css" />
    <title>Visio - Precificação</title>
    <style>
        .project-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 20px;
        }
        .project-box {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin: 10px 0;
            width: 80%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .project-box h3 {
            font-size: 1.5rem;
            color: #333;
        }
        .project-box p {
            font-size: 1rem;
            color: #333;
            white-space: pre-wrap; 
        }
        .project-box p strong {
            color: #666;
        }
    </style>
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
            <a href="index.html"><img src="./img/Triángulo_equilátero.svg" alt="Início" class="triRotTopo" /></a>
            <a href="login.php"><img src="img/Fita.svg" alt="Login" title="Login" width="50rem" class="login" /></a>
        </div>
    </header>
    <main>
        <div class="project-container">
            <h2>Detalhes da Precificação</h2>
            <?php include('fetch_precificacao.php'); ?>
        </div>
        <button id="botaoDois" class="text-button"><a href="modelagem.php">Adicionar Dados</a></button>
    </main>
    <script type="text/javascript" src="js/menu.js"></script>
</body>
</html>
