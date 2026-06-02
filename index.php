<?php

$page = $_GET['page'] ?? 'home';

switch($page){

    case 'home':
        require_once __DIR__ . '/app/views/home.php';
        break;

    case 'login':
        require_once __DIR__ . '/app/views/login.php';
        break;

    case 'registro':
        require_once __DIR__ . '/app/views/registro.php';
        break;

    case 'dashboard':
        require_once __DIR__ . '/app/views/dashboard.php';
        break;

    default:
        echo "404 - Página no encontrada";
}
?>