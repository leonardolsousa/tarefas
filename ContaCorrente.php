<?php
require_once("Conta.php");

class ContaCorrente extends Conta{
    
    private $creditopessoal;

    public function setCreditoPessoal($valor){
        $this->creditopessoal = $valor;
    }

    public function getCreditoPessoal(){
        return $this->creditopessoal;
    }

    public function getSaldo(){
        return $this->saldo += ($this->saldo * (($this->creditopessoal/100)+1));
    }
}

?>