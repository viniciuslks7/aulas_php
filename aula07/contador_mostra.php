<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Contador</title>
    <style>
        body {
            font-family: sans-serif;
            background: linear-gradient(to right, #43cea2, #185a9d);
            color: white;
            padding: 50px;
        }
        .box {
            background-color: rgba(0,0,0,0.7);
            padding: 30px;
            border-radius: 12px;
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
        <h2>Resultado da Contagem</h2>
        <?php
        // Captura os dados do formulário
        $ni = $_GET["numInicial"];
        $nf = $_GET["numFinal"];
        $passo = $_GET["passo"];

        if ($ni === '' || $nf === '' || $passo === '') {
            echo "⚠️ Todos os campos são obrigatórios.";
        } else {
            echo "Você escolheu iniciar em <strong>$ni</strong> e terminar em <strong>$nf</strong>, com passo de <strong>$passo</strong>.<br><br>";

            // Se o número inicial for menor que o final, faz contagem crescente
            if ($ni < $nf) {
                for ($i = $ni; $i <= $nf; $i += $passo) {
                    echo "$i ➡️ ";
                }
                echo "<br><br><em>// A contagem foi feita somando o passo de $passo até alcançar ou ultrapassar $nf</em>";
            }
            // Caso contrário, faz contagem decrescente
            else {
                for ($i = $ni; $i >= $nf; $i -= $passo) {
                    echo "$i ➡️ ";
                }
                echo "<br><br><em>// A contagem foi feita subtraindo o passo de $passo até alcançar ou ultrapassar $nf</em>";
            }
        }
        ?>
        <br><br>
        <a href="contador.php">← Voltar</a>
    </div>
</body>
</html>
