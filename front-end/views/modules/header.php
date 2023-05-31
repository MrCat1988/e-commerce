<?php
       $categories = ProductsController::ctrShowCategories();
?>


<div class="bg"></div>
<header class="container-fluid d-flex fixed-top">
    
    <nav class="col-6 col-md-4">

        <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="bi bi-list bi-3xl"></i>  </button>
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header">
                <!-- <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5> -->
                <button type="button" class="btn-close justify-content-end" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul id='categoryValue' class="d-flex justify-content-evenly">
                    <?php
                        foreach ($categories as $key => $value) {
                           
                            echo "<li><a categoryId='{$value["idcategory"]}'>{$value["category"]}</a></li>";
                            // echo "<p id='categoryValue' categoryId='{$value["idcategory"]}'>{$value["category"]}</p>";
                        }
                    ?>
                </ul>
            </div>
        </div>


        <!-- <a href="">
            <i class="bi bi-list bi-3xl"></i>  
        </a> -->
        <img class="header-logo" src="http://localhost/e-commerce/back-end/views/img/template/logo-2.png" alt="My logo" class="logo">

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

    <div class="col-6 col-md-4 actions-buttons pt-2">
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
            <!-- <li><a href=""><i class="bi bi-person-circle"></i> Iniciar Sesión</a></li>
            <li><a href=""><i class="bi bi-bag"></i> Cesta</a></li> -->
        </ul>
    </div>

</header>
    
    <?php
        $template = TemplateController::ctrTemplateStyle();

    ?>


    <!-- <div class="container-fluid">
        <div class="row topBar">
            <div class="col-12 initial-banner">
                <h5><?php //echo $template['topBarText'];?></h5>
            </div>
        </div>



        <div class="row mainHeader" id="top">
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 social d-flex justify-content-center justify-content-sm-start">
                <ul class="float-start">
                    <?php
                        // foreach (json_decode($template['mainBarSocialNetwork'], true) as $key => $value) {
                        //     echo "
                        //         <li>
                        //             <a href='{$value["url"]}'>
                        //                 <i class='bi {$value["network"]} socialNetwork' aria-hidden='true'></i>
                        //             </a>
                        //         </li>
                        //     ";
                        // }
                    ?>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 register d-flex justify-content-center justify-content-sm-end">
                <ul class="float-end">
                    <li><a href="#signinModal">Log In</a></li>
                    <li>|</li>
                    <li><a href="#loginModal">Sign In</a></li>
                </ul>
            </div>
        </div>

    </div> -->




<!-- HEADER -->

<!-- <header class="container-fluid" id="header"> -->

    <!-- LOGO -->
    <!-- <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-center" id="logo">
                <a href="#">
                    <img src="http://localhost/e-commerce/back-end/<?php //echo $template["icon"]; ?>" class="img-responsive">
                </a>
            </div>

        </div>

    </div> -->



    <!-- <div class="row " id="headerMenu"> -->

        <!-- CATEGORIES BUTTON -->
        <!-- <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 d-flex justify-content-center justify-content-md-start" id="categoriesTitle">
            <p>Categories
                <span class="align-middle">
                    <i class="bi bi-list"></i>
                </span>
            </p>
        </div> -->

        <!-- SEARCHING BOX -->
        <!-- <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 input-group " id="searchingBox">
            <input type="search" name="search" class="form-control" placeholder="Search"> -->
            <!-- <span class="input-group"> -->
                <!-- <a href="#"> -->
                    <!-- <button class="btn btn-dark " type="submit">
                        <i class="bi bi-search"></i>
                    </button> -->
                <!-- </a> -->
            <!-- </span> -->
        <!-- </div> -->

        <!-- SHOPPING BAG -->
        <!-- <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 d-flex justify-content-center justify-content-md-end" id="shoppingBag">
                <a href="#" class="">
                    <button class="btn btn-default">
                        <i class="bi bi-bag" aria-hidden="true"></i>
                    </button>
                </a>
                <p class="">Shopping Bag <span class="bagQuantity"> <br> USD $ <span class="totalBag">100.00</span></span></p>
        </div>


    </div> -->


        <!-- Categories -->
    <!-- <div class='col-12' id='categories'>
        <div class='col-lg-2 col-md-3 col-sm-12 col-xs-12'>
            <div class='accordion'> -->
                <?php
                    // $categories = ProductsController::ctrShowCategories();
                    
                    // foreach ($categories as $key => $value) {
                    //     echo "
                        
                    //         <div class='accordion-item'>
                            
                    //             <h2 class='accordion-header' id='heading{$value["idcategory"]}'>
                    //             <p class='accordion-button pixelCategories collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapse{$value["idcategory"]}' aria-expanded='true' aria-controls='collapse{$value["idcategory"]}'>
                    //                 {$value["category"]}
                    //             </p>
                    //             </h2>
                            
                    //             <div id='collapse{$value["idcategory"]}' class='accordion-collapse collapse' aria-labelledby='heading{$value["idcategory"]}' data-bs-parent='#accordionExample'>
                    //                 <div class='accordion-body'>
                    //                     <ul class='list-group list-group-flush'>";
                    //                     $subcategories = ProductsController::ctrShowSubcategories($value["idcategory"]);
                    //                     foreach ($subcategories as $key => $value) {
                    //                         echo "<li class='list-group-item pixelSubCategorie'><a href='{$value["route"]}' class='pixelSubCategories'>{$value["subcategory"]}</a></li>";
                    //                     }
                    //                             echo"
                    //                     </ul>
                    //                 </div>
                    //             </div>

                    //         </div>
            
                                        
                                        
                                        
                    //     ";
                    // }               
                            
                ?>
                <!-- </div>
            </div>
        </div>
        
</header> -->