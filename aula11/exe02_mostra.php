<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../accessibility.css">
        <link rel="stylesheet" href="../nbproject/style.css" />
        <meta charset="UTF-8">
        <title>Mostrar Matriz - Aula 11</title>
        <style>
            body {
                background: linear-gradient(135deg, #4b6cb7, #182848);
                font-family: Arial, sans-serif;
                color: #fff;
                margin: 0;
                padding: 20px;
            }
            .container {
                background-color: rgba(255, 255, 255, 0.15);
                border-radius: 10px;
                max-width: 600px;
                margin: auto;
                padding: 20px;
                box-shadow: 0 0 15px rgba(0,0,0,0.3);
            }
            h3 {
                color: #e1eaff;
            }
            p {
                font-size: 18px;
            }
            a {
                color: #aaddff;
                text-decoration: none;
            }
            a:hover {
                text-decoration: underline;
            }
            pre {
                background: rgba(255,255,255,0.1);
                padding: 10px;
                border-radius: 6px;
                overflow-x: auto;
            }
        </style>
    </head>
    <body>
        <div class="container">
        <?php
        echo "<h3>Recebendo os dados e mostrando com echo</h3>";
        for ($linha = 0; $linha <= 1; $linha++) {
            for ($coluna = 0; $coluna <= 3; $coluna++) {
                $matriz[$linha][$coluna] = $_GET["m" . $linha . $coluna];
                echo "<p>Matriz  [$linha][$coluna] = " . $matriz[$linha][$coluna] . "</p>";
            }
        }

        echo "<h3>Mostrando com foreach</h3>";
        foreach ($matriz as $chaveL => $linha){
            echo "--> Linha: $chaveL <br/>";
            foreach($linha as $chaveC => $coluna){
                echo "Coluna $chaveC: $coluna <br/>";
            }
        }

        echo "<h3>Mostrando com print_r</h3>";
        echo "<pre>";
        print_r($matriz);
        echo "</pre>";

        echo "<h3>Mostrando com var_dump</h3>";
        echo "<pre>";
        var_dump($matriz);
        echo "</pre>";
        ?>
        <a href="exe02.php" title="Voltar">{m.group(2)}</a>
        </div>
            <script src="../accessibility.js"></script>
</body>
</html>
