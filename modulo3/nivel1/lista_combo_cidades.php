<?php

function lista_combo_cidades()
{
    //cria conexão com o banco de dados
$conn = mysqli_connect('127.0.0.1','root', '','myapp');

$output = '';
$result = mysqli_query($conn, 'SELECT id, nome FROM cidade');

if($result)
    {
       while($row = mysqli_fetch_assoc($result))
        {
            $id = $row['id'];
            $nome = $row['nome'];
            $output .= "<option value={$id}> $nome </option>";
        }
    }

//fecha a conexão
mysqli_close($conn);
return $output;

}