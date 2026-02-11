<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>
    <link rel="stylesheet" href="css/form.css" type="text/css" media="screen"/>
</head>
<body>

     
    <?php 
    // buscar os dados do BD com base no id
    if (!empty($_GET['id']))
        {
            //cria conexão com o banco de dados
            $conn = mysqli_connect('127.0.0.1','root', '1234','myapp');
            $id = (int) $_GET['id'];
            //Seleciona o id do registro a ser editado
            $result = mysqli_query($conn, "SELECT * FROM pessoa WHERE id='{$id}'");
            //retorna linha do resultado da busca
            $row = mysqli_fetch_assoc($result);

            //pega dados que retornaram da consulta
            $id = $row['id'];
            $nome = $row['nome'];
            $endereco = $row['endereco'];
            $bairro = $row['bairro'];
            $telefone = $row['telefone'];
            $email = $row['email'];
            $id_cidade = $row['id_cidade'];

            //print_r($row);
        }

    
    ?>

    <form enctype="multipart/form-data" method="post" action="pessoa_save_update.php">

        <label for="">Código</label>
        <input name="id" readonly="1" type="text" style="width: 30%" value="<?= $id?>">

        <label for="">Nome</label>
        <input name="nome" type="text" style="width: 50%" value="<?= $nome?>">

        <label for="">Endereço</label>
        <input name="endereco" type="text" style="width: 50%" value="<?= $endereco?>">

        <label for="">Bairro</label>
        <input name="bairro" type="text" style="width: 25%" value="<?= $bairro?>">

        <label for="">Telefone</label>
        <input name="telefone" type="text" style="width: 25%" value="<?= $telefone?>">

        <label for="">Email</label>
        <input name="email" type="text" style="width: 25%" value="<?= $email?>">

        <label for="">Cidade</label>
        <select name="id_cidade" style="width: 25%" value="<?= $id_cidade?>">
            <?php
            require_once 'lista_combo_cidades.php';
            print lista_combo_cidades();
            ?>
        </select>
        
        <input type="submit">

    </form>
    
</body>
</html>