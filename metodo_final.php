<?php
require_once 'classes/Conta.php';
require_once 'classes/ContaCorrente.php';

class ContaCorrenteEspecial extends ContaCorrente
{
    //Exemplo do que não é permitido com a utilização do método final declarado na classe ContaCorrente
    public function retirar($quantia)
    {
        $this->saldo -= $quantia;
    }
}