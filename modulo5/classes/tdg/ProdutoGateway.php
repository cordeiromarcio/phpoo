<?php

class ProdutoGateway
{

    public static function setConnection(PDO $conn)
    {
        self::$conn = $conn;
    }

    public function find($id, $class = 'stdClass')
    {
        $sql = "SELECT * FROM produto WHERE  id = '$id'";
        print " $sql <br> ";
        $result = self::$conn->query($sql);
        return $result->fetchObject($class);
    }

    public function all($filter, $class = 'stdClass')
    {

    }

    public function delete($id)
    {

    }

    public function save($data)
    {

    }

    public function getLastId()
    {

    }


}