<?php
        $item = 'route';
        $value = null;
        $categories = ProductsController::ctrShowCategories($route, $value);
?>


<div class="bg"></div>
<header class="container-fluid d-flex fixed-top">
    
    <nav class="col-6 col-md-4">

        <button class="btn" id="categories-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="bi bi-list bi-3xl"></i>  </button>
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header">
                <!-- <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5> -->
                <button type="button" class="btn-close justify-content-end" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul id='categoryValue' class="d-flex justify-content-evenly">
                    <?php
                        foreach ($categories as $key => $value) {
                           
                            echo "<li><a route='{$value["route"]}' categoryId='{$value["idcategory"]}'>{$value["category"]}</a></li>";
                            // echo "<p id='categoryValue' categoryId='{$value["idcategory"]}'>{$value["category"]}</p>";
                        }
                    ?>
                </ul>
                <ul id="subCategoryList">
                    <!-- <li>Camisetas</li>
                    <li>Leggings</li>
                    <li>Shorts</li> -->
                </ul>
            </div>
        </div>


        <a href="http://localhost/e-commerce/front-end/">
            <img class="header-logo" src="http://localhost/e-commerce/back-end/views/img/template/logo-2.png" alt="My logo" class="logo">
        </a>
        
    </nav>

    <div class="col-4 category d-md-block d-none">
        <ul class="d-flex justify-content-evenly">
            <?php
                foreach ($categories as $key => $value) {
                    echo "<li><a href='{$value["route"]}'>{$value["category"]}</a></li>";
                }
            ?>
        </ul>
    </div>

    <div class="col-6 col-md-4 actions-buttons pt-2 pe-3">
        <ul class="d-flex justify-content-end">
            <li>
                <a class="d-flex" href="">
                    <i class="bi bi-search"></i><p class="ps-1 d-none d-lg-block">Buscar</p>  
                </a>
            </li>
            <li>
                <a class="d-flex" href="">
                    <i class="bi bi-person-circle"></i><p class="ps-1 d-none d-lg-block">Iniciar Sesión</p>  
                </a>
            </li>
            <li>
                <a class="d-flex" href="">
                    <i class="bi bi-bag"></i><p class="ps-1 d-none d-lg-block">Cesta</p>  
                </a>
            </li>
        </ul>
    </div>

</header>
    