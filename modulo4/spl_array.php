<?php

$dados = ['salmão', 'atum', 'tilápia', 'bacalhau', 'sardinha', 'camarão', 'lagosta', 'caranguejo'];

$objarray = new ArrayObject($dados);

// Adicionar elementos ao final do array
$objarray->append('polvo');

// Verificar o que existe no array 2
print $objarray->offsetGet(2) . "<br>"; // tilápia

// Alterar o valor do índice 3
$objarray->offsetSet(3, 'bacalhau fresco');

// Eliminar o elemento do índice 5
$objarray->offsetUnset(5);

// Exibir quantidade de elementos do array
print 'Quantidade de elementos: ' . $objarray->count() . "<br>";

// Testar se o índice 3 existe
if ($objarray->offsetExists(3)) {
    print 'O índice 3 existe no array.<br>';
} else {
    print 'O índice 3 não existe no array.<br>';
}

// Ordenar o array por ordem natural dos valores
$objarray->natsort();

foreach ($objarray as $item) {
    print 'Ítem: ' . $item . "<br>";
}

// Serializar o array
print$objarray->serialize();