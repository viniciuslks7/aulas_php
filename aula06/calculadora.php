<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../nbproject/style.css" />
    <meta charset="UTF-8">
    <title>Resultado da Calculadora</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #2c3e50, #3498db);
            color: #fff;
            padding: 50px;
        }
        .result-box {
            background: rgba(0,0,0,0.75);
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
        // Recebe os valores do formulário
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $op = $_GET["oper"];

        // Verificação básica de preenchimento
        if ($n1 == NULL || $n2 == NULL || $op == NULL) {
            echo "⚠️ Existem campos vazios, por favor verifique!";
        } elseif (!is_numeric($n1) || !is_numeric($n2)) {
            echo "⚠️ Os valores informados devem ser numéricos!";
        } else {
            // Conversão para números (caso venham como string)
            $n1 = (float)$n1;
            $n2 = (float)$n2;

            // Switch para operações
            switch ($op) {
                case 1:
                    $r = $n1 + $n2;
                    echo "🧮 Resultado da soma: $n1 + $n2 = <strong>$r</strong>";
                    break;
                case 2:
                    $r = $n1 - $n2;
                    echo "🧮 Resultado da subtração: $n1 - $n2 = <strong>$r</strong>";
                    break;
                case 3:
                    $r = $n1 * $n2;
                    echo "🧮 Resultado da multiplicação: $n1 × $n2 = <strong>$r</strong>";
                    break;
                case 4:
                    if ($n2 == 0) {
                        echo "❌ Erro: Divisão por zero não é permitida.";
                    } else {
                        $r = $n1 / $n2;
                        echo "🧮 Resultado da divisão: $n1 ÷ $n2 = <strong>$r</strong>";
                    }
                    break;
                default:
                    echo "⚠️ Nenhuma operação foi selecionada.";
            }
        }
        ?>
        <br><br>
        <a href="calculadora.html">← Voltar</a>
    </div>
</body>
</html>
