<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../nbproject/style.css" />
    <meta charset="UTF-8">
    <title>Contagem com FOR</title>
    <style>
        body {
            background: linear-gradient(to right, #1f4037, #99f2c8);
            font-family: Arial, sans-serif;
            color: white;
            padding: 50px;
        }
        .box {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 12px;
            max-width: 400px;
            margin: auto;
        }
        p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="box">
        <?php
        echo "<h2>Contagem de 1 a 10 usando FOR</h2>";
        for ($contador = 1; $contador <= 10; $contador++) {
            echo "<p>$contador // Valor atual da contagem</p>";
        }
        ?>
    </div>
</body>
</html>
