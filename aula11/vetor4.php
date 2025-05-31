<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../nbproject/style.css" />
    <meta charset="UTF-8">
    <title>vetor4.php - Array associativo</title>
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
<div class="container">
    <?php
    $cliente['razaosocial'] = 'José da Silva - ME';
    $cliente['nomefantasia'] = 'JS Soluções e Sistemas';
    $cliente['cidade'] = 'Jales';

    echo "<h3>Mostrando o array associativo com print_r</h3>";
    echo "<pre>";
    print_r($cliente);
    echo "</pre>";

    echo "<h3>Mostrando o array associativo com var_dump</h3>";
    echo "<pre>";
    var_dump($cliente);
    echo "</pre>";

    echo "<h3>Percorrendo o array associativo com foreach</h3>";
    foreach ($cliente as $valor) {
        echo "$valor <br/>";
    }
    ?>
</div>
</body>
</html>
