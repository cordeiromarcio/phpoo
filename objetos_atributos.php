<?php

class Funcionario
{
    public $nome;
    public $salario;
    public $departamento;
}

$jose = new Funcionario;
$jose->nome = 'José da Silva';
$jose->salario = 2000;
$jose->departamento = 'Financeiro';

// Quais atributos públicos do objeto
echo '<pre>';
print_r( get_object_vars($jose));
echo '</pre>';