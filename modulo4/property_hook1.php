<?php

class Pessoa
{
    public string $nome {
        // Modificador do comportamento de gravação.
        set {
            if (strlen($value) === 0) {
                throw new Exception('Nome deve ter conteúdo');
            }
            $this->nome = $value;
        }
    }

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }
}

try {
    $p1 = new Pessoa('Maria');
    print $p1->nome;

    print "<br>\n";
    $p2 = new Pessoa('');
    print $p2->nome;
} catch (Exception $e) {
    print $e->getMessage();
}
