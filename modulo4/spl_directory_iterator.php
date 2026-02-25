<?php

foreach (new DirectoryIterator('/var/www/html/phpoo/modulo4') as $file )
    {
        print (string) $file . '<br>';
        print 'Nome: ' . $file->getFilename() . '<br>';
        print 'Extensão: ' . $file->getExtension() . '<br>';
        print 'Tamanho: ' . $file->getSize() . '<br>';
        print '<br><br>';
    }