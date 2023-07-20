<?php
    $serverRoute = Route::ctrServerRoute();
    
    $item1 = 'route';
    $value1 = $routes[0];
    $categories = ProductsController::ctrShowCategories($item1, $value1);
    if($categories){
        $item = 'category_idcategory';
        $value = $categories["idcategory"];
    }else{
        $subCategories = ProductsController::ctrShowSubcategories($item1, $value1);
        $item = 'subcategory_idsubcategory';
        $value = $subCategories[0]["idsubcategory"];
    }

    // var_dump($categories["idcategory"]);
?>


<div class="container-fluid">
    <div id="products" class="row products d-flex justify-content-evenly" categoryId='<?php echo $categories["idcategory"]; ?>' subCategoryId='<?php echo $subCategories[0]["idsubcategory"]; ?>'>


        
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





<div class="modal fade" id="product-info-modal" aria-hidden="true" aria-labelledby="modalLabel" tabindex="-1">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title fs-5 fw-light" id="modalLabel"></p>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Show a second modal and hide this one with the button below. -->

        <div class="row">

            <div class="col-lg-6">
                <div id="productsImages" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="http://localhost/e-commerce/back-end/views/img/products/7954683251_1_1_1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="http://localhost/e-commerce/back-end/views/img/products/1971027044_1_1_1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="http://localhost/e-commerce/back-end/views/img/products/4661325052_1_1_1.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="" aria-hidden="true"><i class="bi bi-arrow-left-circle fs-2"></i></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="" aria-hidden="true"><i class="bi bi-arrow-right-circle fs-2"></i></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="modal-title fs-6 fw-medium text-center text-uppercase" id="productName">Product info</h2>
                <span>
                    <p id="precio" class="d-flex justify-content-evenly">
                        <!-- COST  -->
                    </p>
                    <!-- <p class="bg-warning w-25">-45% 20.00 USD</p>
                    <p class="fs-6 mb-0 text-decoration-line-through">35.00 USD</p> -->
                </span>
                <span>
                    <p id="shortDescription" class="text-justify fw-lighter fw-light fs-6"></p>
                    <span><p class="text-center fw-light mb-0">Selecciona tu talla:</p></span>
                        <div class="btn-group d-flex justify-content-center pt-2" id="size-selector" role="group" aria-label="Tallas disponibles">
                                <!-- SIZES -->
                        </div>
                </span>
                <span class="d-flex justify-content-center p-3">
                    <!-- <div class="row">   -->
                        <button class="btn border fw-light" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Añadir a la cesta"><i class="bi bi-bag"></i> AÑADIR A LA CESTA</button>
                        <button class="btn border" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Añadir a favoritos"><i class="bi bi-heart"></i></button>

                    <!-- </div>  -->
                </span>
                <hr>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            <span class="fw-light text-uppercase">Guia de tallas</span>
                        </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            <span class="fw-light text-uppercase">Composición</span>
                        </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            <span class="fw-light text-uppercase">Cuidado y limpieza</span>
                        </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                            <span class="fw-light text-uppercase">Envios</span>
                        </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




      </div>
      
    </div>
  </div>
</div>
