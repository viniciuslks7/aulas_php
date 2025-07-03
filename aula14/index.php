<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../accessibility.css">
    <link rel="stylesheet" href="../nbproject/style.css" />
    <meta charset="UTF-8" />
    <title>Aula 14 - Visibilidade de Propriedades em PHP</title>
    <style>
        body {
            background: linear-gradient(135deg,rgb(180, 10, 115),rgb(246, 112, 2));
            color: #f0f0f0;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .container {
            background: rgba(255,255,255,0.12);
            border-radius: 10px;
            max-width: 700px;
            margin: auto;
            padding: 20px;
            box-shadow: 0 0 18px rgba(0,0,0,0.4);
        }
        h3 {
            color: #cce5ff;
        }
        pre {
            background: rgba(0,0,0,0.25);
            padding: 15px;
            border-radius: 6px;
            overflow-x: auto;
        }
        p {
            font-size: 1.1em;
        }
    </style>
</head>
<body>
<?php include __DIR__ . '/../vlibra_include.php'; ?>
<div class="container">
<pre>
<?php
require_once 'Veiculo.php';

// Criando o objeto carro
$carro = new Veiculo;

// Definindo as propriedades publicas (nome e cor)
$carro->nome = "Gol";
$carro->cor = "branco";

echo "<h3>Explicação:</h3>";
echo "<p>As propriedades <strong>nome</strong> e <strong>cor</strong> são <em>public</em>, ou seja, podem ser acessadas e alteradas diretamente fora da classe.</p>";

echo "<p>A propriedade <strong>ano</strong> é <em>private</em> e a <strong>botao</strong> é <em>protected</em>, então <strong>não podem ser acessadas diretamente</strong> fora da classe. Por isso, não definimos elas aqui diretamente.</p>";

echo "<h3>Mostrando o objeto com var_dump</h3>";
var_dump($carro);

echo "<h3>Mostrando o objeto com print_r</h3>";
print_r($carro);

echo "<h3>Testando os métodos que controlam o carro</h3>";

// Como $botao começa como null, o carro está parado
$carro->acelerar();

echo "<p>Chamando o método ligar() para ligar o carro.</p>";
$carro->ligar();

echo "<p>Agora que o carro está ligado, vamos acelerar novamente.</p>";
$carro->acelerar();

echo "<p>Chamando o método desligar() para parar o carro.</p>";
$carro->desligar();

echo "<p>Após desligar, vamos tentar acelerar de novo.</p>";
$carro->acelerar();

?>
</pre>
</div>
        <script src="../accessibility.js"></script>
</body>
</html>
