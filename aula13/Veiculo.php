<?php
// Definição da classe Veiculo, que representa um veículo genérico
class Veiculo {

    // Propriedades públicas para armazenar características do veículo
    public $nome;    // Nome ou modelo do veículo
    public $cor;     // Cor do veículo
    public $ano;     // Ano do veículo
    public $botao;   // Estado do botão de ligar/desligar (true = ligado)

    // Método para acelerar o veículo
    public function acelerar() {
        // $this refere-se ao objeto atual (instância da classe Veiculo)
        if ($this->botao == true) {
            echo "<p>O carro está acelerando ...</p>";
        } else {
            echo "<p>O carro está parado ...</p>";
        }
    }
    
    // Método para ligar o veículo (botao = true)
    public function ligar(){
        $this->botao = true;
    }
    
    // Método para desligar o veículo (botao = false)
    public function desligar() {
        $this->botao = false;
    }
}
?>
