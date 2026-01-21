<?php

//Herança é definida pela palavra extends seguida da classe pai
class ContaPoupanca extends Conta
{
    public function retirar($quantia)
    {
        if ($this->saldo >= $quantia)
            {
                $this->saldo -= $quantia;
            }
            else
                {
                    return false;
                }
                return true;
    }
}