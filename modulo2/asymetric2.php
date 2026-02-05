<?php

class Cidade
{
    //Força o usuário a passar o atributo por método ou contrutor para gravação, ao contrário somente leitura
       
    public function __construct( public private(set) string $nome)
    {
    
    }       
}

class Pessoa
{
    public private(set) string $nome;
    public private(set) Cidade $cidade;

    public function __construct(string $nome, Cidade $cidade)
    {
        $this->nome = $nome;
        $this->cidade = $cidade;
    }
}

$c1 = new Cidade('Lajeado');
$p1 = new Pessoa('Maria', $c1);
print $p1->nome;
echo "<br>\n";
print $p1->cidade->nome;