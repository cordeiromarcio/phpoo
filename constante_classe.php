<?php

class Pessoa
{
    private $nome;
    private $genero;
    // Criação de constante dentro da classe
    const GENEROS = ['M' => 'Masculino', 'F' => 'Feminino'];

    public function __construct($nome, $genero)
    
    {
        $this->nome = $nome;
        $this->genero = $genero;
    }

    public function getNome()
    {
        return $this->nome;
    }

    // Função para exibir nome do gênero guardado em array
    public function getNomeGenero()
    {
        //self refere-se a mesma classe
        return self::GENEROS[$this->genero];
    }
}

$p1 = new Pessoa('Maria da Silva', 'F');
$p2 = new Pessoa('Carlos Pereira', 'M');

print $p1->getNome() .'<br>';
print $p1->getNomeGenero() .'<br>';
print $p2->getNome() .'<br>';
print $p2->getNomeGenero() .'<br>';


//print Pessoa::GENEROS['F'];