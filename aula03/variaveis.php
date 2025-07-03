<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../accessibility.css">
    <link rel="stylesheet" href="../nbproject/style.css" />
    <meta charset="UTF-8">
    <title>Aula 03 - Variáveis</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #00c6ff, #0072ff);
            color: #fff;
            padding: 40px;
        }

        .container {
            background: rgba(0, 0, 0, 0.3);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            max-width: 800px;
            margin: auto;
        }

        h1 {
            text-align: center;
            color: #ffe600;
        }

        .output {
            background-color: #1e1e2f;
            padding: 20px;
            border-radius: 10px;
            font-family: monospace;
            margin-bottom: 30px;
        }

        .explanation {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-left: 5px solid #ffe600;
            border-radius: 10px;
            line-height: 1.6;
        }

        code {
            background: #333;
            padding: 3px 6px;
            border-radius: 4px;
            color: #ffe600;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Aula 03 - Variáveis</h1>

        <div class="output">
            <?php
                echo "<h3>Variáveis</h3>";
                $var1 = 40;
                $var2 = 45;
                $var3 = "Aprendendo PHP!";
                echo $var1 . "<br>";
                echo $var2 . "<br>";
                echo $var3 . "<br>";
                $var2 = "Variáveis dinâmicas!";
                echo $var2;
            ?>
        </div>

        <div class="explanation">
            <p><strong>Explicação:</strong></p>
            <ul>
                <li><code>\$var1</code> e <code>\$var2</code> armazenam números inteiros.</li>
                <li><code>\$var3</code> armazena uma <strong>string</strong>.</li>
                <li>É possível alterar o valor de uma variável ao longo do código, como visto em <code>\$var2</code>.</li>
                <li>PHP permite essa dinâmica e é uma das bases da linguagem.</li>
                <li>Boas práticas sugerem usar nomes de variáveis que sejam significativos.</li>
            </ul>
        </div>
    </div>
    <?php include __DIR__ . '/../vlibra_include.php'; ?>
    <script src="../accessibility.js"></script>
</body>
</html>
