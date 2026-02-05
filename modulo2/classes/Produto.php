<?php

class Produto{
    private $descricao;
    private $estoque;
    private $preco;
    private $fabricante;
    private $caracteristicas = [];

    public function __construct($descricao, $estoque, $preco)
    {
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->preco = $preco;
    }

    public function addCaracteristica($nome, $valor)
    {
        $this->caracteristicas[] = new Caracteristica($nome, $valor);
    }

    public function getCaracteristicas()
    {
        return $this->caracteristicas;
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

    public function getPreco()
    {
        return $this->preco;
    }
}