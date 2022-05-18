<?php
class db{
protected $connection;

function setconnection(){
    try{
        $this->connection=new PDO("mysql:host=localhost; dbname=nk","root","Root@123");
        // echo "Done";
    }catch(PDOException $e){
        echo "Error kadu";
        //die();

    }
}

}
