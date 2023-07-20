<?php
    require_once '../controllers/products.controller.php';
    require_once '../models/products.model.php';

    Class ProductsAjax{
        // ======== GET SUBCATEGORIES ======
        public $categoryId;
        public function ajaxGetSubcategories(){
            $item = 'category_idcategory';
            $value = $this->categoryId;
            $response = ProductsController::ctrShowSubcategories($item, $value);
            echo json_encode($response);
        }
        // ======== GET PRODUCTS ======
        public $categoryIdRequest;
        public $subcategoryIdRequest;
        public $limit;
        public $offset;
        public function ajaxGetProducts(){
            if ($this -> categoryIdRequest) {
                $item = 'category_idcategory';
                $value = $this -> categoryIdRequest;
            }else{
                $item = 'subcategory_idsubcategory';
                $value = $this -> subcategoryIdRequest;
            }
            $response = ProductsController::ctrShowProducts($item, $value, $this -> limit, $this -> offset);
            echo json_encode($response);
        }
         // GET PRODUCTS
         public $idProduct;
         public function ajaxGetProductInfo(){
            $item = 'idproduct';
            $value = $this->idProduct;
            $response = ProductsController::ctrProductInfo($item, $value);
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
    // GET PRODUCTS
    if(isset($_POST["categoryIdRequest"]) || isset($_POST["subcategoryIdRequest"])){
        $products = new ProductsAjax();
        $products -> categoryIdRequest = $_POST["categoryIdRequest"];
        $products -> subcategoryIdRequest = $_POST["subcategoryIdRequest"];
        $products -> limit = $_POST["limit"];
        $products -> offset = $_POST["offset"];
        $products -> ajaxGetProducts();
    }
    // GET PRODUCT INFO
    if(isset($_POST["idProduct"])){
        $idProduct = new ProductsAjax();
        $idProduct -> idProduct = $_POST["idProduct"]; 
        $idProduct -> ajaxGetProductInfo();
    }