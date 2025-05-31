<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../nbproject/style.css" />
    <meta charset="UTF-8">
    <title>Aula 03 - Operadores Lógicos</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #1c1c3c, #23235b, #2d2d72);
            color: #ffffff;
            padding: 40px;
        }

        .container {
            background: rgba(255, 255, 255, 0.06);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.4);
            max-width: 800px;
            margin: auto;
        }

        h1 {
            text-align: center;
            color: #00e6e6;
            margin-bottom: 30px;
        }

        .output {
            background-color: #111;
            color: #7CFC00;
            font-family: monospace;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
        }

        .explanation {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-left: 5px solid #00e6e6;
            border-radius: 10px;
            line-height: 1.6;
        }

        code {
            background: #1e1e1e;
            padding: 3px 7px;
            border-radius: 5px;
            color: #ffd700;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Aula 03 - Operadores Lógicos</h1>

        <div class="output">
            <?php
                echo "<h3>Operadores lógicos</h3>";
                $ano = 2000;
                $idade = 2018 - $ano;
                echo "Quem nasceu em $ano tem idade de $idade anos.";
                $tipo = ($idade >= 18 && $idade < 65) ? "é obrigatório" : "não é obrigatório";
                echo "<br>Seu voto $tipo";
            ?>
        </div>

        <div class="explanation">
            <p><strong>Explicação:</strong></p>
            <ul>
                <li>Estamos utilizando operadores <strong>lógicos</strong> e o operador ternário.</li>
                <li><code>\$idade = 2018 - \$ano</code>: calcula a idade de quem nasceu em <code>2000</code>.</li>
                <li><code>\$idade >= 18 && \$idade &lt; 65</code>: verifica se a idade está entre 18 e 64.</li>
                <li><code>?:</code> é o operador ternário: se a condição for verdadeira, retorna <code>"é obrigatório"</code>, senão retorna <code>"não é obrigatório"</code>.</li>
                <li>Esse é um exemplo prático de lógica condicional usada em decisões simples.</li>
            </ul>
        </div>
    </div>
</body>
</html>
