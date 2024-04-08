<?php

defined('BASEPATH') or exit('Akses langsung tidak diizinkan!');

$req_uri = explode("?", $_SERVER['REQUEST_URI'])[0];

$rute_ditemukan = false;

foreach ($routes as $route) {
    if ($req_uri === $route[0]) {

        if (file_exists("./module/$route[1]")) {
            include_once "./module/$route[1]";
        } else {
            die("Modul $route[1] tidak ditemukan!");
        }
        $rute_ditemukan = true;
        break;
    }
}

if (!$rute_ditemukan) {
    die("Halaman '$req_uri' tidak ditemukan!");
}
