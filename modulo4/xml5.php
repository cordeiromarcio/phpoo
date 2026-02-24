<?php

$xml = simplexml_load_file('paises2.xml');

//Edição 
$xml->moeda = 'NovoReal (NR$)';
$xml->geografia->clima = 'temperado';

// Adição de informação
$xml->addChild('presidente', 'Chapolin Colorado');

//gera a alteração
echo $xml->asXML();

//Modifica o arquivo original
file_put_contents('paises2.xml', $xml->asXML());

