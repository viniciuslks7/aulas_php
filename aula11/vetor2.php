<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>vetor2.php - Array com push implícito</title>
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
    $bandas[] = 'Queen';
    $bandas[] = 'Scorpions';
    $bandas[] = 'Dire Straits';
    $bandas[] = 'U2';

    echo "<h3>Mostrando o array com print_r</h3>";
    echo "<pre>";
    print_r($bandas);
    echo "</pre>";

    echo "<h3>Mostrando o array com var_dump</h3>";
    echo "<pre>";
    var_dump($bandas);
    echo "</pre>";

    echo "<h3>Percorrendo um array com for</h3>";
    for ($i = 0; $i < count($bandas); $i++) {
        echo "$bandas[$i] <br/>";
    }

    echo "<h3>Percorrendo um array com foreach</h3>";
    foreach ($bandas as $valor) {
        echo "$valor <br/>";
    }
    ?>
</div>
</body>
</html>
