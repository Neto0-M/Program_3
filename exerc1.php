<?php
class Livro {
    private string $titulo;
    private int $anoPublicacao;
    private string $autor;
    private bool $disponivel;
    protected ?string $leitorAtual; 

    public function __construct(string $titulo, int $anoPublicacao, string $autor) {
        $this->titulo = $titulo;
        $this->anoPublicacao = $anoPublicacao;
        $this->autor = $autor;
        $this->disponivel = true;
        $this->leitorAtual = null;
    }

    // Métodos Get
    public function getTitulo(): string {
        return $this->titulo;
    }

    public function getAnoPublicacao(): int {
        return $this->anoPublicacao;
    }

    public function getAutor(): string {
        return $this->autor;
    }

    public function getDisponivel(): bool {
        return $this->disponivel;
    }

    public function getLeitorAtual(): ?string {
        return $this->leitorAtual;
    }

    // Métodos Set
    public function setTitulo(string $titulo): void {
        $this->titulo = $titulo;
    }

    public function setAnoPublicacao(int $anoPublicacao): void {
        $this->anoPublicacao = $anoPublicacao;
    }

    public function setAutor(string $autor): void {
        $this->autor = $autor;
    }

    public function setDisponivel(bool $disponivel): void {
        $this->disponivel = $disponivel;
    }

    public function setLeitorAtual(?string $leitorAtual): void {
        $this->leitorAtual = $leitorAtual;
    }

//exercicio 2 e 4
    public function emprestar(string $nomeLeitor): string {
        if ($this->disponivel) {
            $this->disponivel = false;
            $this->leitorAtual = $nomeLeitor; // Armazena o nome do leitor
            return "O livro '{$this->titulo}' foi emprestado para {$nomeLeitor}.";
        } else {
            return "O livro '{$this->titulo}' não está disponível para empréstimo.";
        }
    }

    public function devolver(): string {
        if (!$this->disponivel) {
            $leitorQueDevolveu = $this->leitorAtual;
            $this->disponivel = true;
            $this->leitorAtual = null; 
            return "O livro '{$this->titulo}' foi devolvido por {$leitorQueDevolveu}.";
        } else {
            return "O livro '{$this->titulo}' já está disponível.";
        }
    }

    public function estaDisponivel(): string {
        if ($this->disponivel) {
            return "O livro '{$this->titulo}' está disponível para empréstimo.<br>";
        } else {
            return "O livro '{$this->titulo}' não está disponível para empréstimo.<br>
             Atualmente com: " . ($this->leitorAtual ?? 'desconhecido');
        }
    }

    public function quemPegou(): string {
        if ($this->leitorAtual !== null) {
            return "<br> livro '{$this->titulo}' está atualmente com: {$this->leitorAtual}.";
        } else {
            return "<br>  O livro '{$this->titulo}' não está emprestado no momento.";
        }
    }

    // Método bônus: exibirInformacoes()
    public function exibirInformacoes(): string {
        $statusDisponibilidade = $this->disponivel ? 'Disponível' : 'Indisponível';
        $infoLeitor = $this->leitorAtual ? " (Emprestado para: {$this->leitorAtual})" : "";

        return "        
Informações do Livro 
Título: {$this->titulo}
Autor: {$this->autor}
Ano de Publicação: {$this->anoPublicacao}
Status: {$statusDisponibilidade}{$infoLeitor}<br>
";
    }
}

// Exercício 3
class Leitor {
    private string $nome;
    private string $email;
    private string $telefone;

    public function __construct(string $nome, string $email, string $telefone) {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    // Métodos Get
    public function getNome(): string {
        return $this->nome;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getTelefone(): string {
        return $this->telefone;
    }

    // Métodos Set
    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function setTelefone(string $telefone): void {
        $this->telefone = $telefone;
    }

    public function exibirLeitor(): string {
        return "
Nome: {$this->nome}
Email: {$this->email}
Telefone: {$this->telefone}

";
    }
}

// Exercício 5
class Biblioteca {
    public string $nomeBiblioteca;
    private array $livros;
    private array $leitores; 

    public function __construct(string $nomeBiblioteca) {
        $this->nomeBiblioteca = $nomeBiblioteca;
        $this->livros = [];
        $this->leitores = [];
    }

    public function adicionarLivro(Livro $livro): string {
        $this->livros[] = $livro;
        return "Livro '{$livro->getTitulo()}' adicionado à biblioteca.";
    }

    public function adicionarLeitor(Leitor $leitor): string {
        $this->leitores[] = $leitor;
        return "Leitor '{$leitor->getNome()}' adicionado à biblioteca.";
    }

    public function listarLivros(): string {
        if (empty($this->livros)) {
            return "Nenhum livro cadastrado na biblioteca '{$this->nomeBiblioteca}'.";
        }

        $lista = "\n--- Livros na Biblioteca {$this->nomeBiblioteca} ---\n";
        foreach ($this->livros as $livro) {
            $status = $livro->getDisponivel() ? 'Disponível' : 'Indisponível';
            $lista .= "Título: {$livro->getTitulo()} | Autor: {$livro->getAutor()} | Status: {$status}";
            if (!$livro->getDisponivel() && $livro->getLeitorAtual()) {
                $lista .= " (Com: {$livro->getLeitorAtual()})";
            }
            $lista .= "\n";
        }
        $lista .= "\n";
        return $lista;
    }

    public function listarLeitores(): string {
        if (empty($this->leitores)) {
            return "Nenhum leitor cadastrado na biblioteca '{$this->nomeBiblioteca}'.";
        }

        $lista = "\n Leitores da Biblioteca {$this->nomeBiblioteca} ---\n";
        foreach ($this->leitores as $leitor) {
            $lista .= "Nome: {$leitor->getNome()} | Email: {$leitor->getEmail()}\n";
        }
        $lista .= "\n";
        return $lista;
    }
}


echo "<h1>Sistema de Gerenciamento de Biblioteca</h1>";

// --- Cenário Exercício 2 e 4: Simulação de empréstimo e devolução ---
echo "<h2>Cenário: Empréstimos e Devoluções de Livros</h2>";
$livro1 = new Livro("Dom Quixote", 1605, "Miguel de Cervantes");
$livro2 = new Livro("1984", 1949, "George Orwell");

echo $livro1->estaDisponivel() . "\n";
echo $livro2->estaDisponivel() . "\n";

echo $livro1->emprestar("João Silva") . "\n";
echo $livro1->estaDisponivel() . "\n";
echo $livro1->quemPegou() . "\n";

echo $livro2->emprestar("Maria Oliveira") . "\n";
echo $livro2->estaDisponivel() . "\n";
echo $livro2->quemPegou() . "\n";

echo $livro1->devolver() . "\n";
echo $livro1->estaDisponivel() . "\n";
echo $livro1->quemPegou() . "\n";

echo $livro2->devolver() . "\n";
echo $livro2->estaDisponivel() . "\n";
echo $livro2->quemPegou() . "\n";

echo $livro1->emprestar("Ana Paula") . "\n";
echo $livro1->exibirInformacoes() . "\n"; // Exibe informações formatadas

echo $livro2->exibirInformacoes() . "\n"; // Exibe informações formatadas

// Cenário Exercício 3
echo "<h2>Cenário: Instanciar um Leitor</h2>";
$leitor1 = new Leitor("Carlos Lima", "carlos.lima@email.com", "(51) 98765-4321");
echo $leitor1->exibirLeitor() . "\n";

// Cenário Exercício 5
echo "<h2>Cenário: Gerenciamento da Biblioteca</h2>";
$minhaBiblioteca = new Biblioteca("Biblioteca Municipal");

// Adicionando livros
echo $minhaBiblioteca->adicionarLivro($livro1) . "\n";
echo $minhaBiblioteca->adicionarLivro($livro2) . "\n";
$livro3 = new Livro("O Pequeno Príncipe", 1943, "Antoine de Saint-Exupéry");
echo $minhaBiblioteca->adicionarLivro($livro3) . "\n";

// Adicionando leitores
echo $minhaBiblioteca->adicionarLeitor($leitor1) . "\n";
$leitor2 = new Leitor("Fernanda Costa", "fer.costa@email.com", "(51) 99123-4567");
echo $minhaBiblioteca->adicionarLeitor($leitor2) . "\n";

// Listando tudo
echo $minhaBiblioteca->listarLivros() . "\n";
echo $minhaBiblioteca->listarLeitores() . "\n";

// Simulação de empréstimo dentro da biblioteca
echo $livro3->emprestar($leitor2->getNome()) . "\n";
echo $minhaBiblioteca->listarLivros() . "\n"; 

?>