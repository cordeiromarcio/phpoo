<?php

$dom = new DOMDocument('1.0', 'UTF-8');
$dom->formatOutput = true;

//criado raiz
$bases = $dom->createElement('bases');

//criado outro nod
$base = $dom->createElement('base');

// Criando nod filha
$bases->appendChild($base);

//atributo dentro da tag
$atr = $dom->createAttribute('id');
// definir valor do atributo
$atr->value= '1';
// colocar atributo dentro do mod
$base->appendChild($atr);

// Colocar nods filhos
$base->appendChild($dom->createElement('nome', 'teste'));
$base->appendChild($dom->createElement('host', '192.168.0.1'));
$base->appendChild($dom->createElement('type', 'mysql'));
$base->appendChild($dom->createElement('user', 'mary'));

// Exportar XML
print $dom->saveXML($bases);