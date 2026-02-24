<?php

class Pessoa
{
    private string $nome;

    public function __construct(string $nome)
    {
        $this->setNome($nome);
    }
    
    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $value): void
    {
        if (strlen($value) ===0)
            {
                throw new Exception('Nome deve ter conteúdo');
            }
            $this->nome = $value;
    }
}

try
{
$p1 = new Pessoa('Maria');
print $p1->getNome();

print "<br>\n";
$p2 = new Pessoa('');
print $p2->getNome();

}
catch (Exception $e)
{
    print $e->getMessage();
}