<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #f7971e, #ffd200);
            color: #fff;
            padding: 40px;
        }
        .result-box {
            background: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 12px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 0 20px rgba(0,0,0,0.4);
        }
        a {
            color: #ffcc00;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
        h3 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="result-box">
        <?php
            // Recebe os dados enviados pelo formulário
            $nome = $_GET["nome"];   // Nome da pessoa
            $ano = $_GET["ano"];     // Ano de nascimento
            $sexo = $_GET["sexo"];   // Sexo selecionado

            // Calcula a idade atual com base no ano atual
            $idade = date("Y") - $ano;

            echo "<h3>Recebendo os dados do Formulário 2</h3>";
            echo "<p><strong>$nome</strong> é do sexo <strong>$sexo</strong> e tem <strong>$idade</strong> anos.</p>";
        ?>
        <!-- Link para voltar ao formulário -->
        <br>
        <a href="form2.html">← Voltar</a>
    </div>
</body>
</html>
