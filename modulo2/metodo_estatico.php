<?php

class Software
{
    private $id;
    private $nome;
    // Criação do atributo estático
    private static $contador;

    public function __construct($nome)
    {
        // Cada vez que entrar no construtor a variável estática vai somar e manter valor entre entre uma chamada e outra
        self::$contador ++;
        $this->id = self::$contador;
        $this->nome = $nome;
    }
    // Método estático é um método que não precisa de objeto para existir, a restrição do método estático é que dentro dele não pode usar a palavra this porque qunado é chamado não está se referindo a um objeto.
    public static function getContador()
    {
        return self::$contador;
    }
}

$s1 = new Software('Gimp');
$s2 = new Software('Gnumeric');

echo '<pre>';
print_r($s1);
print_r($s2);
var_dump(Software::getContador());
echo '</pre>';