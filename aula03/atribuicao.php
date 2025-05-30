<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aula 03 - Atribuição</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #16222A, #3A6073);
            color: #ffffff;
            padding: 40px;
        }

        .container {
            background: rgba(255, 255, 255, 0.05);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.5);
            max-width: 900px;
            margin: auto;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #6dd5ed;
        }

        .output {
            background-color: #0f2027;
            color: #90ee90;
            font-family: monospace;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .explanation {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-left: 5px solid #6dd5ed;
            border-radius: 10px;
            line-height: 1.6;
        }

        .explanation strong {
            color: #6dd5ed;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Aula 03 - Operadores de Atribuição</h1>

        <div class="output">
            <?php
            echo "<h3>Operadores de atribuição</h3>";
            $var1 = 2;
            $var1 += 10;
            echo "\$var1 += 10 → $var1<br>";
            $var1 *= 10;
            echo "\$var1 *= 10 → $var1<br>";
            $var1 /= 10;
            echo "\$var1 /= 10 → $var1<br>";
            $var1 -= 10;
            echo "\$var1 -= 10 → $var1<br>";
            ?>
        </div>

        <div class="explanation">
            <p><strong>Explicação:</strong></p>
            <p>Os <strong>operadores de atribuição</strong> permitem modificar o valor de uma variável de forma prática:</p>
            <ul>
                <li><code>\$var += valor</code> → Soma e atribui</li>
                <li><code>\$var *= valor</code> → Multiplica e atribui</li>
                <li><code>\$var /= valor</code> → Divide e atribui</li>
                <li><code>\$var -= valor</code> → Subtrai e atribui</li>
            </ul>
            <p>No exemplo, começamos com <code>\$var1 = 2</code> e fomos alterando o valor passo a passo.</p>
        </div>
    </div>
</body>
</html>
