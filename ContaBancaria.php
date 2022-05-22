<?php

//Comando para checagem de tipos estrita, para força checagem do tipo de dados

declare(strict_types=1);

// Classe do objeto: ou seja o nome do objeto
class ContaBancaria
{
    // Propriedades do objeto, o que vai conter neste objeto
    
    /**
     * @var string
     */
    private $banco;

    /**
     * @var string
     */
    private $nomeTitular;

    /**
     * @var string
     */
    private $numeroAgencia;

    /**
     * @var string
     */
    private $numeroConta;

    /**
     * @var float
     */
    private $saldo;

//Método: o que este objeto pode fazer
//1o Método deste objeto
    public function __construct(
        string $banco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldo
    ){
    $this->banco = $banco;
    $this->nomeTitular = $nomeTitular;
    $this->numeroAgencia = $numeroAgencia;
    $this->numeroConta = $numeroConta;
    $this->saldo = $saldo;
    }

    //2o Método deste objet, Obter Saldo
    public function obterSaldo()
    {
        return 'Seu saldo da conta é: R$ ' . $this->saldo;
    }

    //3o Método: depositar na conta
    public function depositar($valor)
    {
        $this->saldo += $valor;
        return 'Depósito de R$ ' . $valor . 'realizado!';
    }

    //4o Método: sacar da conta
    public function sacar($valor)
    {
        $this->saldo -= $valor;
        return 'Saque de R$ ' . $valor . 'realizado!';
    }

}
//Instancia Conta Bancaria, esse comando inicia a instancia
$conta = new ContaBancaria(
    'Banco do Brasil',
    'Gustavo Fraga',
    '8244',
    '57354-1',
    0.00
);

//Formas de printar o conteudo do objeto $conta
var_dump ($conta);

/**
echo $conta->obterSaldo();

echo "<br>";

echo $conta->depositar(300.00);

echo "<br>";

echo $conta->obterSaldo();

echo "<br>";

echo $conta->sacar(150.00);

echo "<br>";

echo $conta->obterSaldo(); */