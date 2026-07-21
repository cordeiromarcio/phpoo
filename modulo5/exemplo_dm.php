<?php

require_once 'classes/dm/Produto.php';
require_once 'classes/dm/Venda.php';
require_once 'classes/dm/VendaMapper.php';

try
{
    $p1 = new Produto();
    $p1->id = 1;
    $p1->preco = 12;

    $p2 = new Produto();
    $p2->id = 2;
    $p2->preco = 14;

    $venda = new Venda();
    $venda->addItem(12, $p1);
    $venda->addItem(20, $p2);

    $conn = new PDO('sqlite:database/estoque.db');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    VendaMapper::setConnection($conn);

    VendaMapper::save($venda);
}
catch (PDOException $e)
{
    print "Erro: " . $e->getMessage();
}

/*-------
CREATE TABLE venda (id integer PRIMARY KEY NOT NULL, data_venda date);

CREATE TABLE item_venda (id integer PRIMARY KEY NOT NULL, id_produto integer references produto(id), id_venda integer references venda(id),quantidade float, preco float);