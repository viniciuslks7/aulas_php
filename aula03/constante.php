<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aula 03 - Constante</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #283c86, #45a247);
            color: #ffffff;
            padding: 40px;
        }

        .container {
            background: rgba(255, 255, 255, 0.06);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.4);
            max-width: 800px;
            margin: auto;
        }

        h1 {
            text-align: center;
            color: #00ffcc;
            margin-bottom: 30px;
        }

        .output {
            background-color: #112;
            color: #90ee90;
            font-family: monospace;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
        }

        .explanation {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-left: 5px solid #00ffcc;
            border-radius: 10px;
            line-height: 1.6;
        }

        code {
            background: #1e1e1e;
            padding: 2px 6px;
            border-radius: 5px;
            color: #ffd700;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Aula 03 - Constante</h1>

        <div class="output">
            <?php
                echo "<h3>Constante</h3>";
                define("SALARIO", 954);
                echo "O salário mínimo é " . SALARIO;
            ?>
        </div>

        <div class="explanation">
            <p><strong>Explicação:</strong></p>
            <p>Constantes são identificadores com valor fixo, ou seja, não podem ser alteradas após serem definidas.</p>
            <p>Usamos a função <code>define()</code> para criar constantes. Exemplo:</p>
            <ul>
                <li><code>define("SALARIO", 954);</code> cria uma constante chamada <strong>SALARIO</strong> com valor 954.</li>
                <li>Para exibir o valor da constante, usamos apenas o nome dela, sem <code>$</code>: <code>SALARIO</code>.</li>
                <li><code>echo "O salário mínimo é " . SALARIO;</code> imprime o valor concatenado na tela.</li>
            </ul>
            <p>Constantes são geralmente escritas em letras maiúsculas por convenção.</p>
        </div>
    </div>
</body>
</html>
