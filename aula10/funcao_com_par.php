<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Função com Parâmetros</title>
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
            function soma($a, $b){
                $s = $a + $b;
                // Comentário explicando o que está acontecendo
                echo "<p><strong>Somando os valores:</strong> $a + $b = $s</p>";
                echo "<p><em>Explicação:</em> A função <code>soma()</code> recebe dois valores e calcula a soma entre eles, exibindo o resultado diretamente na tela.</p>";
            }

            echo "<h2>Função com Parâmetros</h2>";

            soma(3, 4);
            soma(8, 2);

            $x = 9;
            $y = 15;
            soma($x, $y);
            ?>
        </div>
    </body>
</html>
