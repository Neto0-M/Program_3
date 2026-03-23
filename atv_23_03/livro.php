<?php 
class livro{
    public $titulo;
    public $autor; 
    public $numPag;
    public $anoPub;

} 

$livro= new Livro();

$livro-> titulo = "É assim que acaba";
$livro-> autor = "Collen Houver";
$livro-> numPag = "396 pag";
$livro-> anoPub = "2018"; 

echo "Título: " . $livro->titulo . "\n";
echo "Autor: " . $livro->autor . "\n";
echo "Páginas: " . $livro->numPag . "\n";
echo "Ano de Publicação: " . $livro->anoPub;
?>

<?php 
class conta{
    public $titular;
    public $saldo; 
    public $numConta;
    public $taxaJuros;

    public function depositar($valor){
        $this->saldo += $valor;
    }
    function sacar($valor){
        if($valor <= $this->saldo){
            $this->saldo -= $valor;
        } else {
            echo "Saldo insuficiente!";
        }
    }
    public function exibirSaldo(){
        return "Saldo atual: " . $this->saldo;
    }
}

$conta = new Conta();
$conta-> titular = "Maria Silva";       
$conta-> saldo = 1000;
$conta-> numConta = "123456";
$conta-> taxaJuros = "0.05";  
$conta->depositar(500);
echo $conta->exibirSaldo() . "\n";
$conta->sacar(200); 
echo $conta->exibirSaldo() . "\n";
echo "Titular: " . $conta->titular . "\n";
echo "Saldo: " . $conta->saldo . "\n";
echo "Número da Conta: " . $conta->numConta . "\n";
echo "Taxa de Juros: " . $conta->taxaJuros . "\n";



?>