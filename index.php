<?php

class Caneta
{
    private $ponta;
    private $cor;
    public $marca;


    public function getCor()
    {
        return $this->cor;
    }
    public function setCor($cor)
    {
        $this->cor = $cor;
    }
    public function getPonta()
    {
        return $this->ponta;
    }
    public function setPonta($ponta)
    {
        $this->ponta = $ponta;
    }
    public function getmarca()
    {
        return $this->marca;
    }

    public function setmarca($marca)
    {
        $this->marca = $marca;
    }
    
    public function __construct($ponta = 0.5, $cor = "azul", $marca = "bic")
    {
        $this->ponta = $ponta;
        $this->cor = $cor;
        $this->marca = $marca;
    }   
}
$caneta = new Caneta();
$caneta->setCor("azul");
$caneta->setPonta(0.5);
$caneta->setmarca("bic");
echo "A cor da caneta é: " . $caneta->getCor() . "<br>";
echo "A ponta da caneta é: " . $caneta->getPonta() . "<br>";
echo "A marca da caneta é: " . $caneta->getmarca() . "<br>";
echo "A cor da caneta é: " . $caneta->getCor() . "<br>";
print_r($caneta);
echo "<br>";
?>
<?php 
class carro{
    private $cor;
    private $ano;
    private $modelo;

    public function getCor()
    {
        return $this->cor;
    }
    public function setCor($cor)
    {
        $this->cor = $cor;
    }
    public function getAno()
    {
        return $this->ano;
    }
    public function setAno($ano)
    {
        $this->ano = $ano;
    }
    public function getModelo()
    {
        return $this->modelo;
    }
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }
    public function __construct($cor = "Azul" , $ano = 2015 , $modelo = "Uno")
    {
        $this->cor = $cor;
        $this->ano = $ano;
        $this->modelo = $modelo;
    }
}
///
$carro = new Carro();

$carro->setCor("azul");     
$carro->setAno(2015);
$carro->setModelo("uno");      


echo "A cor do carro é: " . $carro->getCor() . "<br>";
echo "O ano do carro é: " . $carro->getAno() . "<br>";
echo "O modelo do carro é: " . $carro->getModelo() . "<br>";
print_r($carro);
