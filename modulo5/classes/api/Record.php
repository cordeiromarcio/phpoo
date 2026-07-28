<?php

abstract class Record
{
    protected $data;

    public function __set($prop, $value)
    {
        if ($value === null) {
            unset($this->data[$prop]);
        }
        else {
            $this->data[$prop] = $value;
        };
    }

    public function __get($prop)
    {
        if (isset($this->data[$prop]))
        {
            return $this->data[$prop];
        }
        
    }

    public function __isset($prop)
    {
        return isset($this->data[$prop]);
    }

    public function __clone()
    {
        unset($this->data['id']);
    }

    public function fromArray($data)
    {
        $this->data = $data;
    }

    public function toArray()
    {
        return $this->data;
    }

    public function getEntity()
    {
        return get_class($this);
    }
}

$produto = new Produto;

$produto = new Produto;
$produto->id = 1;
$produto->nome = 'Cafe';

$produto2 = clone $produto;

print $produto->nome;

if (isset($produto->nome));

