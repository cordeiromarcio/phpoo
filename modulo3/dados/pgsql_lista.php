<?php
// conecta ao banco de dados postgree sql
$conn = pg_connect('host=localhost port=3306 dbname=phpoo user=root password=1234');
// seleciona tabela banco de dados
$query = 'SELECT codigo, nome FROM famosos';
//retorna resultado da consulta a tabela
$result = pg_query($conn, $query);

if ($result)
    {
        //retorna linhas do banco de dados 
        while ($row = pg_fetch_assoc($result))
            {
                print $row['codigo'] . ' - ' . $row['nome'] . '<br>';
            }
    }


pg_close($conn);