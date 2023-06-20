<div class="container-fluid">
    <div class="row products d-flex justify-content-evenly">
        <?php
            $item = 'route';
            $value = $_GET["route"];
            $productsRoutes = ProductsController::ctrProductInfo($item, $value);
            echo '<pre>';
            var_dump($routes[0]);
            echo '</pre>';

        ?>
        <h1>Info Producto</h1>
    </div>
</div>