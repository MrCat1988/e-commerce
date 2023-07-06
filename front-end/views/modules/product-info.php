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
                                foreach ($product_images['product-image'] as $key => $value) {
                                    // echo '<pre>';
                                    // var_dump($value);
                                    // echo '</pre>';
                                    // foreach ($array as $key => $element) {
                                        // if ($key === array_key_first($product_images['product-image'])) {
                                        //     echo 'FIRST ELEMENT!';
                                        // }else{
                                        //      echo 'Another elements';
                                        // }
                                        // $aux = $key === array_key_first($product_images['product-image']) ? 'FIRST ELEMENT!' : 'SECOND ELEMENT';
                                        // echo $aux;
                                        // if ($key === array_key_last($array)) {
                                        //     echo 'LAST ELEMENT!';
                                        // }
                                    // }
                                }
        ?>
        <div class="product-info">
            <div class="row">

                <div class="col-md-4">
                    <h3 class="title text-center fw-bolder text-uppercase fs-3"><?php echo $productsRoutes['title']; ?></h3>
                    <p class="description text-center fst-italic">
                        <?php echo $productsRoutes['short_description'];?>
                    </p>
                </div>



                <div class="col-md-4 p-2">

                <!-- TEST -->
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

                <!-- TEST -->




                    
                </div>






                <div class="col-md-4">

                </div>


            </div>
        </div>



            





    </div>
</div>