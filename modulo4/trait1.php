<?php
require_once 'classes/Record.php';

class Produto extends Record {

const TABLENAME = 'produto ';

}

$produto = new Produto();
print $produto->load(10);
print "<br>";   
print $produto->delete(10);