// =========================================================================
// =======              PRODUCT HOVER SHOW SIZE DIV             ============
// =========================================================================
$(".product").on('mouseover', function(){
    $(this).children()[2].classList.remove('d-none');
    
});
$(".product").on('mouseleave', function(){
    $(this).children()[2].classList.add('d-none');
});

// =========================================================================
// ============        SHOW  PRODUCT INFO IN MODAL            ==============
// =========================================================================
$(".product-on-screen").on("click",function(){
    idProduct = $(this).attr("idproduct");
    
    // console.log(idProduct)
    let productsInfoRequest = new FormData();
    let sizeSelector = $("#size-selector");
    let productImages = $("#productsImages");
    productsInfoRequest.append('idProduct',idProduct);
    $.ajax({
            url: 'ajax/products.ajax.php',
            method: "POST",
            data: productsInfoRequest,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function(data) {
                console.log(data);
                // SIZES
                let details = JSON.parse(data.details);
                let sizes = Object.keys(details);
                sizeSelector.html("");
                for(size in sizes){
                    let stock  = details[sizes[size]].stock;
                    sizeSelector.append(`<button type="button" class="btn border ${stock > 0 ? '':'disabled text-decoration-line-through'}">${sizes[size]}</button>`);
                    // console.log(stock)
                }
                // PRICE
                if(data.is_discount == 1){
                    // console.log(data.discount +' % '+ data.discount_price + 'USD');
                    $("#precio").html(`<span class="bg-warning bg-opacity-50 mb-0 mt-3 fw-light fs-6"> <small class="fw-light">-${data.discount}% </small> ${parseFloat(data.discount_price).toFixed(2)} USD</span><span class="disabled text-decoration-line-through mb-0 text-secondary text-opacity-75 mt-3 fs-6 fw-light align-baseline">${parseFloat(data.price).toFixed(2)} USD</span>`);
                }else{
                    // console.log(data.price +'USD');
                    $("#precio").html(`<span class="mb-0 mt-3 fw-light fs-6 fw-medium">${parseFloat(data.price).toFixed(2)} USD</span>`);
                }
                // PRODUCT NAME
                $("#productName").html(data.title);
                // PRODUCT DESCRIPTION
                $("#shortDescription").html(data.short_description);
                // PRODUCT IMAGES
                productImages.html("");
                let images = JSON.parse(data.details_img);
                productImages.append(`<div class="carousel-indicators">
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
            </div>`);
                console.log(productImages)
            }
    })
})

