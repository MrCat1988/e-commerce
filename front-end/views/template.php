<?php
        $template = TemplateController::ctrTemplateStyle();
        $route = Route::ctrRoute();
        $serverRoute = Route::ctrServerRoute();
        // $route -> ctrRoute();  
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descripción provisional">
    <meta name="keywords" content="store, mini store, e-commerce, tienda">
    <title>E-commerce</title>
    <!-- ICON -->
    <link rel="icon" href="<?php echo $serverRoute; ?><?php echo $template["icon"]; ?>">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <!-- Google icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Own stylesheet -->
    <link rel="stylesheet" href= "<?php echo $route; ?>views/css/styles.css">
    <link rel="stylesheet" href= "<?php echo $route; ?>views/css/product-page.css">
    <link rel="stylesheet" href= "<?php echo $route; ?>views/css/footer.css">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- JQUERY -->
    <script src="<?php echo $route; ?>views/js/jquery-3.6.4.min.js"></script>




</head>
<body>
    
    <!-- HEADER -->
    <?php
        include("modules/header.php");

        // DYNAMIC CONTENT
        $routes = array();
        $auxRoute = null;
        $productInfo = null;
        
        
        if (isset($_GET['route'])) {
            $routes = explode("/", $_GET['route']);
            // CATEGORIES FRIENDLY URL
            $item = 'route';
            $value = $routes[0];
            $categoriesRoutes = ProductsController::ctrShowCategories($item, $value);
            if ($routes[0] == $categoriesRoutes['route']){
                $auxRoute = $routes[0];
            }
            // SUBCATEGORY FRIENDLY URL
            $subcategoryRoutes = ProductsController::ctrShowSubcategories($item, $value);
            foreach ($subcategoryRoutes as $key => $value) {
                if ($routes[0] == $value['route']){
                    $auxRoute = $routes[0];
                }
            }
            // PRODUCTS FRIENDLY URL
            $productsRoutes = ProductsController::ctrProductInfo($item, $value);
            if ($routes[0] == $productsRoutes['route']){
                $productInfo = $routes[0];
            }

            // WHITE LIST
            if($auxRoute != null) {
                include("modules/products.php");
            }elseif($productInfo != null){
                include("modules/product-info.php");
            }
            else{
                include("modules/404.php");
            }

        }else{
            include("modules/home.php");
        }

        include("modules/footer.php");



    ?>








    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

    <!-- TEMPLATE JS -->
    <script src="<?php echo $route; ?>views/js/header.js"></script>
    <script src="<?php echo $route; ?>views/js/template.js"></script>
    <script src="<?php echo $route; ?>views/js/products.js"></script>
    <script src="<?php echo $route; ?>views/js/product-info.js"></script>






</body>
</html>