<?php
class Funcionario
{
    function setSalario() {}
    function getSalario() {}
    function setNome() {}
    function getNome() {}
}

// saber métodos que classe oferece
echo '<pre>';
print_r (get_class_methods('Funcionario'));
echo '</pre>';
