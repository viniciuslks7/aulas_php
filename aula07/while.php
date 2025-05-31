<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../nbproject/style.css" />
    <meta charset="UTF-8">
    <title>Contador com WHILE</title>
    <style>
        body {
            background: linear-gradient(to right, #f12711, #f5af19);
            font-family: sans-serif;
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
        h3 {
            text-align: center;
        }
        p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="box">
        <h3>Contagem de 1 a 10 usando WHILE</h3>
        <?php
        $contador = 1;
        while ($contador <= 10) {
            echo "<p>Valor atual do contador: $contador // Este número foi gerado pelo laço WHILE</p>";
            $contador++;
        }
        ?>
    </div>
</body>
</html>
