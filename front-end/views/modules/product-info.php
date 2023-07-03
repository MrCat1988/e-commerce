<div class="container-fluid">
    <div class="row products d-flex justify-content-evenly">
        <?php
            $item = 'route';
            $value = $_GET["route"];
            $productsRoutes = ProductsController::ctrProductInfo($item, $value);
            // echo '<pre>';
            // var_dump(json_decode($productsRoutes['details_img'],true));
            // echo '</pre>';
            $product_images = json_decode($productsRoutes['details_img'],true);
           
                                // foreach ($product_images['product-image'] as $key => $value) {
                                    echo '<pre>';
                                    var_dump($product_images['product-image']);
                                    echo '</pre>';
                                // }
        ?>
        <div class="product-info">
            <div class="row">

                <div class="col-md-4">
                    <h3 class="title text-center fw-bolder text-uppercase fs-3"><?php echo $productsRoutes['title']; ?></h3>
                    <p class="description text-center fst-italic">
                        <?php echo $productsRoutes['short_description'];?>
                    </p>
                </div>



                <div class="col-md-4">
                    <div id="carouselExampleIndicators" class="carousel slide mx-5 mb-5" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <?php
                                foreach ($product_images['product-image'] as $key => $value) {
                                    echo "<button type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide-to='0' aria-current='true' aria-label='Slide {$key}'></button>";
                                }
                            ?>
                            <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button> -->

                        </div>
                        <div class="carousel-inner">
                            <?php
                                foreach ($product_images['product-image'] as $key => $value) {
                                    echo " 
                                        <div class='carousel-item active'>
                                            <img src='http://localhost/e-commerce/back-end/{$value}' class='d-block w-100' alt='...'>
                                        </div>";
                                }
                            ?>
                            <!-- <div class="carousel-item active">
                                <img src="http://localhost/e-commerce/back-end/views/img/products/4661325052_1_1_1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="http://localhost/e-commerce/back-end/views/img/products/4661325052_2_1_1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="http://localhost/e-commerce/back-end/views/img/products/4661325052_2_2_1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="http://localhost/e-commerce/back-end/views/img/products/4661325052_2_3_1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="http://localhost/e-commerce/back-end/views/img/products/4661325052_2_4_1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="http://localhost/e-commerce/back-end/views/img/products/4661325052_6_1_1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="http://localhost/e-commerce/back-end/views/img/products/4661325052_6_2_1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="http://localhost/e-commerce/back-end/views/img/products/4661325052_6_3_1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="http://localhost/e-commerce/back-end/views/img/products/4661325052_6_4_1.jpg" class="d-block w-100" alt="...">
                            </div> -->
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






                <div class="col-md-4">

                </div>


            </div>
        </div>



            





    </div>
</div>