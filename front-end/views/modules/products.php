<?php
    setlocale(LC_MONETARY,"en_US");
    $serverRoute = Route::ctrServerRoute();
    $item = null;
    $value = null;
    $products = ProductsController::ctrShowProducts($item, $value);
        // echo '<pre>';
        // var_dump($products);
        // echo '</pre>';
?>


<div class="container-fluid">
    <div class="row products d-flex justify-content-evenly">




    <?php
        foreach ($products as $key => $value) {
            $new = $value["new"] == 1 ? 'NEW' : '';
            $price = number_format($value["price"],2);
            $discount = number_format($value["discount"],0);
            $discount_price = number_format($value["discount_price"],2);
            echo "
                <div class='px-5 py-3 col-sm-6 col-lg-4'>
                    <div class='product position-relative'>
                        <a href='{$value["route"]}' idProduct='{$value["idproduct"]}'>
                            <img id='product-image' class='img-fluid' src='{$serverRoute}{$value["cover_img"]}' alt=''>
                        </a>
                        <div class='ribbon position-absolute top-0'>
                            <p>{$new}</p>
                        </div>
    
                        <div id='sizes' class='sizes position-absolute bottom-0 px-3 w-100 d-none'>
                            <p class='text-center mb-0 py-1'>Selecciona tu talla</p>
                            <ul class='d-flex justify-content-evenly'>";

            $sizes = json_decode($value['details'], true);  
            foreach ($sizes as $size => $sizeDetail) { echo "<li><a class='text-decoration-none text-black' href='{$sizeDetail[0]['short']}'>{$sizeDetail[0]['short']}</a></li>"; }
            echo"

                            </ul>
                        </div>
                    </div>
                    <div class='price-info d-flex justify-content-between'>    
                    ";
            
            if ($value["is_discount"]  == 0) {
                echo "  
                            <p class='description'>{$value["title"]}</p>
                            <small class='price'>{$price} USD</small>
                        </div>
                        <div class='discount-info d-flex justify-content-end'>
                            <p class='discount px-2 my-0 transparent'> 0 </p>
                            <p class='normal-price text-decoration-line-through my-0 transparent'> 0</p>
                        </div>
                    </div>
                ";
            }else{
                echo "  
                            <p class='description'>{$value["title"]}</p>
                            <small class='price'>{$discount_price} USD</small>
                        </div>
                        <div class='discount-info d-flex justify-content-end'>
                            <p class='discount px-2 my-0 bg-black text-white'> -{$discount}%</p>
                            <p class='normal-price text-decoration-line-through my-0 bg-black text-white'> {$price} USD</p>
                        </div>
                    </div>
                ";
            }


        }
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
<!-- <div class="container-fluid products-page position-absolute top-0">




    
    <div class="row container-fluid d-flex justify-content-evenly">


        <div class="col-sm-6 col-xl-4 p-5 product">
            <picture>
                <img class="img-fluid" src="<?php echo $serverRoute; ?>views/img/products/1618221800_1_1_1.jpg" alt="">
                <div class="size-selector position-relative">
                    <div class="sizes position-absolute bottom-0 w-100 py-1">
                        <p class="text-center p-2">Añadir talla</p>
                        <ul class="d-flex justify-content-evenly">
                            <li><a href="">XS</a></li>
                            <li><a href="">S</a></li>
                            <li><a href="">M</a></li>
                            <li><a href="">L</a></li>
                            <li><a href="">XL</a></li>
                        </ul>
                    </div>
                </div>
            </picture>
            <div class="product-price d-flex justify-content-between py-2">
                <p>Cardigan sin mangas</p>
                <small>35.00 USD</small>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4 p-5 product">
            <picture>
                <img class="img-fluid" src="<?php echo $serverRoute; ?>views/img/products/9929039307_2_2_1.jpg" alt="">
                <div class="size-selector position-relative">
                    <div class="sizes position-absolute bottom-0 w-100 py-1">
                        <p class="text-center p-2">Añadir talla</p>
                        <ul class="d-flex justify-content-evenly">
                            <li><a href="">XS</a></li>
                            <li><a href="">S</a></li>
                            <li><a href="">M</a></li>
                            <li><a href="">L</a></li>
                            <li><a href="">XL</a></li>
                        </ul>
                    </div>
                </div>
            </picture>
            <div class="product-price d-flex justify-content-between py-2">
                <p>Cardigan sin mangas</p>
                <small>35.00 USD</small>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4 p-5 product">
            <picture>
                <img class="img-fluid" src="<?php echo $serverRoute; ?>views/img/products/1971064630_1_1_1.jpg" alt="">
                <div class="size-selector position-relative">
                    <div class="sizes position-absolute bottom-0 w-100 py-1">
                        <p class="text-center p-2">Añadir talla</p>
                        <ul class="d-flex justify-content-evenly">
                            <li><a href="">XS</a></li>
                            <li><a href="">S</a></li>
                            <li><a href="">M</a></li>
                            <li><a href="">L</a></li>
                            <li><a href="">XL</a></li>
                        </ul>
                    </div>
                </div>
            </picture>
            <div class="product-price d-flex justify-content-between py-2">
                <p>Cardigan sin mangas</p>
                <small>35.00 USD</small>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4 p-5 product">
            <picture>
                <img class="img-fluid" src="<?php echo $serverRoute; ?>views/img/products/9929039307_1_1_1.jpg" alt="">
                <div class="size-selector position-relative">
                    <div class="sizes position-absolute bottom-0 w-100 py-1">
                        <p class="text-center p-2">Añadir talla</p>
                        <ul class="d-flex justify-content-evenly">
                            <li><a href="">XS</a></li>
                            <li><a href="">S</a></li>
                            <li><a href="">M</a></li>
                            <li><a href="">L</a></li>
                            <li><a href="">XL</a></li>
                        </ul>
                    </div>
                </div>
            </picture>
            <div class="product-price d-flex justify-content-between py-2">
                <p>Cardigan sin mangas</p>
                <small>35.00 USD</small>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4 p-5 product">
            <picture>
                <img class="img-fluid" src="<?php echo $serverRoute; ?>views/img/products/0108021802_1_1_1.jpg" alt="">
                <div class="size-selector position-relative">
                    <div class="sizes position-absolute bottom-0 w-100 py-1">
                        <p class="text-center p-2">Añadir talla</p>
                        <ul class="d-flex justify-content-evenly">
                            <li><a href="">XS</a></li>
                            <li><a href="">S</a></li>
                            <li><a href="">M</a></li>
                            <li><a href="">L</a></li>
                            <li><a href="">XL</a></li>
                        </ul>
                    </div>
                </div>
            </picture>
            <div class="product-price d-flex justify-content-between py-2">
                <p>Cardigan sin mangas</p>
                <small>35.00 USD</small>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4 p-5 product">
            <picture>
                <img class="img-fluid" src="<?php echo $serverRoute; ?>views/img/products/7385453743_1_1_1.jpg" alt="">
                <div class="size-selector position-relative">
                    <div class="sizes position-absolute bottom-0 w-100 py-1">
                        <p class="text-center p-2">Añadir talla</p>
                        <ul class="d-flex justify-content-evenly">
                            <li><a href="">XS</a></li>
                            <li><a href="">S</a></li>
                            <li><a href="">M</a></li>
                            <li><a href="">L</a></li>
                            <li><a href="">XL</a></li>
                        </ul>
                    </div>
                </div>
            </picture>
            <div class="product-price d-flex justify-content-between py-2">
                <p>Cardigan sin mangas</p>
                <small>35.00 USD</small>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4 p-5 product">
            <picture>
                <img class="img-fluid" src="<?php echo $serverRoute; ?>views/img/products/7954683251_1_1_1.jpg" alt="">
                <div class="size-selector position-relative">
                    <div class="sizes position-absolute bottom-0 w-100 py-1">
                        <p class="text-center p-2">Añadir talla</p>
                        <ul class="d-flex justify-content-evenly">
                            <li><a href="">XS</a></li>
                            <li><a href="">S</a></li>
                            <li><a href="">M</a></li>
                            <li><a href="">L</a></li>
                            <li><a href="">XL</a></li>
                        </ul>
                    </div>
                </div>
            </picture>
            <div class="product-price d-flex justify-content-between py-2">
                <p>Cardigan sin mangas</p>
                <small>35.00 USD</small>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4 p-5 product">
            <picture>
                <img class="img-fluid" src="<?php echo $serverRoute; ?>views/img/products/9929339307_6_1_1.jpg" alt="">
                <div class="size-selector position-relative">
                    <div class="sizes position-absolute bottom-0 w-100 py-1">
                        <p class="text-center p-2">Añadir talla</p>
                        <ul class="d-flex justify-content-evenly">
                            <li><a href="">XS</a></li>
                            <li><a href="">S</a></li>
                            <li><a href="">M</a></li>
                            <li><a href="">L</a></li>
                            <li><a href="">XL</a></li>
                        </ul>
                    </div>
                </div>
            </picture>
            <div class="product-price d-flex justify-content-between py-2">
                <p>Cardigan sin mangas</p>
                <small>35.00 USD</small>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4 p-5 product">
            <picture>
                <img class="img-fluid" src="<?php echo $serverRoute; ?>views/img/products/1618221800_6_1_1.jpg" alt="">
                <div class="size-selector position-relative">
                    <div class="sizes position-absolute bottom-0 w-100 py-1">
                        <p class="text-center p-2">Añadir talla</p>
                        <ul class="d-flex justify-content-evenly">
                            <li><a href="">XS</a></li>
                            <li><a href="">S</a></li>
                            <li><a href="">M</a></li>
                            <li><a href="">L</a></li>
                            <li><a href="">XL</a></li>
                        </ul>
                    </div>
                </div>
            </picture>
            <div class="product-price d-flex justify-content-between py-2">
                <p>Cardigan sin mangas</p>
                <small>35.00 USD</small>
            </div>
        </div>



    </div>

    <p class="text-center fs-3 error-message">Aquí van los productos.</p>
</div> -->