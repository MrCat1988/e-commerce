<?php
    class ProductsController{
        static public function ctrShowCategories(){
            $table = 'category';
            $response = ProductsModel::mdlShowCategories($table);
            return $response;
        }
        static public function ctrShowSubcategories($idCategory){
            $table = 'subcategory';
            $response = ProductsModel::mdlShowSubategory($table, $idCategory);
            return $response;
        }
    }