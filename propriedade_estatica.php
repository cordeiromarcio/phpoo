<?php

class Software
{
    private $id;
    private $nome;
    // Criação do atributo estático
    static $contador;

    public function __construct($nome)
    {
        // Cada vez que entrar no construtor a variável estática vai somar e manter valor entre entre uma chamada e outra
        self::$contador ++;
        $this->id = self::$contador;
        $this->nome = $nome;
    }
}

$s1 = new Software('Gimp');
$s2 = new Software('Gnumeric');

echo '<pre>';
print_r($s1);
print_r($s2);
echo '</pre>';