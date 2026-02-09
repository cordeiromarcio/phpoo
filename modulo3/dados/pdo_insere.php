<?php

//  Quando 

//conexão com banco de dados postgree SQL
$conn = new PDO('pgsql:dbname=myapp;user=root;password=;host=localhost');
// Comando de inserção
$conn->exec(" INSERT INTO famosos (codigo, nome) VALUES (8, 'Renato Russo')");

// Fecha conexão
$conn = null;