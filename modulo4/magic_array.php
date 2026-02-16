<?php
class Titulo
{
    private $data;
    //intercepta leitura
    public function __set($propriedade, $valor)
    {
        $this->data[$propriedade] = $valor;
    }
    //intercepta gravação
    public function __get($propriedade)
    {
        return $this->data[$propriedade];
    }
    //intercepta se propriedade tem ou não valor
    public function __isset($propriedade)
    {
        return isset($this->data[$propriedade]);
    }
    // intercepta propriedade a ser eliminada
    public function __unset($propriedade)
    {
        unset($this->data[$propriedade]);
    }
}

$tit = new Titulo;
$tit->valor = 100;
$tit->nome = 'teste';

if (isset($tit->valor))
{
    print "Tem valor";
}

unset($tit->valor);

echo '<pre>';
var_dump($tit);