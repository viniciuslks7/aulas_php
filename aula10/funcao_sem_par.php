<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sem Parâmetros</title>
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
    function bemVindo(){ echo "<p align='center'>Olá, seja bem vindo! </p>"; }
    echo "<h2>Função sem Parâmetro</h2>";
    for($i = 1; $i <= 5; $i++){ bemVindo(); }
    ?>
</div>
</body>
</html>