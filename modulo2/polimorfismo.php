<?php

require_once 'classes/Conta.php';
require_once 'classes/ContaCorrente.php';
require_once 'classes/ContaPoupanca.php';

//Criação do polimorfismo
$contas = [];

$contas[] = new ContaCorrente(1234, 'CC.1234', 100,500);
$contas[] = new ContaPoupanca(5678, 'PP.4567', 100);

foreach ($contas as $conta)
    {
        if ($conta instanceof Conta)
            {
                print $conta->getInfo() . '<br>';
                print "--Saldo atual: {$conta->getSaldo()} <br>";
                $conta->depositar(200);
                print "--Depósito de 200 <br>";
                print "--Saldo atual: {$conta->getSaldo()} <br>";

                if ($conta-> retirar(700))
                    {
                        print "--Retirada de 700 (OK) <br>";
                    }
                    else
                        {
                            print "--Retirada de 700 (Não Permitida) <br>";
                        }
                        print "--Saldo atual: {$conta->getSaldo()} <br>";
            }
    }