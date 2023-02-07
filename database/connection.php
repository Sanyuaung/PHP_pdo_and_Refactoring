<?php
class Connection{

    // public function make($dbname){
    //     try{
    //         return $pdo=new PDO("mysql:host=localhost;dbname=$dbname","root","");
    //         }catch(PDOException $e){
    //         echo $e->getMessage();
    //         }
            
    // }
    public static function make(){
        try{
            return $pdo=new PDO("mysql:host=localhost;dbname=todo","root","");
            }catch(PDOException $e){
            echo $e->getMessage(); //error msg
            }
            
    }
}