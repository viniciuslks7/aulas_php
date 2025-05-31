<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../nbproject/style.css" />
    <meta charset="UTF-8">
    <title>Resultado</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #7F00FF, #E100FF);
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
            // Pegando o valor enviado via GET no formulário
            $valor = $_GET["v"];

            // Convertendo para inteiro (parte inteira)
            $pi = intval($valor);

            echo "<h3>Recebendo dados do Formulário 1</h3>";
            echo "A parte inteira de <strong>$valor</strong> é <strong>$pi</strong>.<br><br>";
        ?>
        <!-- Link para voltar ao formulário -->
        <a href="form1.html">← Voltar</a>
    </div>
</body>
</html>
