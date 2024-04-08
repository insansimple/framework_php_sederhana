<?php

defined('BASEPATH') or exit('Akses langsung tidak diizinkan!');

$routes = [];

function add_route($path, $module)
{
    $GLOBALS['routes'][] = [$path, $module];
}

//Add your router here
add_route('/', 'default.php');
add_route('/home', 'home.php');
