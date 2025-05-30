<?php

class Veiculo {

    public $nome;
    public $cor;
    private $ano;
    protected $botao;

    // Método para acelerar o carro
    public function acelerar() {
        if ($this->botao == true) {
            echo "<p>O carro está acelerando ...</p>";
        } else {
            echo "<p>O carro está parado ...</p>";
        }
    }

    // Método para ligar o carro
    public function ligar(){
        $this->botao = true;
        echo "<p>O carro foi ligado (botao = true).</p>";
    }

    // Método para desligar o carro
    public function desligar() {
        $this->botao = false;
        echo "<p>O carro foi desligado (botao = false).</p>";
    }
}
