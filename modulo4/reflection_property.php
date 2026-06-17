<?php

require_once 'veiculo.php';

$rp = new ReflectionProperty('Automovel', 'placa');

print $rp->getName();
echo '<br>';
print $rp->isPrivate() ? ' é privado' : ' não é private';
echo '<br>';