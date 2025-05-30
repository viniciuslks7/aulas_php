<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aula 03 - Método GET</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            color: #ffffff;
            padding: 40px;
        }

        .container {
            background: rgba(255, 255, 255, 0.05);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.4);
            max-width: 800px;
            margin: auto;
        }

        h1 {
            text-align: center;
            color: #00ffff;
            margin-bottom: 30px;
        }

        .output {
            background-color: #112;
            color: #7CFC00;
            font-family: monospace;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
        }

        .explanation {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-left: 5px solid #00ffff;
            border-radius: 10px;
            line-height: 1.6;
        }

        code {
            background: #1e1e1e;
            padding: 3px 7px;
            border-radius: 5px;
            color: #ffd700;
        }

        a {
            color: #00ffff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Aula 03 - Método GET</h1>

        <div class="output">
            <?php
                echo "<h3>Personalizando os valores inseridos</h3>";
                $n1 = $_GET["a"];
                $n2 = $_GET["b"];
                echo "A soma = " . ($n1 + $n2);
            ?>
        </div>

        <div class="explanation">
            <p><strong>Explicação:</strong></p>
            <ul>
                <li>O método <code>GET</code> permite enviar dados via URL.</li>
                <li>Neste exemplo, os parâmetros <code>a</code> e <code>b</code> são obtidos da URL.</li>
                <li><code>\$n1 = \$_GET["a"];</code> pega o valor de <code>a</code> na URL.</li>
                <li><code>\$n2 = \$_GET["b"];</code> pega o valor de <code>b</code> na URL.</li>
                <li>Em seguida, é exibida a soma: <code>A soma = \$n1 + \$n2</code>.</li>
            </ul>
            <p><strong>Exemplo de uso:</strong></p>
            <p>Acesse a página assim: <br>
                <a href="?a=10&b=5">get.php?a=10&b=5</a> ou digite manualmente na URL: <br>
                <code>localhost:8080/aulas_php/aula03/get.php?a=10&b=5</code>
            </p>
        </div>
    </div>
</body>
</html>
