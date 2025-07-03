<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../accessibility.css">
    <link rel="stylesheet" href="../nbproject/style.css" />
    <meta charset="UTF-8">
    <title>vetor6.php - Array multidimensional associativo</title>
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
            max-width: 700px;
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
    $clientes[0]['nome'] = 'José da Silva';
    $clientes[0]['sexo'] = 'Masculino';
    $clientes[0]['cidade'] = 'Jales/SP';

    $clientes[1]['nome'] = 'Maria Souza';
    $clientes[1]['sexo'] = 'Feminino';
    $clientes[1]['cidade'] = 'Urânia/SP';

    echo "<h3>Mostrando array multidimensional associativo com print_r</h3>";
    echo "<pre>";
    print_r($clientes);
    echo "</pre>";

    echo "<h3>Percorrendo array multidimensional associativo mostrando chaves e valores</h3>";
    foreach ($clientes as $chaveA => $linha) {
        echo "--> Cliente: $chaveA <br/>";
        foreach ($linha as $chaveB => $coluna) {
            echo "$chaveB: $coluna | ";
        }
        echo "<br/>";
    }
    ?>
</div>
        <script src="../accessibility.js"></script>
</body>
</html>
