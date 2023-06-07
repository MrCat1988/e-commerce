<?php
    require_once '../controllers/products.controller.php';
    require_once '../models/products.model.php';

    Class ProductsAjax{
        // ======== GET CATEGORIES ======
        public function ajaxGetCategories(){
            $item = null;
            $value = null;
            $response = ProductsController::ctrShowCategories($item, $value);
            echo json_encode($response);
        }
        // ======== GET SUBCATEGORIES ======
        public $categoryId;
        public function ajaxGetSubcategories(){
            $item = 'category_idcategory';
            $value = $this->categoryId;
            $response = ProductsController::ctrShowSubcategories($item, $value);
            echo json_encode($response);
        }
    }
    // GET CATEGORIES

    // GET SUBCATEGORIES
    if(isset($_POST["categoryId"])){
        $id = new ProductsAjax();
        $id -> categoryId = $_POST["categoryId"]; 
        $id -> ajaxGetSubcategories();
    }