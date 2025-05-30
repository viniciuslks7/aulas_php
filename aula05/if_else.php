<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #fc4a1a, #f7b733);
            color: #fff;
            padding: 40px;
        }
        .result-box {
            background: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 12px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 0 20px rgba(0,0,0,0.4);
        }
        a {
            color: #ffcc00;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
        h3 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="result-box">
        <?php
            // Recebendo a idade informada pelo usuário
            $i = $_GET["idade"];

            // Verifica se o valor foi enviado
            if ($i == NULL) {
                // Caso não tenha sido informado, pede para voltar
                echo "⚠️ Por favor, volte e digite a idade.";
            } elseif ($i >= 18) {
                // Maior de idade
                echo "<h3>Resultado:</h3>";
                echo "Você tem <strong>$i</strong> anos.<br>";
                echo "✅ Com essa idade você <strong>pode tirar a habilitação</strong>.";
            } else {
                // Menor de idade
                echo "<h3>Resultado:</h3>";
                echo "Você tem <strong>$i</strong> anos.<br>";
                echo "❌ Com essa idade você <strong>não pode tirar a habilitação</strong>.";
            }
        ?>
        <br><br>
        <!-- Link para retornar ao formulário -->
        <a href="if_else.html">← Voltar</a>
    </div>
</body>
</html>
