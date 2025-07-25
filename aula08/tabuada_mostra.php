<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../accessibility.css">
    <link rel="stylesheet" href="../nbproject/style.css" />
    <meta charset="UTF-8">
    <title>Resultado da Tabuada</title>
    <style>
        body {
            background: linear-gradient(to right, #0f2027, #2c5364);
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
        a {
            color: #00d4ff;
            text-decoration: none;
            display: block;
            margin-top: 20px;
        }
        a:hover {
            text-decoration: underline;
        }
        p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="box">
        <?php
        $tabuada = $_GET["value"];
        $n1 = 0;
        echo "<h2>Tabuada do número $tabuada</h2>";

        do {
            $resultado = $tabuada * $n1;
            echo "<p>$tabuada x $n1 = $resultado 
                // Multiplicando $tabuada por $n1</p>";
            $n1++;
        } while ($n1 <= 10);
        ?>
        <a href="tabuada.php" title="← Escolher outro número">{m.group(2)}</a>
    </div>
    <?php include __DIR__ . '/../vlibra_include.php'; ?>
    <script src="../accessibility.js"></script>
</body>
</html>
