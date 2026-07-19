<?php
require_once 'classes/ar/Produto.php';

try
{
    $conn = new PDO('sqlite:database/estoque.db');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    Produto::setConnection($conn);

    foreach (Produto::all() as $produto) {
        $produto->delete();
    }

    $produto = new Produto();
    $produto->descricao = 'Produto 1';
    $produto->estoque = 10;
    $produto->preco_custo = 5.00;
    $produto->preco_venda = 10.00;
    $produto->codigo_barras = '1234567890123';
    $produto->data_cadastro = date('Y-m-d');
    $produto->origem = 'Nacional';
    $produto->save();

}
catch (PDOException $e)
{
    print "Erro: " . $e->getMessage();
}