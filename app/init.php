<?php

session_start();
// ob_start ile içeriğin görüntülenmeye hazır olana kadar sunucu tarafında arabellekte tutulması sağlanır.
ob_start();
date_default_timezone_set('Europe/Istanbul');

function loadClasses($className){
    require __DIR__ . '/classes/' . strtolower($className) . '.php';
}
spl_autoload_register('loadClasses');

$config = require __DIR__ . '/config.php';

try{
//     $db = new PDO('mysql:host=' . $config['db']['host'] . ';dbname='
//        . $config['db']['name'], $config['db']['user'], $config['db']['pass']);
    // BasicDB Entegrasyonu
    $db = new basicdb($config['db']['host'], $config['db']['name'], $config['db']['user'], $config['db']['pass']);
}catch(PDOException $e){
    die($e->getMessage());
}

require __DIR__ . '/settings.php';

foreach (glob(__DIR__ . '/helper/*.php') as $helperFile ){
    require $helperFile;
}

