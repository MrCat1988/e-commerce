<?php
    $item = 'route';
    $value = $_GET["route"];
    $product = ProductsController::ctrProductInfo($item, $value);
    echo '<pre>';
    // print_r($product);
    echo '</pre>';
    $product_images = json_decode($product['details_img'],true);
                        
?>

<div class="container-fluid">
    <div class="product-info pt-5 px-2">
        <div class="row">
            <div class="col-lg-8 px-3">

                <div class="row">
                <?php
                    foreach ($product_images['product-image'] as $key => $value) {
                        $aux = $key === array_key_first($product_images['product-image']) ? 'active' : '';

                        echo "
                        <div class='col-md-6 px-2 grid pb-2'>
                            <img class='img-fluid' src='http://localhost/e-commerce/back-end/{$value}'>
                        </div>
                        ";
                    
                    }
                ?>
                </div>




            </div>
            <div class="col-lg-4 bg-white p-2" id="product-info-box">
                <!-- TITLE AND PRICE -->
                <div class="info d-flex">
                        <div class="col-8">
                             <span class="text-uppercase fw-light"><?php echo $product['title']; ?></span>
                        </div>
                        <div class="col-4 text-end">
                             <span class="d-flex flex-column">
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
                             </span>
                             
                        </div>
                </div>
                <div class="sizes">
                    <div class="col-12 d-flex pt-lg-3 pt-2">
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
                </div>
                <div class="col-12 py-3 d-flex justify-content-between">
                    <span><a class="text-decoration-none text-black border-bottom" href="">Guía de tallas</a></span>
                    <span><i class="bi bi-bookmark pe-3" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Añadir a favoritos"></i></span>
                </div>
                <div class="col-12">
                    <div class="row p-3 ">
                        <button class="btn btn-dark btn-hover-light"><i class="bi bi-bag"></i> Añadir a cesta</button>
                    </div>
                </div>


            </div>

        </div>
    </div>
</div>




<script src="<?php echo $route; ?>views/js/product-info.js"></script>
