<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../accessibility.css">
    <link rel="stylesheet" href="../nbproject/style.css" />
    <meta charset="UTF-8">
    <title>Função com Retorno</title>
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
            h2, p {
                text-align: center;
            }
        </style>
</head>
<body>
<div class="container">
    <?php
    function soma($a, $b){ return $a + $b; }

    echo "<h2>Função com Retorno</h2>";
    $x = 20; $y = 30;
    $r = soma($x, $y);
    echo "<p>A soma entre $x e $y = $r</p>";
    echo "<p><em>Explicação:</em> A função retorna o valor da soma, que pode ser usado posteriormente.</p>";
    ?>
</div>
        <script src="../accessibility.js"></script>
</body>
</html>