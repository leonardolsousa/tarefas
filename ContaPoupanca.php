<?php
require_once("Conta.php");

class ContaPoupanca extends Conta{
    private $juros;

    public function setJuros($valor){
        $this->juros = $valor;
    }

    public function getJuros(){
        return $this->juros;
    }

    public function getSaldo(){
        return $this->saldo += ($this->saldo * (($this->juros/100)+1));
    }
}

?>