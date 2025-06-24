<?php
class ContaBancaria {
    private $titular;
    private $saldo;

    public function __construct($titular, $saldoInicial) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    public function sacar($valor) {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "Saque de R$ {$valor} realizado.<br>";
        } else {
            echo "Valor inválido para saque.<br>";
        }
    }

    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo "Depósito de R$ {$valor} realizado.<br>";
        } else {
            echo "Valor inválido para depósito.<br>";
        }
    }

    public function getTitular() {
        return $this->titular;
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

$conta = new ContaBancaria("Maria", 500);
echo "Titular: " . $conta->getTitular() . "<br>";
echo "Saldo inicial: R$ " . $conta->getSaldo() . "<br>";

$conta->depositar(200);
$conta->sacar(100);
echo "Saldo atual: R$ " . $conta->getSaldo() . "<br>";
?>
