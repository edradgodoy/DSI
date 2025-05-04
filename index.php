<?php
// session_start();

include 'controller/autoload.php';

$url = isset($_GET['view']) ? $_GET['view'] : 'dashboard';

$view = new Autoload();
$view->vista($url);

?>