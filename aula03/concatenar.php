<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aula 03 - Concatenar</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: #ffffff;
            padding: 40px;
        }

        .container {
            background: rgba(255, 255, 255, 0.05);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.4);
            max-width: 800px;
            margin: auto;
        }

        h1 {
            text-align: center;
            color: #00d2ff;
            margin-bottom: 30px;
        }

        .output {
            background-color: #101820;
            color: #90ee90;
            font-family: monospace;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
        }

        .explanation {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-left: 5px solid #00d2ff;
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
        <h1>Aula 03 - Concatenar</h1>

        <div class="output">
            <?php
                echo "<h3>Concatenar</h3>";
                $texto1 = "PHP significa....";
                $texto2 = "Hypertext Preprocessor";
                echo $texto1 . $texto2;
            ?>
        </div>

        <div class="explanation">
            <p><strong>Explicação:</strong></p>
            <p>No PHP, usamos o operador <code>.</code> (ponto) para **concatenar** strings, ou seja, unir textos.</p>
            <p>Veja o exemplo usado:</p>
            <ul>
                <li><code>$texto1 = "PHP significa....";</code></li>
                <li><code>$texto2 = "Hypertext Preprocessor";</code></li>
                <li><code>echo $texto1 . $texto2;</code> irá imprimir: <br><em>PHP significa....Hypertext Preprocessor</em></li>
            </ul>
            <p>Você pode também adicionar espaços ou outros caracteres dentro da concatenação, se necessário.</p>
        </div>
    </div>
</body>
</html>
