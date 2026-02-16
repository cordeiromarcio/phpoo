<?php

//Função que registra método de carregamento de módulos
spl_autoload_register( function($class){
    if (file_exists($class . '.php')){
        require_once $class . '.php';
    }
});

$classe = $_REQUEST['class'];
$metodo = isset($_REQUEST['method']) ? $_REQUEST['method'] : null;

if (class_exists($classe)) {
    $pagina = new $classe($_REQUEST);
    if (!empty($metodo) and method_exists($classe, $metodo)) {
        $pagina->$metodo($_REQUEST);
    }
    $pagina->show();
}
