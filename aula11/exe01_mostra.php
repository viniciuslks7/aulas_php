<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mostrar Vetor - Aula 11</title>
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
                max-width: 500px;
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
        </style>
    </head>
    <body>
        <div class="container">
        <?php
            echo "<h3>Recebendo os dados e mostrando com echo</h3>";
            for ($c = 0; $c <= 4; $c++) {
                $vetor[$c] = $_GET["v" . $c];
                echo "Valor do vetor na posição $c = $vetor[$c]<br/>";
            }

            echo "<h3>Mostrando com foreach</h3>";
            foreach ($vetor as $chave => $valor) {
                echo "Coluna $chave: $valor <br/>";
            }

            echo "<h3>Mostrando com print_r</h3>";
            echo "<pre>";
            print_r($vetor);
            echo "</pre>";

            echo "<h3>Mostrando com var_dump</h3>";
            echo "<pre>";
            var_dump($vetor);
            echo "</pre>";
        ?>
        <a href='exe01.php' style='color:#aaddff;'>Voltar</a>
        </div>
    </body>
</html>
