<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../accessibility.css">
    <link rel="stylesheet" href="../nbproject/style.css" />
    <meta charset="UTF-8">
    <title>Entrada de Valores</title>
    <style>
        body {
            background: linear-gradient(to right, #00c6ff, #0072ff);
            font-family: sans-serif;
            color: white;
            padding: 50px;
        }
        form {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 10px;
            max-width: 400px;
            margin: auto;
        }
        input[type="number"], input[type="submit"] {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #ffa500;
            color: black;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form method="get" action="while_dinamico_mostra.php">
        <h2>Digite 5 Valores</h2>
        <?php
        $c = 1;
        while ($c <= 5) {
            echo "<p>$c º valor: <input type='number' name='v$c' required /></p>";
            $c++;
        }
        ?>
        <input type="submit" value="Enviar" />
    </form>
    <?php include __DIR__ . '/../vlibra_include.php'; ?>
    <script src="../accessibility.js"></script>
</body>
</html>
