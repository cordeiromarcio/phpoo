<?php

require_once 'classes/Record.php';

interface ExporterInterface
{
    public function export($data);
}

class JSONExporter implements ExporterInterface
{
    public static function export($data)
    {
        return json_encode($data);
    }
}

class Pessoa extends Record
{
    const TABLENAME = 'pessoas';

    // Vai garantir que o nome do campo seja o mesmo do atributo
    public function export (ExporterInterface $exporter)
    {
        return $exporter->export($this->data);
    }

}

$p = new Pessoa();
$p->nome = 'Joao';
$p->endereco = 'Rua das Flores';
$p->numero = 123;
print $p->export(new JSONExporter());