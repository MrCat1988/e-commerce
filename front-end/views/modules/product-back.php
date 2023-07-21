<div class="container">
    <div class="row products">
        <div class="product-info px-md-5">
            <div class="row d-flex justify-content-center">

                <!-- PRODUCT IMG CAROUSEL -->
                <div class="col-md-5 p-2">

                    <div class="row">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                    <?php
                                    $index=0;
                                        foreach ($product_images['product-image'] as $key => $value) {
                                            $aux = $key === array_key_first($product_images['product-image']) ? 'active' : '';
                                            echo "<button type='button' data-bs-target='#carouselExampleIndicators' class='{$aux}' data-bs-slide-to='$index' aria-label='{$key}'></button>";
                                            $index++;
                                        }
                                                                            
                                
                                    ?>
                            </div>
                            <div class="carousel-inner">
                                        <?php
                                            foreach ($product_images['product-image'] as $key => $value) {
                                                $aux = $key === array_key_first($product_images['product-image']) ? 'active' : '';

                                                echo "
                                                    <div class='carousel-item {$aux}'>
                                                        <img src='http://localhost/e-commerce/back-end/{$value}' class='d-block w-100'>
                                                    </div>
                                                ";
                                            
                                            }
                                        ?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                    </div>





                    
                </div>


                <div class="col-md-7">
                    <!-- PRODUCT TITLE -->
                    <h3 class="title text-center fw-lighter text-uppercase fs-3"><?php echo $product['title']; ?></h3>
                    <!-- PRODUCT PRICE -->
                    <span class="d-flex justify-content-center py-3">
                        <?php
                            // var_dump($product["is_discount"]);
                            if($product["is_discount"] > 0){
                                echo "
                                    <p class='fs-5 fw-lighter bg-warning'>-{$product['discount']}%</p>
                                    <p class='px-3 fs-5 fw-lighter bg-warning  text-decoration-line-through'>".number_format($product['price'],2)." USD</p>
                                    <p class='fs-5 ps-2 fw-light'>".number_format($product['discount_price'],2)." USD</p>
                                ";
                            }else{
                                echo "<p class='px-3 fs-5 fw-light'>".number_format($product['price'],2)." USD</p>";
                            }
                        ?>

                    </span>
                    <!-- DESCRIPTION -->
                    <p class="description text-left fw-lighter">
                        <?php echo $productsRoutes['short_description'];?>
                    </p>
                    <!-- SIZES SELECTOR -->
                    <span class="py-3 d-flex flex-row">
                        <h6 class="text-left fw-light">Seleccione su talla:</h6>
                        <div class="btn-group d-flex justify-content-center px-3" role="group" aria-label="Button group with nested dropdown">
                            <?php 
                                $sizes = json_decode($product["details"], true);
                                foreach ($sizes as $key => $value) {
                                    $disabled = $value["stock"] > 0 ? "" : "disabled text-decoration-line-through";
                                    echo "<button type='button' class='btn btn-light {$disabled}'>{$key}</button>";
                                }
                            ?>
                        </div>
                    </span>
                    <!-- BUTTONS -->
                    <div class="row pb-3 pt-3">
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <button type="button" class="btn btn-light border" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Añadir a la cesta"><i class="bi bi-bag"></i> Añadir a la cesta</button>
                            <button type="button" class="btn btn-light border" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Añadir a favoritos"><i class="bi bi-heart"></i></button>
                        </div>
                    </div>
                    <!-- PRODUCT INFO -->
                    <hr>
                    <div class="accordion accordion-flush py-3" id="accordionFlushExample">
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




<div class="container-fluid pt-5">
    <div class="product-info d-flex justify-content-center pt-4">
        
        <!-- PRODUCT IMG -->
        <div class="col-md-8">
            <!-- <?php print_r($product_images);?> -->
            <div class="row">
                <?php
                    foreach ($product_images['product-image'] as $key => $value) {
                        $aux = $key === array_key_first($product_images['product-image']) ? 'active' : '';

                        echo "
                        <div class='col-md-6 p-2'>
                            <img class='img-fluid' src='http://localhost/e-commerce/back-end/{$value}'>
                        </div>
                        ";
                    
                    }
                ?>

            </div>
        </div>
        <div class="col-md-4 px-3 p-2">
            <div class="d-flex justify-content-between d-flex flex-column bg-white px-2 pt-2">
                    <div class="row">
                        <!-- PRODUCT NAME -->
                        <div class="col-8">
                            <span class="text-uppercase fw-light"><?php echo $product['title']; ?></span>
                        </div>
                        <!-- PRODUCT PRICE -->
                        <div class="col-4 d-flex flex-column">
                            <?php
                                // var_dump($product["is_discount"]);
                                if($product["is_discount"] > 0){
                                    echo "
                                        <span class='fs-6 text-end fw-lighter bg-warning text-decoration-line-through'>-{$product['discount']}% ".number_format($product['price'],2)." USD</span>
                                        <span class='fs-6 text-end ps-2 fw-light'>".number_format($product['discount_price'],2)." USD</span>
                                    ";
                                }else{
                                    echo "<span class='text-end px-3 fs-6 fw-light'>".number_format($product['price'],2)." USD</span>";
                                }
                            ?>
                        </div>

                    </div>

                <!-- SIZES -->
                <div class="row">
                    <div class="col-12 d-flex pt-3">
                        <span >Talla</span>
                        <div class="btn-group d-flex justify-content-center px-3" role="group" aria-label="Button group with nested dropdown">
                            <?php 
                                $sizes = json_decode($product["details"], true);
                                foreach ($sizes as $key => $value) {
                                    $disabled = $value["stock"] > 0 ? "" : "disabled text-decoration-line-through";
                                    echo "<button type='button' class='btn btn-sm btn-outline-dark {$disabled}'>{$key}</button>";
                                }
                            ?>
                        </div>

                    </div>
                    <!-- SIZE GUIDE AND ADD TO FAVORITE LIST -->
                    <div class="col-12 py-3 d-flex justify-content-between">
                        <span><a class="text-decoration-none text-black border-bottom" href="">Guía de tallas</a></span>
                        <span><i class="bi bi-bookmark pe-3" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Añadir a favoritos"></i></span>
                    </div>
                    <div class="col-12">
                        <div class="row p-3">
                            <button class="btn btn-dark btn-hover-light"><i class="bi bi-bag"></i> Añadir a cesta</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
