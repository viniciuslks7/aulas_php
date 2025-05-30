<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Valores Recebidos</title>
    <style>
        body {
            background: linear-gradient(to right, #11998e, #38ef7d);
            font-family: sans-serif;
            color: white;
            padding: 50px;
        }
        .box {
            background-color: rgba(0,0,0,0.6);
            padding: 20px;
            border-radius: 10px;
            max-width: 500px;
            margin: auto;
        }
        a {
            color: #00ffcc;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>Valores Informados</h2>
        <?php
        $i = 1;
        while ($i <= 5) {
            @$valor = $_GET["v" . $i];
            if ($valor == NULL) {
                echo "<p>⚠️ Falta digitar o $i º valor.</p>";
            } else {
                echo "<p>$i º valor: $valor - // Este foi o valor digitado na posição $i</p>";
            }
            $i++;
        }
        ?>
        <br>
        <a href="while_dinamico.php">← Voltar</a>
    </div>
</body>
</html>
