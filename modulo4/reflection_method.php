<?php

require_once 'veiculo.php';

$rm = new ReflectionMethod('Automovel', 'setPlaca');

print $rm->getName();
echo '<br>';
print $rm->isPrivate() ? ' é privado' : ' não é private';
echo '<br>';
print $rm->isStatic() ? ' é estatico' : ' não é estatico';
echo '<br>';
print $rm->isFinal() ? ' é final' : ' não é final';
echo '<br>';

print_r($rm->getParameters());