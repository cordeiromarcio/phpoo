<?php
$dados = $_GET;

if ($dados['id'])
    {
        //cria conexão com o banco de dados
        $conn = mysqli_connect('127.0.0.1','root', '1234','myapp');

        $id = (int) $dados['id'];

        $sql = "DELETE FROM pessoa WHERE id= '{$id}'";
                                  
        $result = mysqli_query($conn, $sql);

        if ($result)
            {
                print 'registro excluído com sucesso';
            }
            else
                {
                    print mysqli_error($conn);
                }
    }

        mysqli_close($conn);