<?php

function dbConnection(){
    try{
    return $pdo=new PDO("mysql:host=localhost;dbname=todo","root","");
    }catch(PDOException $e){
    echo $e->getMessage(); //error msg
    }
}

function fetchTasks($pdo){
    $statement=$pdo->prepare("SELECT * FROM tasks");
    $statement->execute();
    return $tasks=$statement->fetchAll(PDO::FETCH_OBJ);
}