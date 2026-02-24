<?php

class Pessoa
{
    private string $pronome;
// Bloco que está sendo definida a propriedade
    public string $nome {

        //Modificador do comportamento de leitura

        get {
            return $this->pronome . '' . $this->nome;
        }
        // Modificador do comportamento de gravação.
        set {
            if (strlen($value) === 0) {
                throw new Exception('Nome deve ter conteúdo');
            }
            $this->nome = $value;
        }
    }
    // Fim do bloco que está sendo definida a propriedade

    public function __construct(string $pronome, string $nome)
    {
        $this->pronome = $pronome;
        $this->nome = $nome;
    }
}

try {
    $p1 = new Pessoa('Sra', 'Maria');
    print $p1->nome;

    print "<br>\n";
    $p2 = new Pessoa('', '');
    print $p2->nome;
} catch (Exception $e) {
    print $e->getMessage();
}
