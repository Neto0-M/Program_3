
<?php
//1
class Produto
{

	public $nome = "Caneta" ;
	public $preco  = 2.10;
	public $quantidade = 10;
	

	// métodos ou comportamentos
	public function  exibirInformacoes()
	{
		 echo "Nome: $this->nome, Preço: $this->preco, Quantidade: $this->quantidade <br>";
	}
	
}

	function mostrarMediaPrecos(Produto $produto, Produto $produto2) {
	$media = ($produto->preco + $produto2->preco) / 2;
	echo "A média dos preços dos produtos é $media";
}

//2
$produto = new Produto();
$produto->exibirInformacoes();

$produto2 = new Produto();
$produto2->nome = "Caderno";
$produto2->preco = 20;
$produto2->quantidade = 2;
$produto2->exibirInformacoes();

mostrarMediaPrecos($produto, $produto2);

 


?>