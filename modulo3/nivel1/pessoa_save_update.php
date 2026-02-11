<?php
$dados = $_POST;

if ($dados['id'])
    {
        //cria conexão com o banco de dados
        $conn = mysqli_connect('127.0.0.1','root', '1234','myapp');

        $sql = "UPDATE pessoa SET nome = '{$dados['nome']}',
                                  endereco = '{$dados['endereco']}',
                                  bairro = '{$dados['bairro']}',
                                  telefone = '{$dados['telefone']}',
                                  email = '{$dados['email']}',
                                  id_cidade = '{$dados['id_cidade']}'
                                  WHERE id = '{$dados['id']}'";
                                  
        $result = mysqli_query($conn, $sql);

        if ($result)
            {
                print 'registro atualizado com sucesso';
            }
            else
                {
                    print mysqli_error($conn);
                }
    }

        mysqli_close($conn);