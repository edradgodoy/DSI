<?php

    class Autoload
    {
        // metodos o funciones de los objetos C-R-U-D
        public function vista($url)
        {
            $permitidos = ['dashboard', 'login', 'Clientes'];

            // GitHub

            $page = (!in_array($url, $permitidos)) ? 'Error 404' : $url;

            // if (!isset($_SESSION['user'])) {
            if ($url == 'login') {
                include 'views/login/widget-default.php';
            } else {
                include 'views/header/widget-default.php';
                include 'views/'.$page.'/widget-default.php';
                include 'views/footer/widget-default.php';
            }
        }
    }

?>