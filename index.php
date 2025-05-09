<?php
// session_start();

include 'core/config.php';

// realizamos la carga dinamica de los cores
spl_autoload_register(function($class){
    if (file_exists("core/".$class.".php")) {
        require_once 'core/'.$class.'.php';
    }
});

include 'controller/autoload.php';

$url = isset($_GET['view']) ? $_GET['view'] : 'dashboard';

$view = new Autoload();
$view->vista($url);

?>