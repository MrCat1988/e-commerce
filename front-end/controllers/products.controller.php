<?php
    class ProductsController{
        static public function ctrShowCategories($item, $value){
            $table = 'category';
            $response = ProductsModel::mdlShowCategories($table, $item, $value);
            return $response;
        }
        static public function ctrShowSubcategories($item, $value){
            $table = 'subcategory';
            $response = ProductsModel::mdlShowSubategory($table, $item, $value);
            return $response;
        }
    }