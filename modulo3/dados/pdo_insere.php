<?php
//Utilizando bloco try catch

try
{
//conexão com banco de dados postgree SQL
//$conn = new PDO('pgsql:dbname=myapp;user=root;password=;host=localhost');

//COnexão com banco de dados mysql
$conn = new PDO('mysql:host=127.0.0.1; port=3306; dbname=myapp', 'root', '');


//Informa ao PDO como o erro deve tratado pela biblioteca
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Comando de inserção
$conn->exec(" INSERT INTO famosos (codigo, nome) VALUES (8, 'Renato Russo')");

// Fecha conexão
$conn = null;
}
catch (PDOException $e)
{
    print $e->getMessage();
}