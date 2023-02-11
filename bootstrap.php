<?php
require 'functions.php';
require 'database/connection.php';
require 'database/query.php';
$config=require 'config.php';
// dd($config);
// $dbname=new Connection();
// $query=new QueryBuilder(
//     $dbname->make("todo")
// );
$query=new QueryBuilder(
    Connection::make($config['database'])
);