<?php

class Pessoa
{
    private $nome;
    private $endereco;
    private $nascimento;

    public function __construct($nome,$endereco)
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
    }
    
    public function setNascimento($nascimento)
    {
        //Quebrar data em 3 partes
        $partes = explode('-', $nascimento);
        if(count($partes)== 3)
            {
                //função checkdate para validação de data recebendo 3 parâmetros
                if (checkdate($partes[1], $partes[2], $partes[0]))
                    {
                        $this->nascimento = $nascimento;
                        return true;
                    }
                    return false;
            }
                    return false;
            }
    }

    $p1 = new Pessoa('Maria da Silva', 'Rua Bento Gonçalves');
    $ok1 = $p1->setNascimento('01 de Maio de 1994');
    $ok2 = $p1->setNascimento('1990-05-01');

    echo '<pre>';
    var_dump($ok1);
    var_dump($ok2);
    var_dump($p1);
    echo '</pre>';
