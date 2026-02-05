<?php

function apresenta($nome)
{
    print "Olá $nome";
}

$funcao = 'apresenta';

//Queira executar função em algum formulário ou banco de dados

call_user_func($funcao, 'Marcio Cordeiro');

echo '<br>';
//Utilização numa estrutura orientada a objetos

class Pessoa
{
    public static function apresenta($nome)
    {
        print "Olá $nome";
    }
}
//Quando tem cadastrado nome da classe de uma variável que nao tem controle
$classe = 'Pessoa';
$metodo = 'apresenta';

call_user_func([$classe, $metodo], 'Cordeiro');
echo '<br>';

//Passar objeto

$obj = new Pessoa;
call_user_func([$obj, $metodo], "Marcinho");