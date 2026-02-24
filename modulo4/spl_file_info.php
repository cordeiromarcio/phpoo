<?php

$file = new SplFileInfo('spl_file_info.php');
echo '<pre>';
print 'Nome: ' . $file->getFilename() . '<br>';
print 'Extensão: ' . $file->getExtension() . '<br>';
print 'Tamanho: ' . $file->getSize() . '<br>';
print 'Tipo: ' . $file->getType() . '<br>';
// Verifica se arquivo é gravável ou não (permissão)
print 'Gravável: ';
var_dump($file->isWritable());