<?php

require_once 'classes/ar/ProdutoComTransacaoELog.php';
require_once 'classes/api/Connection.php';
require_once 'classes/api/Transaction.php';
require_once 'classes/api/Logger.php';
require_once 'classes/api/LoggerTXT.php';

try
{
    Transaction::open('estoque');
    Transaction::setLogger(new LoggerTXT('log.txt'));

    $produto = new Produto();
    $produto->descricao = 'Chocolate Branco';
    $produto->estoque = 70;
    $produto->preco_custo = 3;
    $produto->preco_venda = 5;
    $produto->codigo_barras = '1234567890123';
    $produto->data_cadastro = date('Y-m-d');
    $produto->origem = 'N';
    $produto->save();

    Transaction::close();
}

catch (Exception $e)
{
    print $e->getMessage();
    Transaction::rollback();
}