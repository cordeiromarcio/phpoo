<?php
$dados = $_POST;

//print $dados['nome'];
    //cria conexão com o banco de dados
$conn = mysqli_connect('127.0.0.1','root', '','myapp');

$result = mysqli_query($conn, 'SELECT max(id) as next FROM pessoa');

$row = mysqli_fetch_assoc($result);

$next = (int) $row['next'] + 1;

$sql = "INSERT INTO pessoa (id, nome, endereco, bairro, telefone, email, id_cidade) 
        VALUES ('{$next}',
                '{$dados['nome']}',
                '{$dados['endereco']}',
                '{$dados['bairro']}',
                '{$dados['telefone']}',
                '{$dados['email']}',
                '{$dados['id_cidade']}')";

$result = mysqli_query($conn , $sql);

if ($result)
    {
        print 'Registro inserido com sucesso';
    }
    else
        {
            print 'Erro';
        }

        mysqli_close($conn);