<?php

require_once 'classes/tdg/Produto.php';
require_once 'classes/tdg/ProdutoGateway.php';

try
{
    $conn = new PDO('sqlite:database/estoque.db');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    ProdutoGateway::setConnection($conn);

    $produtos = Produto::all();
    foreach ($produtos as $produto) {
        $produto->delete();
    }

    $produto = new Produto;
    $produto-> descricao = 'Vinho';
    $produto-> estoque = 10;
    $produto-> preco_custo = 20;
    $produto-> preco_venda = 30;
    $produto->codigo_barras = '1234567890123';
    $produto->data_cadastro = date('Y-m-d H:i:s');
    $produto->origem = 'Nacional';
    $produto->save();

    $outro = Produto::find(1);
    print 'Descrição: ' . $outro->descricao . '<br>';
    print 'Descrição: ' . $outro->getMargemLucro() . '<br>';
    $outro->registraCompra(25, 5);
    $outro->save();

}

catch (Exception $e)
{
    print $e->getMessage();
}