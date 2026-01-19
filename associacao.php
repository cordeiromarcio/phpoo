<?php

//Importação de classes
require_once 'classes/Fabricante.php';
require_once 'classes/Produto.php';

//Criação de produto e fabricante
$p1 = new Produto('Chocolate', 10,7);
$f1 = new Fabricante('Fabrica de Chocolate', 'Rua Tal', '93');

//Associação de Produto e fabricante
$p1->setFabricante($f1);

//Encadeamento de chamada
$descricao = $p1->getDescricao();
$nomeFabr = $p1->getFabricante()->getNome();

//Acessar objeto

print "O fabricante do produto {$descricao} é {$nomeFabr}.";
/*
echo '<pre>';
var_dump($p1);
var_dump($f1);
echo '</pre>';
*/