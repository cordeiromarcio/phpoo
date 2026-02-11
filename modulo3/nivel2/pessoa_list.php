<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Pessoas</title>
    <link rel="stylesheet" href="css/list.css" type="text/css" media="screen"/>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <td></td>
                <td></td>
                <td>Id</td>
                <td>Nome</td>
                <td>Endereço</td>
                <td>Bairro</td>
                <td>Telefone</td>
            </tr>
        </thead>
        <tbody>
            <?php
                //cria conexão com o banco de dados
                $conn = mysqli_connect('127.0.0.1','root', '1234','myapp');
                
                //Função da exclusão do registro
                if (!empty($_GET['action']) and ($_GET['action'] == 'delete'))
                    {
                        $id = (int) $_GET['id'];
                        mysqli_query($conn, "DELETE FROM pessoa WHERE id = '{$id}'");
                    }

                    $result = mysqli_query($conn, 'SELECT * from pessoa ORDER BY id');

                while ($row = mysqli_fetch_assoc($result))
                    {
                        $id = $row['id'];
                        $nome = $row['nome'];
                        $endereco = $row['endereco'];
                        $bairro = $row['bairro'];
                        $telefone = $row['telefone'];
                        $email = $row['email'];
                        $id_cidade = $row['id_cidade'];

                        print '<tr>';
                        
                        //alteração de melhoria delete-list insert-edit
                        /*------------------------Como era no nível 1----------------------
                        print "<td> <a href= 'pessoa_form_edit.php?id={$id}'>
                                    <img src='images/edit.svg' style='width:17px'>
                                    </a> </td>";

                       
                        print "<td> <a href= 'pessoa_delete.php?id={$id}'>
                                    <img src='images/delete.svg' style='width:17px'>
                                    </a> </td>";
                        
                        -----------------------------------------------------------------*/
                        print "<td> <a href= 'pessoa_form.php?action=edit&id={$id}'>
                                    <img src='images/edit.svg' style='width:17px'>
                                    </a> </td>";

                        print "<td> <a href= 'pessoa_list.php?action=delete&id={$id}'>
                                    <img src='images/delete.svg' style='width:17px'>
                                    </a> </td>";

                        print "<td> {$id} </td>";
                        print "<td> {$nome} </td>";
                        print "<td> {$endereco} </td>";
                        print "<td> {$bairro} </td>";
                        print "<td> {$telefone} </td>";
                        print '</tr>';
                    }
            ?>
        </tbody>


    </table>
    <!-- Como era nível 1-------------------------------------------
    <button onclick="window.location= 'pessoa_form_insert.php'">
        <img src="images/insert.svg" style="width: 17px">Inserir
    </button>
    --------------------------------------------------------------- -->
    <button onclick="window.location= 'pessoa_form.php'">
        <img src="images/insert.svg" style="width: 17px">Inserir
    </button>
</body>
</html>