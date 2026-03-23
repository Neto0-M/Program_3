<?php
class Retangulo
{
    public $base;
    public $altura;

    public function area()
    {
        return $this->base * $this->altura;
    }
    public function perimetro()
    {
        return 2 * ($this->base + $this->altura);
    }
}
$retangulo = new Retangulo();
$retangulo->base = 5;              
$retangulo->altura = 3;
echo "Base: " . $retangulo->base . "\n";
echo "Altura: " . $retangulo->altura . "\n";    
echo "Área: " . $retangulo->area() . "<br>";
echo "Perímetro: " . $retangulo->perimetro() . "<br>";

class triangulo
{
   public $base;
   public $altura;

    public function area()
    {
         return ($this->base * $this->altura) / 2;
    }
    public function tipotriangulo()
    {  
        if ($this->base == $this->altura) {
            return "Triângulo Isósceles";
        } elseif ($this->base == $this->altura && $this->base == $this->altura) {
            return "Triângulo Equilátero";
        } else {
            return "Triângulo Escaleno";
        }
    }
}