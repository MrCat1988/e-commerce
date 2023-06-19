<?php
    require_once "connection.php";
    class ProductsModel{
        // SHOW CATEGORIES
        static public function mdlShowCategories($table, $item, $value){
            if ($value != null){
                $statement = Connection::connect() -> prepare("SELECT * FROM $table WHERE $item = :$item ");
                $statement -> bindParam(":".$item, $value, PDO::PARAM_STR);
                $statement -> execute();
                if($statement -> execute()){
                    return $statement -> fetch();
                }else{
                    return $statement->errorInfo(); 
                }
            }else{
                $statement = Connection::connect() -> prepare("SELECT * FROM $table");
                $statement -> execute();
                if($statement -> execute()){
                    return $statement -> fetchAll();
                }else{
                    return $statement->errorInfo(); 
                }
            }
            $statement = "null";
        }
        // SHOW SUBCATEGORIES
        static public function mdlShowSubategory($table, $item, $value){
            $statement = Connection::connect() -> prepare("SELECT * FROM $table WHERE $item = :$item");
            $statement  -> bindParam(":".$item, $value, PDO::PARAM_STR);
            $statement -> execute();
            if($statement -> execute()){
                return $statement -> fetchAll();
            }else{
                return $statement->errorInfo(); 
            }
            $statement = "null";
        }
        // SHOW PRODUCTS
        static public function mdlShowProducts($table, $item, $value){
            if ($value != null){
                $statement = Connection::connect() -> prepare("SELECT * FROM $table WHERE $item = :$item ");
                $statement -> bindParam(":".$item, $value, PDO::PARAM_STR);
                $statement -> execute();
                if($statement -> execute()){
                    return $statement -> fetch();
                }else{
                    return $statement->errorInfo(); 
                }
            }else{
                $statement = Connection::connect() -> prepare("SELECT * FROM $table");
                $statement -> execute();
                if($statement -> execute()){
                    return $statement -> fetchAll();
                }else{
                    return $statement->errorInfo(); 
                }
            }
            $statement = "null";
        }
        // SHOW PRODUCT INFO
        static public function mdlShowProductInfo($table, $item, $value){
            $statement = Connection::connect() -> prepare("SELECT * FROM $table WHERE $item = :$item");
            $statement  -> bindParam(":".$item, $value, PDO::PARAM_STR);
            $statement -> execute();
            if($statement -> execute()){
                return $statement -> fetch();
            }else{
                return $statement->errorInfo(); 
            }
            $statement = "null";
        }
    }