<?php

require_once 'classes/Record.php';

class Produto extends Record {

const TABLENAME = 'produto ';
// importação do trait
use ObjectConversionTrait;

}
/*
 Nesse caso o trait é definido depois da classe, mas poderia ser definido antes, 
 ou mesmo em um arquivo separado, e importado com require_once, como fazemos com as classes.
 O importante é que o trait seja definido antes de ser utilizado pela classe.

*/
trait ObjectConversionTrait {

    public function toXML() {
        $xml = new SimpleXMLElement('<' . get_class($this) . '/>');
        foreach ($this->data as $key => $value) {
            $xml->addChild($key, $value);
    }
        return $xml->asXML();
    }

    public function toJson() {
        return json_encode($this->data);
    }

}

$produto = new Produto();
$produto->nome = 'Notebook';
$produto->preco = 2500;
$produto->estoque = 10;
print $produto->toXML();
print "<br>";
print $produto->toJson();