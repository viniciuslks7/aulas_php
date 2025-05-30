<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aula 03 - Operadores Relacionais</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #1e3c72, #2a5298);
            color: #ffffff;
            padding: 40px;
        }

        .container {
            background: rgba(255, 255, 255, 0.07);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 35px rgba(0, 0, 0, 0.5);
            max-width: 800px;
            margin: auto;
        }

        h1 {
            text-align: center;
            color: #00e6e6;
            margin-bottom: 25px;
        }

        .output {
            background-color: #121212;
            color: #7CFC00;
            font-family: monospace;
            padding: 20px;
            border-radius: 10px;
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
            padding: 3px 6px;
            border-radius: 4px;
            color: #ffd700;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Aula 03 - Operadores Relacionais</h1>

        <div class="output">
            <?php
                echo "<h3>Operadores relacionais</h3>";
                $num1 = 5;
                $num2 = 3;
                $tipo = "s";
                $r = $tipo == "s" ? $num1 + $num2 : $num1 * $num2;
                echo "O resultado = $r";
            ?>
        </div>

        <div class="explanation">
            <p><strong>Explicação:</strong></p>
            <ul>
                <li>Este exemplo utiliza um <strong>operador relacional</strong> (<code>==</code>) e o operador ternário (<code>?:</code>).</li>
                <li>A variável <code>\$tipo</code> é comparada com o valor <code>"s"</code> (de soma).</li>
                <li>Se <code>\$tipo == "s"</code> for verdadeiro, a operação realizada será <code>\$num1 + \$num2</code>.</li>
                <li>Se for falso, a operação será <code>\$num1 * \$num2</code>.</li>
                <li>No exemplo: <code>5 + 3 = 8</code> porque <code>\$tipo</code> realmente é <code>"s"</code>.</li>
            </ul>
        </div>
    </div>
</body>
</html>
