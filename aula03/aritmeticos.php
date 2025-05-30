<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aula 03 - Operadores Aritméticos</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            color: #f4f4f4;
            padding: 40px;
        }

        .container {
            background: rgba(255, 255, 255, 0.06);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(10px);
            max-width: 900px;
            margin: auto;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #00ffc8;
        }

        .output {
            background-color: #111;
            color: #00ff88;
            font-family: monospace;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .explanation {
            background: rgba(0, 0, 0, 0.4);
            padding: 20px;
            border-left: 5px solid #00ffc8;
            border-radius: 10px;
            line-height: 1.6;
        }

        .explanation strong {
            color: #00ffc8;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Aula 03 - Operadores Aritméticos</h1>

        <div class="output">
            <?php
            echo "<h3>Operadores aritméticos</h3>";
            $n1 = 3;
            $n2 = 2;
            echo "A soma de $n1 + $n2 = " . ($n1 + $n2);
            echo "<br> A subtração de $n1 - $n2 = " . ($n1 - $n2);
            echo "<br> A multiplicação de $n1 * $n2 = " . ($n1 * $n2);
            echo "<br> A divisão de $n1 / $n2 = " . ($n1 / $n2);
            echo "<br> O módulo de $n1 % $n2 = " . ($n1 % $n2);
            $n3 = "10";
            echo "<br> A soma de $n1 + $n3 = " . ($n1 + $n3); 
            ?>
        </div>

        <div class="explanation">
            <p><strong>Explicação:</strong></p>
            <p>Este exemplo mostra o uso dos <strong>operadores aritméticos</strong> em PHP:</p>
            <ul>
                <li><code>+</code>: Soma</li>
                <li><code>-</code>: Subtração</li>
                <li><code>*</code>: Multiplicação</li>
                <li><code>/</code>: Divisão</li>
                <li><code>%</code>: Módulo (resto da divisão)</li>
            </ul>
            <p>Note também que a variável <code>$n3</code> contém uma <strong>string numérica</strong> ("10"), mas o PHP faz a conversão automática para número ao realizar a operação com <code>$n1</code>.</p>
            <p>Esse comportamento é chamado de <strong>coerção de tipo implícita</strong>.</p>
        </div>
    </div>
</body>
</html>
