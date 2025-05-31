<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../nbproject/style.css" />
    <meta charset="UTF-8">
    <title>Aula 03 - Tipo de Variável</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #654ea3, #eaafc8);
            color: #ffffff;
            padding: 40px;
        }

        .container {
            background: rgba(255, 255, 255, 0.07);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            max-width: 850px;
            margin: auto;
        }

        h1 {
            text-align: center;
            color: #ffd700;
            margin-bottom: 25px;
        }

        .output {
            background-color: #1b1b2f;
            color: #00ffcc;
            font-family: monospace;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .explanation {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-left: 5px solid #ffd700;
            border-radius: 10px;
            line-height: 1.6;
        }

        code {
            background: #333;
            padding: 3px 6px;
            border-radius: 4px;
            color: #ffcc00;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Aula 03 - Tipos de Variáveis</h1>

        <div class="output">
            <?php
                echo "<h3>Tipo de variável</h3>";
                $var1 = 10;
                $var2 = 35.86;
                $var3 = "PHP Hypertext Preprocessor";
                $var4 = false;
                $var5 = null;

                echo '$var1 é do tipo ' . gettype($var1) . "<br>";
                echo '$var2 é do tipo ' . gettype($var2) . "<br>";
                echo '$var3 é do tipo ' . gettype($var3) . "<br>";
                echo '$var4 é do tipo ' . gettype($var4) . "<br>";
                echo '$var5 é do tipo ' . gettype($var5) . "<br>";
            ?>
        </div>

        <div class="explanation">
            <p><strong>Explicação:</strong></p>
            <ul>
                <li><code>gettype()</code> retorna o tipo de dado armazenado em uma variável.</li>
                <li><code>\$var1 = 10</code> é um <strong>inteiro</strong>.</li>
                <li><code>\$var2 = 35.86</code> é um <strong>float</strong> (número de ponto flutuante).</li>
                <li><code>\$var3</code> contém uma <strong>string</strong>.</li>
                <li><code>\$var4 = false</code> é um <strong>boolean</strong>.</li>
                <li><code>\$var5 = null</code> é do tipo <strong>NULL</strong>.</li>
                <li>Essa função é útil para debugar, testar ou aprender os tipos básicos do PHP.</li>
            </ul>
        </div>
    </div>
</body>
</html>
