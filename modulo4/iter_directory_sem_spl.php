<?php

$dir = opendir('/var/www/html/phpoo/modulo4');

while ($arquivo = readdir($dir))
    {
        print $arquivo . '<br>';
    }
    closedir($dir);