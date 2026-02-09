<?php
//Utilizando bloco try catch

try
{
//conexão com banco de dados postgree SQL
$conn = new PDO('pgsql:dbname=myapp;user=root;password=;host=localhost');

//Informa ao PDO como o erro deve tratado pela biblioteca
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Listar 
$result = $conn->query("SELECT codigo, nome FROM famosos");

if ($result)
    {
        foreach ($result as $row)
            {
                print $row['codigo'] . ' - ' . $row['nome'] . '<br>';
            }
    }

// Fecha conexão
$conn = null;
}
catch (PDOException $e)
{
    print $e->getMessage();
}