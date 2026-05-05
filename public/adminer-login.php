<?php
session_start();

// Pré-remplissage automatique
$_POST['auth'] = [
    'driver' => 'server',
    'server' => getenv('DB_HOST'),
    'username' => getenv('DB_USER'),
    'password' => getenv('DB_PASS'),
    'db' => getenv('DB_NAME'),
];

// Redirige vers adminer
include 'adminer.php';