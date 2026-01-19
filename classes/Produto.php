<?php

class Produto{
    private $descricao;
    private $estoque;
    private $preco;
    private $fabricante;

    public function __construct($descricao, $estoque, $preco)
    {
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->preco = $preco;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }
//Grava
//Colocando o nome da classe na frente do objeto para que obrigatoriamente o objeto seja da classe
    public function setFabricante( Fabricante $fabricante) 
    {
        $this->fabricante = $fabricante;
    }
//Retorna
    public function getFabricante()
    {
        return $this->fabricante;
    }
}