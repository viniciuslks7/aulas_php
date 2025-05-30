<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Aula 13 - Exemplo de Classe Veículo</title>
    <style>
        body {
            background: linear-gradient(135deg,rgb(226, 5, 5),rgb(198, 205, 218));
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
<div class="container">
<pre>
<?php
// Carregando a classe Veiculo (arquivo Veiculo.php)
require_once 'Veiculo.php';

// Criando o objeto $carro como instância da classe Veiculo
$carro = new Veiculo;
$carro->nome = "Gol";
$carro->cor = "branco";
$carro->ano = 2015;
$carro->botao = true; // Botão ligado, carro pode acelerar

// Exibindo o objeto $carro completo com var_dump para mostrar propriedades e valores
echo "<h3>Mostrando o objeto carro com var_dump</h3>";
var_dump($carro);

// Exibindo o objeto $carro com print_r para uma visualização mais legível
echo "<h3>Mostrando o objeto carro com print_r</h3>";
print_r($carro);

// Chamando os métodos do objeto para demonstrar comportamento do veículo
echo "<h3>Mostrando os métodos do objeto carro</h3>";

// Tentativa de acelerar (botao=true, então acelerará)
$carro->acelerar();

// Desligando o carro (botao=false)
$carro->desligar();

// Tentativa de acelerar novamente (botao=false, carro parado)
$carro->acelerar();

// Ligando o carro de novo (botao=true)
$carro->ligar();

// Tentativa de acelerar (botao=true, acelera)
$carro->acelerar();
?>
</pre>
</div>
</body>
</html>
