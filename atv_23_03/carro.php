<?php 
class carro{
    public $marca;
    public $modelo; 
    public $ano;
    public $VelocMax;


    public function acelerar(){
        return "O carro está acelerando!";
    }

    public function frear(){
        return "O carro está freando!";
    }

 }

$carro = new Carro();
$carro-> marca = "Toyota";
$carro-> modelo = "Corolla";
$carro-> ano = "2020";
$carro-> VelocMax = "200 km/h";
echo "Marca: " . $carro->marca . "<br>";
echo "Modelo: " . $carro->modelo . "<br>";
echo "Ano: " . $carro->ano . "<br>";
echo "Velocidade Máxima: " . $carro->VelocMax . "<br>";
echo $carro->acelerar() . "<br>"; 
echo $carro->frear() . "<br>";

?>