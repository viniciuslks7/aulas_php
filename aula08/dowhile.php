<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../accessibility.css">
    <link rel="stylesheet" href="../nbproject/style.css" />
    <meta charset="UTF-8">
    <title>Contador com DO-WHILE</title>
    <style>
        body {
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
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
        <h3>Contagem de 1 a 10 usando DO-WHILE</h3>
        <?php
        $contador = 1;
        do {
            echo "<p>Valor atual do contador: $contador // Este número foi exibido pelo laço DO-WHILE</p>";
            $contador++;
        } while ($contador <= 10);
        ?>
    </div>
    <?php include __DIR__ . '/../vlibra_include.php'; ?>
    <script src="../accessibility.js"></script>
</body>
</html>
