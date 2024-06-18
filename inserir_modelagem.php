

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
    <title>Visio - Inserir Dados</title>
    <style>
        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 20px;
        }
        .form-box {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin: 10px 0;
            width: 80%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-box h2 {
            font-size: 1.5rem;
            color: #333;
        }
        .form-box label {
            display: block;
            font-size: 1rem;
            color: #333;
            margin-bottom: 5px;
        }
        .form-box input, .form-box textarea, .form-box select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .form-box button {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-box button:hover {
            background-color: #0056b3;
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
        <div class="form-container">
            <h2>Inserir Dados da Modelagem</h2>
            <div class="form-box">
                <form action="modelagem.php" method="post">
                    <label for="localizacao">Localização</label>
                    <input type="text" id="localizacao" name="localizacao" required />

                    <label for="endereco">Endereço</label>
                    <input type="text" id="endereco" name="endereco" required />

                    <label for="largura">Largura (m)</label>
                    <input type="number" step="0.01" id="largura" name="largura" required />

                    <label for="altura">Altura (m)</label>
                    <input type="number" step="0.01" id="altura" name="altura" required />

                    <label for="profundidade">Profundidade (m)</label>
                    <input type="number" step="0.01" id="profundidade" name="profundidade" required />

                    <label for="id_contato">ID do Contato</label>
                    <input type="number" id="id_contato" name="id_contato" required />

                    <label for="valor_medicao">Valor da Medição (R$)</label>
                    <input type="number" step="0.01" id="valor_medicao" name="valor_medicao" required />

                    <label for="contra_proposta">Contra Proposta (R$)</label>
                    <input type="number" step="0.01" id="contra_proposta" name="contra_proposta" required />

                    <label for="desconto">Desconto (%)</label>
                    <input type="number" step="0.01" id="desconto" name="desconto" required />

                    <label for="valor_final">Valor Final (R$)</label>
                    <input type="number" step="0.01" id="valor_final" name="valor_final" required />

                    <label for="data_fim">Data Fim</label>
                    <input type="date" id="data_fim" name="data_fim" required />

                    <label for="hora_fim">Hora Fim</label>
                    <input type="time" id="hora_fim" name="hora_fim" required />

                    <button type="submit">Inserir Dados</button>
                </form>
            </div>
        </div>
    </main>
    <script type="text/javascript" src="js/menu.js"></script>
</body>
</html>
