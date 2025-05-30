<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Aula 15 - Construtor e Encapsulamento</title>
    <style>
        body {
            background: linear-gradient(135deg,rgb(156, 205, 21), #2a5298);
            color: #f0f0f0;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .container {
            background: rgba(255,255,255,0.12);
            border-radius: 10px;
            max-width: 800px;
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
<div class="container">
<pre>
<?php
require_once 'Veiculo.php';

// Criando o objeto carro usando o método construtor
$carro = new Veiculo("Gol", 2015, true);

echo "<h3>Explicação:</h3>";
echo "<p>Estamos usando um <strong>método construtor</strong> para inicializar as propriedades do objeto no momento da criação.</p>";
echo "<p>O carro foi criado com nome 'Gol', ano 2015 e está ligado (botao=true).</p>";

echo "<h3>Mostrando o objeto carro com var_dump</h3>";
var_dump($carro);

echo "<h3>Mostrando o objeto carro com print_r</h3>";
print_r($carro);

echo "<h3>Mostrando as propriedades do carro usando os métodos getters:</h3>";
echo "<p>Nome: " . $carro->getNome() . "</p>";
echo "<p>Cor: " . $carro->getCor() . " (a cor é definida internamente no construtor como 'amarelo')</p>";
echo "<p>Ano: " . $carro->getAno() . "</p>";
echo "<p>Estado (botao): " . ($carro->getBotao() ? "Ligado" : "Desligado") . "</p>";

echo "<h3>Testando os métodos do carro</h3>";
$carro->acelerar();

echo "<p>Chamando desligar()</p>";
$carro->desligar();
$carro->acelerar();

echo "<p>Chamando ligar()</p>";
$carro->ligar();
$carro->acelerar();

echo "<hr>";

echo "<h3>Criando outro objeto: ônibus</h3>";
$onibus = new Veiculo("Scania", 2015, false);

echo "<p>Objeto ônibus criado com nome 'Scania', ano 2015 e desligado (botao=false).</p>";
echo "<h3>Mostrando o objeto ônibus com var_dump</h3>";
var_dump($onibus);

?>
</pre>
</div>
</body>
</html>
