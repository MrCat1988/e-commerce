// window.onload = function(e){ 
// $(document).ready(function(){
    let products = '';
    let categoryIdRequest = '';
    let subcategoryIdRequest = '';
    let limit = 0;
    let offset = 2;
    let productsRequest = new FormData();
    loadProducts(productsRequest);

    let html = '';

// };



let observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting){
            limit += offset;
            loadProducts(productsRequest)
        }
    })
},{
    root: null,
    rootMargin: '0px 0px 0px 0px',
    threshold: 0.5
});



    




function loadProducts(productsRequest){
    let productsContainer = $('.products');
    categoryIdRequest = $('.products').attr("categoryId");
    subcategoryIdRequest = $('.products').attr("subCategoryId");
    productsRequest.append('categoryIdRequest',categoryIdRequest);
    productsRequest.append('subcategoryIdRequest',subcategoryIdRequest);
    productsRequest.append('limit',limit);
    productsRequest.append('offset',offset);
    $.ajax({
            url: 'ajax/products.ajax.php',
            method: "POST",
            data: productsRequest,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function(data) {
                if(Object.keys(data).length === 0){
                    // console.log(data);
                    html += `
                        <div class="p-5">
                            <div class="p-5">
                                <div class="out-of-stock p-5 bg-black text-white">
        
                                    <p class="mb-0 text-center"><i class="bi bi-bag-x fs-1"></i></p>
        
                                    <h2 class="fs-1 text-center p-3">Pronto más artículos</h2>
                                    
                                    <p class="fw-light text-justify py-3">Lo sentimos, no tenemos disponible el/los artículos seleccionados, pronto dispondremos de más productos.</p>
                                    <a href="http://localhost/e-commerce/front-end/">
                                        <button class="py-2 btn btn-light rounded-0"> Volver a la página principal</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    `;
                }else{
                    
                    data.forEach(product => {
                        
                       
    
    
    
                        
                        html += `
                                    <div class="px-5 py-3 col-sm-6 col-lg-4 product-container">
                                        <div class="product position-relative">
                                            <a href="${product.route}" idproduct="${product.idproduct}">
                                                <img id="product-image" class="img-fluid" src="http://localhost/e-commerce/back-end/${product.cover_img}" alt="">
                                            </a>
                                            <div class="ribbon position-absolute top-0">
                                                <p>${product.new == 1 ? 'NEW' :''}</p>
                                                </div>
                                            <div id="sizes" class="sizes position-absolute bottom-0 px-3 w-100 d-none">
                                                <p class="text-center mb-0 py-1">Selecciona tu talla</p>
                                                <ul class="d-flex justify-content-evenly">
    
                                                `;
                                               
                                                details = JSON.parse(product.details);
                                                let sizes = Object.keys(details);
                                                for(size in sizes){
                                                    let stock  = details[sizes[size]].stock;
                                                    html += `<li><a class="text-decoration-none ${stock > 0 ? 'text-black' : 'text-secondary pe-none text-decoration-line-through'}" href="${sizes[size]}">${sizes[size]}</a></li>`;
                                                }

                        html += `   
                                                </ul>
                                            </div>
                                        </div>
                                        
                                        <div class="price-info d-flex justify-content-between">    
                                                <p class="description">${product.title}</p>
                                                <small class="price">${product.is_discount == 1 ? product.discount_price : product.price} USD</small>
                                            </div>
                                            <div class="discount-info d-flex justify-content-end">
                                                <p class="discount px-2 my-0 ${product.is_discount == 1 ? 'bg-black text-white' : 'transparent'}"> ${product.discount}%</p>
                                                <p class="normal-price text-decoration-line-through my-0 ${product.is_discount == 1 ? 'bg-black text-white' : 'transparent'}"> ${product.is_discount == 1 ? product.price : ''} USD</p>
                                            </div>
                                        </div>

                                    </div>
    
                        `;
                    })
                    
                    document.getElementById('products').innerHTML = html;
                }
                

            },complete: function() {
                $.getScript("views/js/products.js", function() {
                    let productsOnScreen = document.querySelectorAll('.products .product-container .product img');
                    // console.log(productsOnScreen.length);
                    if (productsOnScreen.length > 0 ) {
                            let lastItem = productsOnScreen[productsOnScreen.length-1];
                            observer.observe(lastItem);
                            
                        }else{
                            document.getElementById('products').innerHTML = html;
                        }
                });
             }

    });

}