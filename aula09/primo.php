<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../accessibility.css">
        <link rel="stylesheet" href="../nbproject/style.css" />
        <meta charset="UTF-8">
        <title>Resultado do Número Primo</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background: linear-gradient(to right, #2c3e50, #3498db);
                color: white;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            .container {
                background: rgba(255, 255, 255, 0.1);
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
                max-width: 400px;
            }
            a {
                color: #ffd700;
                text-decoration: none;
            }
            a:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <?php 
            $numero = $_GET["numero"];
            $total_multiplos = 0;
            $divisores = "";

            for ($i = 1; $i <= $numero; $i++) {
                if ($numero % $i == 0) {
                    $divisores .= "$i ";
                    $total_multiplos++;
                }
            }

            $resultado = ($total_multiplos == 2) 
                ? "$numero é PRIMO!" 
                : "$numero não é PRIMO!";

            echo "<h2>Analisando o número $numero </h2>";
            echo "<p><strong>Valores divisores:</strong> $divisores <br><!-- Estes são os números que dividem $numero sem deixar resto. --></p>";
            echo "<p><strong>Total de divisores:</strong> $total_multiplos <br><!-- Um número primo deve ter apenas dois divisores: 1 e ele mesmo. --></p>";
            echo "<p><strong>Resultado:</strong> $resultado <br><!-- Resultado final da verificação. --></p>";
            ?>
            <br><a href='primo.html'>Voltar</a>
        </div>
            <script src="../accessibility.js"></script>
<?php include __DIR__ . '/../vlibra_include.php'; ?>
</body>
</html>
