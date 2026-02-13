<?php

function lista_combo_cidades($id_cidade =null)
{
    //cria conexão com o banco de dados
$conn = mysqli_connect('127.0.0.1','root', '1234','myapp');

$output = '';
$result = mysqli_query($conn, 'SELECT id, nome FROM cidade');

if($result)
    {
       while($row = mysqli_fetch_assoc($result))
        {
            $id = $row['id'];
            $nome = $row['nome'];
            // Checar se há cidade selecionada no combobox
            $check = ($id == $id_cidade) ? 'selected=1' : '';
            $output .= "<option {$check} value='{$id}'> $nome </option>";
        }
    }

//fecha a conexão
mysqli_close($conn);
return $output;

}