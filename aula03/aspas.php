<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../accessibility.css">
    <link rel="stylesheet" href="../nbproject/style.css" />
    <meta charset="UTF-8">
    <title>Aula 03 - Aspas</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #42275a, #734b6d);
            color: #f4f4f4;
            padding: 40px;
        }

        .container {
            background: rgba(255, 255, 255, 0.07);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(8px);
            max-width: 900px;
            margin: auto;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #ff6f91;
        }

        .output {
            background-color: #1b1b2f;
            color: #ffb6b9;
            font-family: monospace;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .explanation {
            background: rgba(0, 0, 0, 0.45);
            padding: 20px;
            border-left: 5px solid #ff6f91;
            border-radius: 10px;
            line-height: 1.6;
        }

        .explanation strong {
            color: #ff6f91;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Aula 03 - Aspas</h1>

        <div class="output">
            <?php
            echo "<h3>Aspas</h3>";
            $carro = "Camaro";
            echo "Eu tenho um $carro <br>";
            echo 'Eu tenho um $carro <br>';
            ?>
        </div>

        <div class="explanation">
            <p><strong>Explicação:</strong></p>
            <p>No PHP, aspas duplas <code>\" \"</code> interpretam variáveis dentro da string, substituindo-as pelo valor.</p>
            <p>Aspas simples <code>\' \'</code> interpretam o texto literalmente, sem substituir variáveis.</p>
            <p>Por isso, a linha <code>echo "Eu tenho um $carro";</code> mostra <em>Eu tenho um Camaro</em>, enquanto <code>echo 'Eu tenho um $carro';</code> mostra <em>Eu tenho um $carro</em> literalmente.</p>
        </div>
    </div>
    <?php include __DIR__ . '/../vlibra_include.php'; ?>
    <script src="../accessibility.js"></script>
</body>
</html>
