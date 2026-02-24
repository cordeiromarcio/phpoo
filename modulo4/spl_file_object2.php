<?php

$file = new SplFileObject('arquivo.txt');

// Repete enquanto não for final do arquivo
while (!$file->eof())
    {
      
        // Exibe linha do arquivo
        print 'linha: ' . $file->fgets() . "<br>";
    }

    // percorre arquivo de forma mais simples
    foreach ($file as $linha => $conteudo)
        {
            print "$linha: $conteudo <br>";
        }