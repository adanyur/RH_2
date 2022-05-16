<?php

use Illuminate\Database\Capsule\Manager as DB;

$DB = new DB();

$DB->addConnection([
    'driver'=>'pgsql',
    'host'=>'localhost',
    'database'=>'recursos',
    'username'=>'postgres',
    'port'=>'5432',
     'password'=>'2009',
    // 'password'=>'',
    'charset'=>'utf8',
    'collation'=>'utf8_unicode_ci',
]);

$DB->setAsGlobal();
$DB->bootEloquent();
