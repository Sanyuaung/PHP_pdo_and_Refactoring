<?php
require 'core/functions.php';
require 'core/database/connection.php';
require 'core/database/query.php';
require 'core/routers.php';
require 'core/request.php';
$config=require 'config.php';

// dd($config);
// $dbname=new Connection();
// $query=new QueryBuilder(
//     $dbname->make("todo")
// );
$query=new QueryBuilder(
    Connection::make($config['database'])
);