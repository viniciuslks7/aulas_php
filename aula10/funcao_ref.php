<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../accessibility.css">
    <link rel="stylesheet" href="../nbproject/style.css" />
    <meta charset="UTF-8">
    <title>Referência</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
            color: #fff;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.1);
            margin: 50px auto;
            padding: 30px;
            border-radius: 20px;
            width: 80%;
            max-width: 600px;
            box-shadow: 0 0 15px rgba(0,0,0,0.5);
        }
        h2, p { text-align: center; }
    </style>
</head>
<body>
<?php include __DIR__ . '/../vlibra_include.php'; ?>
<div class="container">
    <?php
    function referencia (&$x){ $x += 2; echo "<p>O valor de x = $x</p>"; }
    $a = 3;
    echo "<h2>Parâmetro por Referência</h2>";
    referencia($a);
    echo "<p>Valor final de a = $a</p>";
    ?>
</div>
        <script src="../accessibility.js"></script>
</body>
</html>
