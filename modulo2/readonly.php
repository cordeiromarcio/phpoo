<?php

/* 

//--------------------Exemplo 1 de aplicação do readonly---------------------------------------

class Usuario
{
    //função readonly define a propriedade somente como leitura
    private readonly int $id;
    private string $login;
    private string $nome;
    private string $email;

    public function __construct(string $id, string $login, string $nome, string $email)
    
    {
        $this->id = $id;
        $this->login = $login;
        $this->nome = $nome;
        $this->email = $email;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}

$x= new Usuario(1, 'pedro', 'Pedro', 'pedro@gmail.com');
echo '<pre>';
print_r($x);
echo '</pre>';
*/


//--------------------Exemplo 2 de readonly classe objeto de trasnporte de dados(apenas carrega dados)----------

class Endereco
{
    public readonly string $logradouro;
    public readonly string $numero;
    public readonly string $bairro;
    public readonly string $cep;

    public function __construct(string $logradouro, string $numero, string $bairro, string $cep)
    {
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->cep = $cep;
    }
    /*
// ----------Promoção da propriedade do construtor-----------------------------

public function __construct(public readonly string $logradouro, public readonly string $numero,
 public readonly string $bairro, public readonly string $cep)
*/

}
//Inicializa as propriedades mas não permite alteração.
$x = new Endereco('Rua Maria da Silva' , '1234', 'Centro', '12.456.789');
//$x->logradouro = 'X';
print $x->logradouro;