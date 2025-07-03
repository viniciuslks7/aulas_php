<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../accessibility.css">
    <link rel="stylesheet" href="../nbproject/style.css" />
    <meta charset="UTF-8">
    <title>Resultado do Pagamento</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #f953c6, #b91d73);
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
        $n = $_GET["num"];
        $op = $_GET["oper"];

        // Verifica se os campos estão preenchidos
        if ($n == NULL || $op == NULL) {
            echo "⚠️ Falta alguma informação no formulário.";
        } else {
            echo "🧾 Valor original da compra: R$ " . number_format($n, 2, ',', '.') . "<br><br>";

            switch ($op) {
                case 1:
                    $r = $n - ($n * 0.10);
                    echo "💰 Pagamento à vista com 10% de desconto: <strong>R$ " . number_format($r, 2, ',', '.') . "</strong>";
                    break;
                case 2:
                    $r = $n + ($n * 0.05);
                    echo "💰 Pagamento em 30 dias com 5% de juros: <strong>R$ " . number_format($r, 2, ',', '.') . "</strong>";
                    break;
                case 3:
                    $r = $n + ($n * 0.10);
                    echo "💰 Pagamento em 60 dias com 10% de juros: <strong>R$ " . number_format($r, 2, ',', '.') . "</strong>";
                    break;
                default:
                    echo "⚠️ Forma de pagamento inválida.";
            }
        }
        ?>
        <br><br>
        <a href="switch.html" title="← Voltar">{m.group(2)}</a>
    </div>
    <?php include __DIR__ . '/../vlibra_include.php'; ?>
    <script src="../accessibility.js"></script>
</body>
</html>
