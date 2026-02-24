<?php

$xml = simplexml_load_file('paises3.xml');

print 'Nome: ' . $xml->nome . '<br>';
print 'Idioma: ' . $xml->idioma . '<br>';

//Acesso pela posição do vetor
//print $xml->estados->nome[0];

// Percorrer os elementos
foreach ($xml->estados->nome as $estado)
    {
        print 'Estado: ' . $estado . '<br>';
    }