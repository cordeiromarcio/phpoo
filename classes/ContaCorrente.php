<?php

class ContaCorrente extends Conta
{
    protected $limite;

    public function __construct($agencia, $conta, $saldo, $limite)
    {
        parent::__construct($agencia, $conta, $saldo);
        $this->limite = $limite;
    }

    //final de linha, não pode ser mais redefinido em classes filhas
    public final function retirar($quantia)
    {
        if (($this->saldo + $this->limite) >= $quantia)
            {
                $this->saldo -= $quantia;
            }
            else{
                return false;
            }
            return true;
    }
}