<?php
    require_once "connection.php";
    class ProductsModel{
        static public function mdlShowCategories($table){
            $statement = Connection::connect() -> prepare("SELECT * FROM $table");
            $statement -> execute();
            if($statement -> execute()){
                return $statement -> fetchAll();
            }else{
                return $statement->errorInfo(); 
            }
            $statement = "null";
        }
        static public function mdlShowSubategory($table, $idCategory){
            $statement = Connection::connect() -> prepare("SELECT * FROM $table WHERE category_idcategory = :id_category");
            $statement -> bindParam(":id_category", $idCategory, PDO::PARAM_INT);
            $statement -> execute();
            if($statement -> execute()){
                return $statement -> fetchAll();
            }else{
                return $statement->errorInfo(); 
            }
            $statement = "null";
        }
    }