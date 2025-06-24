<?php
class Pessoa {
    private $nome;
    private $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function apresentar() {
        echo "Meu nome é {$this->nome} e tenho {$this->idade} anos.";
    }
}

// Criando objetos da classe Pessoa
$pessoa1 = new Pessoa("Ana", 25);
$pessoa2 = new Pessoa("Carlos", 30);

$pessoa1->apresentar();
echo "<br>";
$pessoa2->apresentar();
?>
