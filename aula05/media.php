<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Média</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #00c6ff, #0072ff);
            color: #fff;
            padding: 50px;
        }
        .result-box {
            background: rgba(0,0,0,0.7);
            padding: 30px;
            border-radius: 12px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 0 20px rgba(0,0,0,0.4);
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
    <div class="result-box">
        <?php
        // Recebe os dados do formulário
        $nome = $_GET["nome"];
        $n1 = $_GET["nota1"];
        $n2 = $_GET["nota2"];
        $n3 = $_GET["nota3"];
        $n4 = $_GET["nota4"];

        // Verifica se algum campo está vazio
        if ($nome == NULL || $n1 == NULL || $n2 == NULL || $n3 == NULL || $n4 == NULL) {
            echo "⚠️ Há campos vazios, verifique e tente novamente.";
        } else {
            // Calcula a média
            $media = ($n1 + $n2 + $n3 + $n4) / 4;

            // Exibe o resultado com base na média
            echo "<h3>Resultado:</h3>";
            echo "O aluno(a) <strong>$nome</strong> obteve a média <strong>$media</strong>.<br>";

            if ($media >= 6) {
                echo "✅ Situação: <strong>Aprovado(a)</strong>!";
            } else {
                echo "❌ Situação: <strong>Reprovado(a)</strong>!";
            }
        }
        ?>
        <br><br>
        <a href="media.html">← Voltar</a>
    </div>
</body>
</html>
