<?php

abstract class Record
{
    protected $data;

    public function __construct($id = NULL)
    {
        if ($id)
        {
            $object = $this->load($id);
            if ($object)
            {
                $this->fromArray($object->toArray());
            }
        }
    }

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
        $class = get_class($this);

        return constant("{$class}::TABLENAME");
    }

    public function load($id)
    {
        $sql = "SELECT * FROM {$this->getEntity()} WHERE id =" . (int) $id;

        if ($conn = Transaction::get())
            {
                Transaction::log($sql);
                $result = $conn->query($sql);

                if ($result)
                    {
                        return $result->fetchObject(get_class($this));
                    }
            }
            else
                {
                    throw new Exception('Não há transação ativa!!');
                }
    }

    public function store()
    {
        if ($conn = Transaction::get())
            {
                Transaction::log($sql);
                $result = $conn->query($sql);
            }
            else
                {
                    throw new Exception('Não há transação ativa!!');
                }
    }

    public function delete()
    {
        if ($conn = Transaction::get())
            {
                Transaction::log($sql);
                $result = $conn->query($sql);
            }
            else
                {
                    throw new Exception('Não há transação ativa!!');
                }
    
    }


    

}

class Produto extends Record
{
    const TABLENAME = 'produto';
}

Transaction::open('estoque');

$produto = new Produto(1);
print $produto->nome;

$produto = new Produto;
$produto->id = 1;
$produto->nome = 'Cafe';

$produto2 = clone $produto;

print $produto->nome;

if (isset($produto->nome));

