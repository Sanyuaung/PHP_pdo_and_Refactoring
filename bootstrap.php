<?php
require 'functions.php';
require 'database/connection.php';
require 'database/query.php';
// $dbname=new Connection();
// $query=new QueryBuilder(
//     $dbname->make("todo")
// );
$query=new QueryBuilder(
    Connection::make()
);