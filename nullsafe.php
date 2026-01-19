<?php
declare(strict_types=1);

class Estado
{
    private string $nome;
    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    public function getNome():string
    {
        return $this->nome;
    }
  }

  class Cidade
  {
    private string $nome;
    //o ? permite que Estado pode ser nulo
    private ?Estado $estado;

    public function __construct(string $nome, Estado $estado = null)
    {
        $this->nome = $nome;
        $this->estado = $estado;
    }

    public function getEstado()
    {
        return $this->estado;
    }
  }
/*
Funcionalidade tradicional onde tem os 2 argumentos necessários

  $sp = new Estado('SP');
  $cidade = new Cidade('Mirassol', $sp);
  print $cidade->getEstado()->getNome();
  */

  // Nessa situação onde cidade sem estado exemplo de aplicação(falta argumento) utilização do operador nullsafe
  $cidade = new Cidade('Mirassol');

  //Coloca o ? após o método oned somente vai seguir o encadeamento se tiver valor não nulo
  print $cidade->getEstado()?->getNome();

  // Situação em que eventualmente pode estar incompleta a base de dados
  /*
  $pessoa->getCidade()?->getEstado()?->getPais()?-getNome();
  */