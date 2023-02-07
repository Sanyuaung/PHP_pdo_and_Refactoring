<?php

// connection
require 'functions.php';
$pdo=dbConnection();

//fetch tasks
$tasks=fetchTasks($pdo);
require 'index.view.php';