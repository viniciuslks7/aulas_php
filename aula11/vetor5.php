<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../accessibility.css">
    <link rel="stylesheet" href="../nbproject/style.css" />
    <meta charset="UTF-8">
    <title>vetor5.php - Array Multidimensional</title>
    <style>
        body {
            background: linear-gradient(135deg, #4b6cb7, #182848);
            color: #fff;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .container {
            background: rgba(255,255,255,0.15);
            border-radius: 10px;
            max-width: 600px;
            margin: auto;
            padding: 20px;
            box-shadow: 0 0 15px rgba(0,0,0,0.3);
        }
        h3 {
            color: #e1eaff;
        }
        pre {
            background: rgba(255,255,255,0.1);
            padding: 15px;
            border-radius: 6px;
            overflow-x: auto;
        }
    </style>
</head>
<body>
<?php include __DIR__ . '/../vlibra_include.php'; ?>
<div class="container">
    <?php
    $numeros[0][0] = 5;
    $numeros[0][1] = 30;
    $numeros[0][2] = 45;
    $numeros[1][0] = 100;
    $numeros[1][1] = 200;
    $numeros[1][2] = 300;

    echo "<h3>Mostrando array multidimensional com print_r</h3>";
    echo "<pre>";
    print_r($numeros);
    echo "</pre>";

    echo "<h3>Percorrendo array multidimensional com foreach mostrando suas linhas e colunas</h3>";
    foreach ($numeros as $chaveA => $linha) {
        echo "--> Linha: $chaveA <br/>";
        foreach ($linha as $chaveB => $coluna) {
            echo "Coluna $chaveB: $coluna | ";
        }
        echo "<br/>";
    }
    ?>
</div>
        <script src="../accessibility.js"></script>
</body>
</html>
