<?php
    $serverRoute = Route::ctrServerRoute();
    
    $item1 = 'route';
    $value1 = $routes[0];
    $categories = ProductsController::ctrShowCategories($item1, $value1);


    if($categories){
        $item = 'category_idcategory';
        $value = $categories["idcategory"];
        $products = ProductsController::ctrShowProducts($item, $value);
    }else{
        $subCategories = ProductsController::ctrShowSubcategories($item1, $value1);
        $item = 'subcategory_idsubcategory';
        $value = $subCategories[0]["idsubcategory"];
        $products = ProductsController::ctrShowProducts($item, $value);
    }
    

?>


<div class="container-fluid">
    <div class="row products d-flex justify-content-evenly" categoryId='<?php echo $categories["idcategory"]; ?>' subCategoryId='<?php echo $subCategories[0]["idsubcategory"]; ?>'>


        
        <?php
        // if($products){

        //     foreach ($products as $key => $value) {
        //         $new = $value["new"] == 1 ? 'NEW' : '';
        //         $price = number_format($value["price"],2);
        //         $discount = number_format($value["discount"],0);
        //         $discount_price = number_format($value["discount_price"],2);
        //         echo "
        //             <div class='px-5 py-3 col-sm-6 col-lg-4'>
        //                 <div class='product position-relative'>
        //                     <a href='{$value["route"]}' idProduct='{$value["idproduct"]}'>
        //                         <img id='product-image' class='img-fluid' src='{$serverRoute}{$value["cover_img"]}' alt=''>
        //                     </a>
        //                     <div class='ribbon position-absolute top-0'>
        //                         <p>{$new}</p>
        //                     </div>
        
        //                     <div id='sizes' class='sizes position-absolute bottom-0 px-3 w-100 d-none'>
        //                         <p class='text-center mb-0 py-1'>Selecciona tu talla</p>
        //                         <ul class='d-flex justify-content-evenly'>";
    
        //         $sizes = json_decode($value['details'], true);  
        //         foreach ($sizes as $size => $sizeDetail) { echo "<li><a class='text-decoration-none text-black' href='{$sizeDetail[0]['short']}'>{$sizeDetail[0]['short']}</a></li>"; }
        //         echo"
    
        //                         </ul>
        //                     </div>
        //                 </div>
        //                 <div class='price-info d-flex justify-content-between'>    
        //                 ";
                
        //         if ($value["is_discount"]  == 0) {
        //             echo "  
        //                         <p class='description'>{$value["title"]}</p>
        //                         <small class='price'>{$price} USD</small>
        //                     </div>
        //                     <div class='discount-info d-flex justify-content-end'>
        //                         <p class='discount px-2 my-0 transparent'> 0 </p>
        //                         <p class='normal-price text-decoration-line-through my-0 transparent'> 0</p>
        //                     </div>
        //                 </div>
        //             ";
        //         }else{
        //             echo "  
        //                         <p class='description'>{$value["title"]}</p>
        //                         <small class='price'>{$discount_price} USD</small>
        //                     </div>
        //                     <div class='discount-info d-flex justify-content-end'>
        //                         <p class='discount px-2 my-0 bg-black text-white'> -{$discount}%</p>
        //                         <p class='normal-price text-decoration-line-through my-0 bg-black text-white'> {$price} USD</p>
        //                     </div>
        //                 </div>
        //             ";
        //         }
    
    
        //     }




        // }else{
        //     echo '
        //         <div class="p-5">
        //             <div class="p-5">
        //                 <div class="out-of-stock p-5 bg-black text-white">

        //                     <p class="mb-0 text-center"><i class="bi bi-bag-x fs-1"></i></p>

        //                     <h2 class="fs-1 text-center p-3">Pronto más artículos</h2>
                            
        //                     <p class="fw-light text-justify py-3">Lo sentimos, no tenemos disponible el/los artículos seleccionados, pronto dispondremos de más productos.</p>
        //                     <a href="http://localhost/e-commerce/front-end/">
        //                         <button class="py-2 btn btn-light rounded-0"> Volver a la página principal</button>
        //                     </a>
        //                 </div>
        //             </div>
        //         </div>

        //     ';
        // }
    ?>


        



        <!-- PRODUCT -->
        <!-- <div class="px-5 py-3 col-sm-6 col-lg-4">
            <div class="product position-relative">
                <a href="">
                    <img id="product-image" class="img-fluid" src="<?php echo $serverRoute; ?>views/img/products/1618221800_2_3_1.jpg" alt="">
                </a>
                <div class="ribbon position-absolute top-0">
                    <p>NEW</p>
                </div>

                <div id="sizes" class="sizes position-absolute bottom-0 px-3 w-100 d-none">
                    <p class="text-center">Selecciona tu talla</p>
                    <ul class="d-flex justify-content-evenly">
                        <li><a class="text-decoration-none text-black" href="">XS</a></li>
                        <li><a class="text-decoration-none text-black" href="">S</a></li>
                        <li><a class="text-decoration-none text-black" href="">M</a></li>
                        <li><a class="text-decoration-none text-black" href="">L</a></li>
                        <li><a class="text-decoration-none text-black" href="">XL</a></li>
                    </ul>
                </div>
 
            </div>
            <div class="price-info d-flex justify-content-between">
                <p class="description">Vestido negro</p>
                <small class="price">25.00 USD</small>
            </div>
            <div class="discount-info d-flex justify-content-end">
                <p class="discount px-2 my-0 bg-black text-white"> -40%</p>
                <p class="normal-price text-decoration-line-through my-0 bg-black text-white"> 35.00 USD</p>
            </div>
        </div> -->













    </div>

        
    
</div>

<script src="views/js/products-load.js"></script>
