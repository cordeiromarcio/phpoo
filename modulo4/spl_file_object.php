<?php

$file = new SplFileObject('spl_file_object.php');
echo '<pre>';
print 'Nome: ' . $file->getFilename() . '<br>';
print 'Extensão: ' . $file->getExtension() . '<br>';

$file2 = new SplFileObject('novo.txt', 'w');
$bytes = $file2->fwrite('Olá Mundo PHP');

print 'Bytes: ' .  $bytes;