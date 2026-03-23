<?php  
class funcionario{
    public $nome;
    public $cargo; 
    public $salario;
    public $dataAdmissao;

    public function salarioanual(){
        return $this->salario * 12;
    }
}

$funcionario = new Funcionario();
$funcionario-> nome = "João Silva";
$funcionario-> cargo = "Analista de Sistemas";
$funcionario-> salario = 1000;
$funcionario-> dataAdmissao = "2020";

echo "Nome: " . $funcionario->nome . "\n";
echo "Cargo: " . $funcionario->cargo . "\n";
echo "Salário: " . $funcionario->salario . "\n";
echo "Data de Admissão: " . $funcionario->dataAdmissao . "\n";
echo "Salário Anual: " . $funcionario->salarioanual() . "\n";

?>

<?php 





?>