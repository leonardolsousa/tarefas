<?php

class Conta{

    private $cliente;
    private $numero;
    protected $saldo;
    
    public function setCliente($valor){
        $this->cliente = $valor;
    }

    public function getCliente(){
        return $this->cliente;
    }

    public function setNumero($valor){
        $this->numero = $valor;
    }

    public function getNumero(){
        return $this->numero;
    }

    public function setSaldo($valor){
        $this->saldo = $valor;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function sacar($valor){
        $this->saldo -= $valor;
    }

    public function depositar($valor){
        $this->saldo += $valor;
    }

}

?>