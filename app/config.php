<?php

define ('PATH', realpath('.'));
define('SUBFOLDER', true);
//define('URL', 'http://localhost/site');
define('URL','http://'. $_SERVER['HTTP_HOST']. '/site');

return [
    'db' => [
        'name' => 'sezi',
        'host' => 'localhost',
        'user' => 'root',
        'pass' => 'root'
    ]
];