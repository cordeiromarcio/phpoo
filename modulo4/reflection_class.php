<?php

require_once 'veiculo.php';

// Perguntar sobre a estrutura da classe Automovel, quais são os atributos e métodos públicos, privados e protegidos.
$rc = new ReflectionClass('Automovel');

echo '<pre>';
// Propriedades, métodos e classe pai da classe Automovel
print_r($rc->getProperties());
print_r($rc->getMethods());
print_r($rc->getParentClass());
echo '</pre>';