<?php

class Funcionario
{
    public $nome;
    public $salario;
    public $departamento;
}

class Estagiario extends Funcionario
{
    public $bolsa;
}

$jose = new Funcionario;
$joao = new Estagiario;

//Retorna classe que pertence o objeto
print get_class($jose) . '<br>';
print get_class($joao) . '<br>';

//Retorna a classe pai do objeto ou da classe
print get_parent_class($joao) . '<br>';

//Retorna se objeto é filho da classe Funcionario
var_dump( is_subclass_of($joao,'Funcionario'));
// Retorna se classe é filha da classe Funcionario
var_dump( is_subclass_of('Estagiario','Funcionario'));