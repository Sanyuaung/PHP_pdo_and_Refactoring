<?php
class Connection{

    // public function make($dbname){
    //     try{
    //         return $pdo=new PDO("mysql:host=localhost;dbname=$dbname","root","");
    //         }catch(PDOException $e){
    //         echo $e->getMessage();
    //         }
            
    // }
    public static function make($config){
        try{
            return $pdo=new PDO(
                "{$config['host']};dbname={$config['dbname']}",
                "{$config['username']}","{$config['password'] }");
            }catch(PDOException $e){
            echo $e->getMessage(); //error msg
            }
            
    }
}