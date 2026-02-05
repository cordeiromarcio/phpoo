<?php

class Cidade
{
    //Força o usuário a passar o atributo por método ou contrutor para gravação, ao contrário somente leitura
       
    public function __construct( public private(set) string $nome)
    {
    
    }       
}

$c1 = new Cidade('Lajeado');
print $c1->nome;
echo "<br>\n";
$c1->nome = 'Teste';