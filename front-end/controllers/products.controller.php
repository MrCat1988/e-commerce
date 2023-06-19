<?php
    class ProductsController{
        // SHOW CATEGORIES
        static public function ctrShowCategories($item, $value){
            $table = 'category';
            $response = ProductsModel::mdlShowCategories($table, $item, $value);
            return $response;
        }
        // SHOW SUBCATEGORIES
        static public function ctrShowSubcategories($item, $value){
            $table = 'subcategory';
            $response = ProductsModel::mdlShowSubategory($table, $item, $value);
            return $response;
        }
        // SHOW PRODUCTS
        static public function ctrShowProducts($item, $value){
            $table = 'products';
            $response = ProductsModel::mdlShowProducts($table, $item, $value);
            return $response;
        }
        // SHOW PRODUCTS INFO
        static public function ctrProductInfo($item, $value){
            $table = 'products';
            $response = ProductsModel::mdlShowProductInfo($table, $item, $value);
            return $response;
        }

    }