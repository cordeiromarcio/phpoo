<?php
require_once 'classes/Cesta.php';
require_once 'classes/Produto.php';
// Caso desse unset nesta cesta, os produtos continuam existindo pois foram criadas fora da classe cesta
$c1 = new Cesta;

//Produtos criados fora da classe Cesta
$p1 = new Produto('Chocolate', 10, 5);
$p2 = new Produto('Café', 100, 7);
$p3 = new Produto('Mostarda', 50, 3);

$c1-> addItem($p1);
$c1-> addItem($p2);
$c1-> addItem($p3);
/*
echo '<pre>';
print_r($c1);
echo '</pre>';
*/

// Outra forma de exibir a lista de itens na cesta é percorrendo array de ítens na cesta

foreach ($c1->getItens() as $item)
    {
        print "Item: {$item->getDescricao()} <br>";
    }