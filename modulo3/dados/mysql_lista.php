<?php
//cria conexão com o banco de dados
$conn = mysqli_connect('127.0.0.1','root', '','myapp');

$query = 'SELECT codigo, nome FROM famosos';

$result = mysqli_query($conn,$query);

if($result)
    {
       while($row = mysqli_fetch_assoc($result))
        {
            echo $row['codigo'] . ' - ' . $row['nome'] .'<br>';
        }
    }

//fecha a conexão
mysqli_close($conn);