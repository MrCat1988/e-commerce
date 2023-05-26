<?php
    require_once "connection.php";

    class ModelTemplate{
        static public function mdlTemplateStyle($table){
            $statement = Connection::connect() -> prepare("SELECT * FROM $table");
            $statement -> execute();
            if($statement -> execute()){
                return $statement -> fetch();
            }else{
                return $statement->errorInfo(); 
            }
            $statement = "null";
        }
    }