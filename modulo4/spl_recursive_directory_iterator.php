<?php
$path = '/var/www/html/phpoo';

foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path, RecursiveDirectoryIterator::SKIP_DOTS)) as $item )
    {
        print (string) $item . '<br>';
    }