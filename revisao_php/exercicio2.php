<?php
class Livro {
    private $titulo;
    private $autor;
    private $disponivel;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->disponivel = true;
    }

    public function emprestar() {
        if ($this->disponivel) {
            $this->disponivel = false;
            echo "Livro emprestado com sucesso!<br>";
        } else {
            echo "Livro não disponível.<br>";
        }
    }

    public function devolver() {
        $this->disponivel = true;
        echo "Livro devolvido com sucesso!<br>";
    }

    public function isDisponivel() {
        return $this->disponivel;
    }
}

class Aluno {
    private $nome;
    private $matricula;

    public function __construct($nome, $matricula) {
        $this->nome = $nome;
        $this->matricula = $matricula;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function pegarLivro(Livro $livro) {
        if ($livro->isDisponivel()) {
            $livro->emprestar();
        } else {
            echo "O livro já está emprestado.<br>";
        }
    }
}

$livro1 = new Livro("Dom Casmurro", "Machado de Assis");
$aluno1 = new Aluno("João", "20231234");

$aluno1->pegarLivro($livro1);
$aluno1->pegarLivro($livro1); 
$livro1->devolver();
$aluno1->pegarLivro($livro1); 
?>
