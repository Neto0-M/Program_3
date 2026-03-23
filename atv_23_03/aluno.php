<?php 
class aluno{
    public $nome;
    public $idade; 
    public $media;
    public $matricula;

    public function situacao(){
        if($this->media >= 7){
            return "Aprovado";
        } else {
            return "Reprovado";
        }
    }

}

$aluno = new Aluno();
$aluno-> nome = "Maria Silva"; 
$aluno-> idade = 20;
$aluno-> media = 8.5;
$aluno-> matricula = "2021001";
echo "Nome: " . $aluno->nome . "<br>";
echo "Idade: " . $aluno->idade . "<br>";
echo "Média: " . $aluno->media . "<br>";
echo "Matrícula: " . $aluno->matricula . "<br>";
echo "Situação: " . $aluno->situacao() . "<br>";