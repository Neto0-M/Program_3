<?php
abstract class Veiculo {
    protected $modelo;
    protected $ano;
    
    public function __construct($modelo, $ano) {
        $this->modelo = $modelo;
        $this->ano = $ano;
    }
    
    abstract public function mover();
    
    public function getInfo() {
        return "Modelo: {$this->modelo}, Ano: {$this->ano}";
    }
}

class Carro extends Veiculo {
    public function mover() {
        return "O carro {$this->modelo} está se movendo com motor a combustão!";
    }
}

class Bicicleta extends Veiculo {
    public function mover() {
        return "A bicicleta {$this->modelo} está se movendo com pedaladas!";
    }
}
echo "<p>Testando os Veículos:</p>";

$carro = new Carro("Fusca", 1980);
echo $carro->getInfo() . "<br>";
echo $carro->mover() . "<br><br>";

$bicicleta = new Bicicleta("Caloi", 2023);
echo $bicicleta->getInfo() . "<br>";
echo $bicicleta->mover() . "<br>";

?>