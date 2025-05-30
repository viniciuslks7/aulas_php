<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Múltiplos Argumentos</title>
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
        h2, p { text-align: center; }
    </style>
</head>
<body>
<div class="container">
    <?php
    function soma() {
        $v = func_get_args();
        $t = func_num_args();
        $s = 0;
        for ($i = 0; $i < $t; $i++) $s += $v[$i];
        return $s;
    }

    $r = soma(3, 5, 2, 8, 9, 4);
    echo "<h2>Função com Múltiplos Parâmetros</h2>";
    echo "<p>Soma = $r</p>";
    echo "<p><em>Explicação:</em> Aceita vários parâmetros e soma todos.</p>";
    ?>
</div>
</body>
</html>