<?php
    require_once '../controllers/products.controller.php';
    require_once '../models/products.model.php';

    Class ProductsAjax{
        // ======== GET SUBCATEGORIES ======
        public $categoryId;
        public function ajaxGetSubcategories(){
            $valor = $this-> categoryId;
            $response = ProductsController::ctrShowSubcategories($valor);
            echo json_encode($response);
        }
    }
    // GET SUBCATEGORIES
    if(isset($_POST["categoryId"])){
        $id = new ProductsAjax();
        $id -> categoryId = $_POST["categoryId"]; 
        $id -> ajaxGetSubcategories();
    }