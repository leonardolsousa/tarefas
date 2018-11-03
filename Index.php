<?php

require_once("Conta.php");
require_once("ContaCorrente.php");
require_once("ContaPoupanca.php");


function imprimir($conteudo){
    echo "<p>".$conteudo."</p>";
}

$conta = new Conta();
$conta->setCliente("Joao Paulo");
$conta->setNumero(111);
$conta->setSaldo(100.00);
imprimir("O nome do Cliente é : " . $conta->getCliente());
imprimir("O numero do Cliente é : " . $conta->getNumero());
imprimir("O saldo do Cliente é : " . $conta->getSaldo());
$conta->sacar(10);
$conta->depositar(20);
imprimir("O saldo atual da Conta é de : " . $conta->getSaldo());

$contacorrente = new ContaCorrente();
$contacorrente->setCliente("Joao Pedro");
$contacorrente->setNumero(222);
$contacorrente->setSaldo(1000.00);
imprimir("O nome do Cliente é : " . $contacorrente->getCliente());
imprimir("O numero do Cliente é : " . $contacorrente->getNumero());
imprimir("O saldo do Cliente é : " . $contacorrente->getSaldo());
$contacorrente->sacar(100);
$contacorrente->depositar(200);
imprimir("O saldo da Conta Corrente é de : " . $contacorrente->getSaldo());

$contapoupanca = new ContaPoupanca();
$contapoupanca->setCliente("Joao Lucas");
$contapoupanca->setNumero(333);
$contapoupanca->setSaldo(10000.00);
imprimir("O nome do Cliente é : " . $contapoupanca->getCliente());
imprimir("O numero do Cliente é : " . $contapoupanca->getNumero());
imprimir("O saldo do Cliente é : " . $contapoupanca->getSaldo());
$contapoupanca->sacar(1000);
$contapoupanca->depositar(2000);
imprimir("O saldo da Conta Poupança é de : " . $contapoupanca->getSaldo());

?>