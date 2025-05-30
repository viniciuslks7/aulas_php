<?php

class Veiculo {

    private $nome;
    private $cor;
    private $ano;
    protected $botao;

    // Método construtor para inicializar propriedades ao criar o objeto
    public function __construct($n, $a, $b) {
        $this->nome = $n;
        $this->cor = "amarelo";  // Cor fixa definida no construtor
        $this->ano = $a;
        $this->botao = $b;
        // A seguir, chamamos desligar() para garantir o estado inicial desligado
        $this->desligar();
        echo "<p><em>Construtor:</em> Objeto criado com nome={$this->nome}, cor={$this->cor}, ano={$this->ano}, botao inicial={$b} (forçado a desligar).</p>";
    }

    // Método para acelerar, verifica se está ligado
    public function acelerar() {
        if ($this->botao == true) {
            echo "<p>O veículo {$this->nome} está acelerando ...</p>";
        } else {
            echo "<p>O veículo {$this->nome} está parado ...</p>";
        }
    }

    // Método para ligar o veículo
    public function ligar() {
        $this->botao = true;
        echo "<p>O veículo {$this->nome} foi ligado (botao = true).</p>";
    }

    // Método para desligar o veículo
    public function desligar() {
        $this->botao = false;
        echo "<p>O veículo {$this->nome} foi desligado (botao = false).</p>";
    }

    // Getters para acessar propriedades privadas
    public function getNome() {
        return $this->nome;
    }

    public function getCor() {
        return $this->cor;
    }

    public function getAno() {
        return $this->ano;
    }

    public function getBotao() {
        return $this->botao;
    }

    // Setters para modificar propriedades privadas
    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setCor($cor): void {
        $this->cor = $cor;
    }

    public function setAno($ano): void {
        $this->ano = $ano;
    }

    public function setBotao($botao): void {
        $this->botao = $botao;
    }
}
